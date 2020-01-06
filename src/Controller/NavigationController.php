<?php

namespace App\Controller;

use DateTime;
use Dompdf\Dompdf;
use App\Entity\TVA;
use Dompdf\Options;
use App\Entity\User;
use App\Entity\Facture;
use App\Entity\Services;
use App\Form\AccountType;
use App\Entity\Subscription;
use App\Form\SubscriptionType;
use App\Repository\TVARepository;
use App\Form\RegistrationFormType;
use App\Repository\UserRepository;
use App\Repository\FactureRepository;
use App\Repository\PricingRepository;
use App\Repository\ServicesRepository;
use Doctrine\ORM\EntityManagerInterface;
use App\Repository\SubscriptionRepository;
use Symfony\Component\HttpFoundation\Request;
use Doctrine\Common\Persistence\ObjectManager;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Validator\Constraints\Date;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class NavigationController extends Controller
{
  /**
     * @Route("/home", name="home")
     */
    public function home(ServicesRepository $serviceRepo){
        $user = $this->getUser();
        $date = new DateTime;
        $vps = array();
        $serveur = array();
        $bureauVirtuel = array();
        $bdd = array();
        $allSub = array();
        $subscriptions = $user->getSubscriptions();
        for($i=0; $i<count($subscriptions);$i++){
            if($subscriptions[$i]->getDateFin() > $date || $subscriptions[$i]->getDateFin() == null ){
            $id_serv = $subscriptions[$i]->getIdServices();
            $serv = $serviceRepo->findOneBy(['id' => $id_serv]);
            if($serv->getServiceType() == "vps"){
                $countVps = count($vps);
                $vps[$countVps] = ['name' => $subscriptions[$i]->getSubName(),'id' => $subscriptions[$i]->getId()];
                
            }
            else if($serv->getServiceType() == "srv"){
                $countServ = count($serveur);
                $serveur[$countServ] = ['name' => $subscriptions[$i]->getSubName(),'id' => $subscriptions[$i]->getId()];
            }
            else if($serv->getServiceType() == "vdi"){
                $countVdi = count($bureauVirtuel);
                $bureauVirtuel[$countVdi] = ['name' => $subscriptions[$i]->getSubName(),'id' => $subscriptions[$i]->getId()];
            }
            else if($serv->getServiceType() == "bdd"){
                $countBdd = count($bdd);
                $bdd[$countBdd] = ['name' => $subscriptions[$i]->getSubName(),'id' => $subscriptions[$i]->getId()];
            }
        }
    }   
        return $this->render('base.html.twig' , ['vps' => $vps , 'serveur' => $serveur, 'bureauVirtuel' => $bureauVirtuel,'bdd' => $bdd]);
    }
  

     /**
     * @Route("/intro", name="intro")
     */
    public function intro(Request $request, ServicesRepository $serviceRepo, SubscriptionRepository $subRepo){
        $user = $this->getUser();
        $allSub = array();
        $idUser = $user->getId();
        $subscriptions = $user->getSubscriptions();
        for($i=0; $i<count($subscriptions);$i++){
            $id_serv = $subscriptions[$i]->getIdServices();
            $serv = $serviceRepo->findOneBy(['id' => $id_serv]);
            $allSub[$i] = ['name' => $subscriptions[$i]->getSubName(), 'id' => $subscriptions[$i]->getId(), 'status' => $subscriptions[$i]->getStatus(),'headline' => $serv->getHeadline(), 'type' => $serv->getServiceType()];
        }
        $id = $request->request->get('id');

        //methode pour rechercher la somme de cpu/ram/disk_space pour les souscriptions d'un user
        $sumCpu = $subRepo->getSumSubByUser('cpu', $idUser);
        $sumRam = $subRepo->getSumSubByUser('ram', $idUser);
        $sumDisk = $subRepo->getSumSubByUser('disk_space', $idUser);
        $countSub = count($subscriptions);
        $maxDisk = $countSub * 500;
        $maxRam = $countSub * 16;
        $maxCpu = $countSub * 8;
        
        return $this->render('pages/home.html.twig', ['maxCpu' => $maxCpu,'maxRam' => $maxRam,'maxDisk' => $maxDisk, 'CPU' => $sumCpu, 'RAM' => $sumRam,'Disque'=>$sumDisk, 'souscription' => $allSub]);
    }     
    /**
     * @Route("/formSub", name="formSub")
     * 
     * controller pour la page serveur qui va afficher soit un formulaire soit une liste des services possibles
     */
    public function formSub(Request $request,ServicesRepository $repo,EntityManagerInterface $em, PricingRepository $repoPrice, SubscriptionRepository $repoSub){
        //info contient le type de service choisi (vps/vdi/srv/bdd) et on cherche dans la bdd ce service disponible
        $info = $request->request->get('serv');
        if($info == "srv"){
            $choix = "Serveur";
        }
        else if($info =="bdd"){
            $choix = "Base de donnée";
        }
        else if($info =="vdi"){
            $choix = "Bureau virtuel";
        }
        else if($info =="vps"){
            $choix = "VPS";
        }
        
        $vps = $repo->findBy(['service_type' => $info, 'available' => '1']);
        $price = $repoPrice->findAll();
        //on set different objet utile
        $date = new DateTime;
        $sub = new Subscription;
        $user = new User;
        //on recupere les infos de l'user courant
        $user = $this->getUser();
        //création du formulaire de souscription, avec le parametre action qui indique le controller dans lequel le form sera traité
        $form = $this->createForm(SubscriptionType::class, $sub, 
        ['action' => $this->generateUrl('formSub')]);
        $form->handleRequest($request);
        //si le form est valide est soumis
        if ($form->isSubmitted() && $form->isValid()) {
            //le status est set a 0 par défaut, l'admin pourra le set a 1 pour activer, set la date de debut, l'adresse ip, l'id user et le nom de la souscription
            $sub->setStatus('0');
            $sub->setDateSub($date);
            $sub->setIpAdresse('231');
            $sub->setIdUser($user);
            //recuperation du prix
            $prixService = $request->request->get('prixService');
            $sub->setPrice($prixService);
            //recuperation et instanciation du service choisis
            $serveur = $request->request->get('serveur');
            $vpsChosen = $repo->findOneBy(['id' => $serveur]);
            $sub->setIdServices($vpsChosen);
            //on crée le nom de la souscription
            $allSub = $repoSub->findAll();
            $subId = $allSub[count($allSub) -1]->getId() +1;
            $sub_name = 'CL12'. $user->getId() . $vpsChosen->getServiceType() . $subId;
            $sub->setSubName($sub_name);
            //envoie en bdd et redirection vers home
            $em->persist($sub);
            $em->flush();
            return $this->redirectToRoute('home');
        }
        return $this->render('pages/formSub.html.twig', [
            'subscriptionForm' => $form->createView(), 'liste' => $vps, 'choix' => $choix,'price' => $price
        ]);

    }
         /**
     * @Route("/info", name="info")
     */
    public function info(Request $request, SubscriptionRepository $sub, ServicesRepository $serviceRepo){
        //recupération de l'id du service vps
        $id = $request->request->get('id');
        $info = $sub->findOneBy(['id' => $id]);
        $protection ="";
        $replication = "";
        $retention = array('Sauvegarde du 17/11/2019');
        $serv = $serviceRepo->findOneBy(['id' => $info->getIdServices()]);
        if($info->getHighAvailability()){
        $arr = explode(',',$info->getHighAvailability());
            if(count($arr)==2){
                $protection = $arr[0];
                $replication = $arr[1];
            }
            else if (count($arr) == 1){
                if($arr[0] == "protectionHA"){
                    $protection = $arr[0];
                }
                else if ($arr[0] == "replicationServ"){
                    $replication = $arr[0];
                }
            } 
            
        }

        $result = array(['headline' => $serv->getHeadline(), 'name' => $info->getSubName(),'ip' => $info->getIP(),'protection' => $protection
        ,'replication' => $replication,'status' => $info->getStatus(),'backup' => $info->getBackup(),'cpu'=> $info->getCpu(),'ram' => $info->getRam()
        ,'space'=> $info->getDiskSpace(),'price' =>$info->getPrice(),'id' => $info->getId(),'dateFin' => $info->getDateFin() ]);
        
        return $this->render('pages/info.html.twig',['info' => $result,'retention'=>$retention]);
    }
         /**
     * @Route("/infometrics", name="infometrics")
     */
    public function infoMetrics(){

        return $this->render('pages/infoMetrics.html.twig');
    }
    
    /**
     * @Route("/forfait", name="forfait")
     */
    public function forfait(Request $request){
        $info = $request->request->get('forfait');
        $serveur = $this->getDoctrine()->getRepository(Services::class);
        $description = $serveur->findBy(['id' => $info]);
        return $this->render('pages/forfait.html.twig',['info' => $description]);
    }

    /**
     * @Route("/mon-compte/profil", name="profil")
     */
    public function profil(Request $request, UserRepository $user,EntityManagerInterface $em)
    {
        $user = $this->getUser(); // Utilisateur courant
        $form = $this->createForm(AccountType::class, $user,['action' => $this->generateUrl('profil')]); // Créer un formulaire
        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()) { // Si le formulaire est valide et qu'il est envoyé
            $em = $this->getDoctrine()->getManager();
            $em->persist($user);
            $em->flush();
            
            $this->addFlash('success','Votre profil a bien été modifié');
            return $this->redirectToRoute('home');
        }

        return $this->render('pages/monProfil.html.twig', [
            'formProfil'=> $form->createView(),
        ]);
    }
     /**
     * @Route("/unsubUser", name="unsubUser")
     * 
     * L'utilisateur se désabonne
     */
    public function unSubUser(Request $request, SubscriptionRepository $subRepo,EntityManagerInterface $em){
        $id = $request->request->get('id');
        $sub = $subRepo->find($id);
        $dateUnSub = new DateTime();
        $sub->setDateFin($dateUnSub);
        $sub->setStatus(1);
        $em->persist($sub);
        $em->flush();
        $date = $dateUnSub->format('d-m-Y');
        return new Response("success");

    }
}