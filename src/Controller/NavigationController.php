<?php

namespace App\Controller;

use DateTime;
use Dompdf\Dompdf;
use Dompdf\Options;
use App\Entity\User;
use App\Entity\Services;
use App\Entity\Subscription;
use App\Form\SubscriptionType;
use App\Repository\PricingRepository;
use App\Repository\ServicesRepository;
use Doctrine\ORM\EntityManagerInterface;
use App\Repository\SubscriptionRepository;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class NavigationController extends Controller
{
  /**
     * @Route("/home", name="home")
     */
    public function home(){
            $vps = array(
                ['name' => 'vps0001' , 'id' => '1'],
                ['name' => 'vps0002' , 'id' => '2'],
                ['name' => 'vps0003' , 'id' => '3']);
            $serveur = array(
                ['name' => 'serveur0001' , 'id' => '1'],
                ['name' => 'serveur0002' , 'id' => '2'],
                ['name' => 'serveur0003' , 'id' => '3']);
            $bureauVirtuel = array(
                ['name' => 'BV0001' , 'id' => '1'],
                ['name' => 'BV0002' , 'id' => '2'],
                ['name' => 'BV0003' , 'id' => '3']);
            $bdd = array();
        return $this->render('base.html.twig' , ['vps' => $vps , 'serveur' => $serveur, 'bureauVirtuel' => $bureauVirtuel,'bdd' => $bdd]);
    }
  

     /**
     * @Route("/intro", name="intro")
     */
    public function intro(Request $request){
        $id = $request->request->get('id');

        //fausses données 
        $metrics = array (['CPU' => '24', 'RAM' => '32','Disque'=>'15','id' => 1]);
        
        return $this->render('pages/home.html.twig', ['service'=>$metrics]);
    }     
    /**
     * @Route("/serveur", name="serveur")
     * 
     * controller pour la page serveur qui va afficher soit un formulaire soit une liste des services possibles
     */
    public function serveur(Request $request,ServicesRepository $repo,EntityManagerInterface $em, PricingRepository $repoPrice, SubscriptionRepository $repoSub){
        //info contient le type de service choisi (vps/vdi/srv/bdd) et on cherche dans la bdd ce service disponible
        $info = $request->request->get('serv');
        if($info == "srv"){
            $info = "Serveur";
        }
        else if($info =="bdd"){
            $info = "Base de donnée";
        }
        else if($info =="vdi"){
            $info = "Bureau virtuel";
        }
        else if($info =="vps"){
            $info = "VPS";
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
        ['action' => $this->generateUrl('serveur')]);
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
        return $this->render('pages/serveur.html.twig', [
            'subscriptionForm' => $form->createView(), 'liste' => $vps, 'choix' => $info,'price' => $price
        ]);

    }
         /**
     * @Route("/infovps", name="infovps")
     */
    public function infoVps(Request $request){
        //recupération de l'id du service vps
        $id = $request->request->get('id');

        //fausses données 
        $metrics = array(['name' => 'VPS1', 'ip' => '192.65.36.1','HA'=>'None','status' => 'running','cpu' => 2,'ram' =>8,'space' => 500,'id' => 1],
                         ['name' => 'VPS2', 'ip' => '193.70.30.1','HA'=>'Available','status' => 'running','cpu' => 8,'ram' =>16,'space' => 410,'id' => 2],
                         ['name' => 'VPS3', 'ip' => '182.68.40.1','HA'=>'Available','status' => 'not running','cpu' => 6,'ram' =>12,'space' => 260,'id' => 3],
                        );

       //mise en place des données dans un tableau clé valeur result
        foreach ( $metrics as $met){
                if($met['id'] == $id){
                    $result = array(['name' => $met['name'],'ip' => $met['ip'],'HA' => $met['HA'],'status'=> $met['status'],'cpu' => $met['cpu'] , 'ram'=> $met['ram'] , 'space'=> $met['space'],'id' => $id]); 
                }
        }
        
        return $this->render('pages/infoVps.html.twig',['info' => $result]);
    }
         /**
     * @Route("/infoserveur", name="infoserveur")
     */
    public function infoServeur(Request $request){
        $id = $request->request->get('id');

        //fausses données 
        $metrics = array(['name' => 'Serveur1', 'ip' => '190.15.30.2','HA'=>'Available','status' => 'not running','cpu' => 4,'ram' =>10,'space' => 380,'id' => 1],
                         ['name' => 'Serveur2', 'ip' => '193.60.65.1','HA'=>'None','status' => 'not running','cpu' => 12,'ram' =>16,'space' => 500,'id' => 2],
                         ['name' => 'Serveur3', 'ip' => '198.75.56.3','HA'=>'None','status' => 'running','cpu' => 18,'ram' =>16,'space' => 260,'id' => 3],
                        );

       //mise en place des données dans un tableau clé valeur result
        foreach ( $metrics as $met){
                if($met['id'] == $id){
                    $result = array(['name' => $met['name'],'ip' => $met['ip'],'HA' => $met['HA'],'status'=> $met['status'],'cpu' => $met['cpu'] , 'ram'=> $met['ram'] , 'space'=> $met['space'],'id' => $id]); 
                }
        }
        return $this->render('pages/infoServeur.html.twig',['info' => $result]);
    }
         /**
     * @Route("/infobdd", name="infobdd")
     */
    public function infoBdd(Request $request){
        $id = $request->request->get('id');

        //fausses données 
        $metrics = array(['name' => 'Base de donnée 1', 'ip' => '197.67.37.7','HA'=>'None','status' => 'running','cpu' => 8,'ram' =>11,'space' => 200,'id' => 1],
                         ['name' => 'Base de donnée 2', 'ip' => '190.60.30.0','HA'=>'Available','status' => 'not running','cpu' => 14,'ram' =>14,'space' => 400,'id' => 2],
                         ['name' => 'Base de donnée 3', 'ip' => '193.33.33.3','HA'=>'None','status' => 'not running','cpu' => 16,'ram' =>16,'space' => 450,'id' => 3],
                        );

       //mise en place des données dans un tableau clé valeur result
        foreach ( $metrics as $met){
                if($met['id'] == $id){
                    $result = array(['name' => $met['name'],'ip' => $met['ip'],'HA' => $met['HA'],'status'=> $met['status'],'cpu' => $met['cpu'] , 'ram'=> $met['ram'] , 'space'=> $met['space'],'id' => $id]); 
                }
        }
        return $this->render('pages/infoBdd.html.twig',['info' => $result]);
    }
         /**
     * @Route("/infobv", name="infobv")
     */
    public function infoBv(Request $request){
        $id = $request->request->get('id');

        //fausses données 
        $metrics = array(['name' => 'Bureau Virtuel1', 'ip' => '195.55.35.5','HA'=>'Available','status' => 'running','cpu' => 6,'ram' =>10,'space' => 350,'id' => 1],
                         ['name' => 'Bureau Virtuel2', 'ip' => '194.45.34.4','HA'=>'None','status' => 'not running','cpu' => 12,'ram' =>12,'space' => 400,'id' => 2],
                         ['name' => 'Bureau Virtuel3', 'ip' => '199.69.96.9','HA'=>'None','status' => 'running','cpu' => 16,'ram' =>16,'space' => 300,'id' => 3],
                        );

       //mise en place des données dans un tableau clé valeur result
        foreach ( $metrics as $met){
                if($met['id'] == $id){
                    $result = array(['name' => $met['name'],'ip' => $met['ip'],'HA' => $met['HA'],'status'=> $met['status'],'cpu' => $met['cpu'] , 'ram'=> $met['ram'] , 'space'=> $met['space'],'id' => $id]); 
                }
        }
        return $this->render('pages/infoBv.html.twig',['info' => $result]);
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
     * @Route("/infofacture", name="infofacture")
     */
    public function infofacture(){
        
        return $this->render('pages/infoFacture.html.twig');
    }

    /**
     * @Route("/facture", name="facture")
     */
    public function facture(){

        // Configure Dompdf according to your needs
        $pdfOptions = new Options();
        $pdfOptions->set('defaultFont', 'Arial');
        $pdfOptions->setDpi(150);
        // Instantiate Dompdf with our options
        $dompdf = new Dompdf($pdfOptions);
        // repo->findall()
        
        // Retrieve the HTML generated in our twig file
        $html = $this->renderView('pages/facture.html.twig');
        
        // Load HTML to Dompdf
        $dompdf->loadHtml($html);
        
        // (Optional) Setup the paper size and orientation 'portrait' or 'portrait'
        $dompdf->setPaper('A4', 'portrait');

        // Render the HTML as PDF
        $dompdf->render();

        // Output the generated PDF to Browser (force download)
        $dompdf->stream("mypdf.pdf", [
            "Attachment" => true
        ]);
    }
}