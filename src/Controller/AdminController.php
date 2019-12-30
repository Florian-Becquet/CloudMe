<?php

namespace App\Controller;

use App\Form\AccountType;
use App\Repository\UserRepository;
use App\Repository\PricingRepository;
use App\Repository\ServicesRepository;
use Doctrine\ORM\EntityManagerInterface;
use App\Repository\SubscriptionRepository;
use Knp\Component\Pager\PaginatorInterface;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class AdminController extends AbstractController
{
    /**
     * @Route("/listUser", name="listUser")
     * 
     * controller pour l'affichage de la liste des utilisateures uniquement accesible pour l'admin
     */
    public function listUser(UserRepository $userRepo, PaginatorInterface $paginator, Request $request)
    {
        $subscriptions = array();
        $countSub = array();
        $i=0;
        $this->denyAccessUnlessGranted('ROLE_ADMIN');
        $dataInput = $request->query->get('input');
        if($request->query->get($dataInput)){
            $value = $request->query->get($dataInput);
            $listUser = $userRepo->findByParameters($value, $dataInput);
            foreach ($listUser as $users){
                $subscriptions[$i] = $users->getSubscriptions();
                $countSub[$i] = count($subscriptions[$i]);
                $allUser[$i] = ['id' => $users->getId(), 'name' => $users->getName(), 'firstName' => $users->getFirstName(), 'status' => $users->GetStatus(), 'email' => $users->getEmail(), 'count' => $countSub[$i]];
                $i++;
            }
        }
        else{
        $listUser = $userRepo->findAll();
        //boucle dans laquelle pour chaque utilisateur on fait un compte de ses souscriptions et ensuite le set dans un tableau 
            foreach ($listUser as $users){
                $subscriptions[$i] = $users->getSubscriptions();
                $countSub[$i] = count($subscriptions[$i]);
                $allUser[$i] = ['id' => $users->getId(), 'name' => $users->getName(), 'firstName' => $users->getFirstName(), 'status' => $users->GetStatus(), 'email' => $users->getEmail(), 'count' => $countSub[$i]];
                $i++;
            }
        }
        $users = $paginator->paginate(
            $allUser, // Requête contenant les données à paginer (ici nos services)
            $request->query->getInt('page', 1), // Numéro de la page en cours, passé dans l'URL, 1 si aucune page
            5 // Nombre de résultats par page
        );
        
        return $this->render('admin/listUser.html.twig', ['users' => $users]);
    }
    /**
     * @Route("/listServ", name="listServ")
     * 
     * controller pour l'affichage de la liste des services uniquement accesible pour l'admin
     */
    public function listServ(ServicesRepository $serviceRepo, PaginatorInterface $paginator, Request $request){
        $this->denyAccessUnlessGranted('ROLE_ADMIN');
        //recuperation de la requete input 
        $dataInput = $request->query->get('input');
        //verification de l'existance d'un choix recherche
        if($request->query->get($dataInput)){
            $value = $request->query->get($dataInput);
            $listServ = $serviceRepo->findByParameters($value,$dataInput);
        }
        else{
            $listServ = $serviceRepo->findAll();
        }
        //pagination a partir de listServ
        $services = $paginator->paginate(
            $listServ, // Requête contenant les données à paginer (ici nos services)
            $request->query->getInt('page', 1), // Numéro de la page en cours, passé dans l'URL, 1 si aucune page
            10 // Nombre de résultats par page
        );
        return $this->render('admin/listServ.html.twig', ['services' => $services ]);
    }
    /**
     * @Route("/listSub", name="listSub")
     * 
     * controller pour l'affichage de la liste des souscriptions uniquement accesible pour l'admin
     */
    public function listSub(SubscriptionRepository $subRepo,Request $request,PaginatorInterface $paginator,UserRepository $userRepo){
        $this->denyAccessUnlessGranted('ROLE_ADMIN');
        $k = 0;
        
        $paginateSub = array();
        $dateSub = "";
        $dateFin = "";
       
        //traitement de la recherche
        $dataInput = $request->query->get('input');
        if($request->query->get($dataInput)){
       

            $value = $request->query->get($dataInput);
            //condition si on reçoit une date complete pour la reformater en format Américain
            if(stripos($dataInput,'date') !== false){
                if(mb_substr_count($value,'-') == 2){
                    $date = new \DateTime($value);
                    $value = $date->format('Y-m-d');
                       
            }
        }
        //condition si on recoit l'email de l'utilisateur on va chercher dans le User repo toutes les souscriptions pour les lister
            if($dataInput == "email"){
                $user = $userRepo->findByParameters($value,$dataInput);
                for($j = 0; $j < count($user); $j++){
                    $subscriptions[$j] = $user[$j]->getSubscriptions();
                    
                        for($i=0; $i < count($subscriptions[$j]); $i++){
                            
                            $dateSub = $subscriptions[$j][$i]->getDateSub()->format('d-m-Y');
                            if($subscriptions[$j][$i]->getDateFin() != null){
                                //traitement de la date de fin en format jours mois année en string
                            $dateFin = $subscriptions[$j][$i]->getDateFin()->format('d-m-Y');
                            }
                            $paginateSub[$k] = ['name' => $user[$j]->getName(),'firstName' => $user[$j]->getFirstName(),'email'=>$user[$j]->getEmail(),'cpu' => $subscriptions[$j][$i]->getCpu()
                            ,'ram' =>  $subscriptions[$j][$i]->getRam(),'space' =>  $subscriptions[$j][$i]->getDiskSpace()
                            ,'price' =>  $subscriptions[$j][$i]->getPrice(),'dateSub' =>  $dateSub
                            ,'dateFin' =>  $dateFin,'subName' =>  $subscriptions[$j][$i]->getSubName(),
                            'id' =>  $subscriptions[$j][$i]->getId()];
                            $k++;
                        }
                 
                }
              
            }
            else{
            $subscriptions= $subRepo->findByParameters($value,$dataInput);
            for($i = 0 ; $i< count($subscriptions);$i++){
                //recupération de l'objet user qui appartient a la souscription[$i]
                $user = $subscriptions[$i]->getIdUser();
                //traitement de la date de sub en format jours mois année en string
                $dateSub = $subscriptions[$i]->getDateSub()->format('d-m-Y');
                if($subscriptions[$i]->getDateFin() != null){
                    //traitement de la date de fin en format jours mois année en string
                $dateFin = $subscriptions[$i]->getDateFin()->format('d-m-Y');
                }
                $paginateSub[$i] = ['name' => $user->getName(),'firstName' => $user->getFirstName(),'email'=>$user->getEmail(),'cpu' => $subscriptions[$i]->getCpu()
                ,'ram' =>  $subscriptions[$i]->getRam(),'space' =>  $subscriptions[$i]->getDiskSpace()
                ,'price' =>  $subscriptions[$i]->getPrice(),'dateSub' =>  $dateSub
                ,'dateFin' =>  $dateFin,'subName' =>  $subscriptions[$i]->getSubName(),
                'id' =>  $subscriptions[$i]->getId()];
                }
            }
        }
        else{
         //prise de toutes les souscriptions dans la base de donnée dans la variable subscriptions
        $subscriptions = $subRepo->findAll();
        //boucle qui permet d'alimenter le tableau paginateSub 
        for($i = 0 ; $i< count($subscriptions);$i++){
            //recupération de l'objet user qui appartient a la souscription[$i]
            $user = $subscriptions[$i]->getIdUser();
            //traitement de la date de sub en format jours mois année en string
            $dateSub = $subscriptions[$i]->getDateSub()->format('d-m-Y');
            if($subscriptions[$i]->getDateFin() != null){
                //traitement de la date de fin en format jours mois année en string
            $dateFin = $subscriptions[$i]->getDateFin()->format('d-m-Y');
            }
            $paginateSub[$i] = ['name' => $user->getName(),'firstName' => $user->getFirstName(),'email' => $user->getEmail(),'cpu' => $subscriptions[$i]->getCpu()
            ,'ram' =>  $subscriptions[$i]->getRam(),'space' =>  $subscriptions[$i]->getDiskSpace()
            ,'price' =>  $subscriptions[$i]->getPrice(),'dateSub' =>  $dateSub
            ,'dateFin' =>  $dateFin,'subName' =>  $subscriptions[$i]->getSubName(),
            'id' =>  $subscriptions[$i]->getId()];
        }
    }
        //mise en place de la pagination par le tableau paginateSub alimenter dans la boucle au dessus
        $subs = $paginator->paginate(
            $paginateSub, // Requête contenant les données à paginer 
            $request->query->getInt('page', 1), // Numéro de la page en cours, passé dans l'URL, 1 si aucune page
            10 // Nombre de résultats par page
        );
        return $this->render('admin/listSub.html.twig',['subscriptions' => $subs]);
    }

    /**
     * @Route("/changeDisponibility", name="changeDisponibility")
     * 
     * fonction pour changer la disponibilité d'un service
     */
    public function changeDisponibility(Request $request, ServicesRepository $servRepo, EntityManagerInterface $em){
        $id = $request->query->get('id');
        $currentServ = $servRepo->find($id);
        if ($currentServ->getAvailable() == 1){
            $currentServ->setAvailable(0);
        }
        elseif ($currentServ->getAvailable() == 0){
            $currentServ->setAvailable(1);
        }
        $em->persist($currentServ);
        $em->flush();
        return new Response('ok');
    }
     /**
     * @Route("/changeStatus", name="changeStatus")
     * 
     * change le status de l'utilisateur en bdd.
     */
    public function changeStatus(Request $request , UserRepository $userRepo, EntityManagerInterface $em){
        $this->denyAccessUnlessGranted('ROLE_ADMIN');
        $id = $request->query->get('id');
        $status = $request->query->get('status');
        $user = $userRepo->find($id);
        $user->setStatus($status);
        $em->persist($user);
        $em->flush();
       return new Response($status);
    }
    /**
     * @Route("/modifUser", name="modifUser")
     * 
     * Modifie les données d'un user par l'Admin.
     */
    public function modifUser(Request $request,UserRepository $userRepo){
        
        $id = $request->request->get('id');
        $user = $userRepo->find($id);
        $form = $this->createForm(AccountType::class, $user,['action' => $this->generateUrl('modifUser')]); // Créer un formulaire
        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()) { // Si le formulaire est valide et qu'il est envoyé
            $em = $this->getDoctrine()->getManager();
            $em->persist($user);
            $em->flush();
            
            $this->addFlash('success','Le profil a bien été modifié');
            return $this->redirectToRoute('home');
        }

        return $this->render('admin/modifyUser.html.twig', [
            'formProfil'=> $form->createView(),'user' => $user
        ]);
    }
       
    /**
     * @Route("/changePrice", name="changePrice")
     * 
     * change les prix des services
     */
    public function changePrice(PricingRepository $pricingRepo, Request $request, EntityManagerInterface $em){
        //Si il y a une requete avec newPrice on decode NewPrice et on va chercher les valeurs existantes des prix dans la bdd
        if($request->request->get('newPrice')){
            $newPrices = $request->request->get('newPrice');
            $newPrices = json_decode($newPrices);
            $currentPrice = $pricingRepo->findAll();
            //on parcours le tableau currentPrice et le tableau newPrice
            for($i=0; $i<count($currentPrice); $i++){
                for($j=0; $j<count($newPrices);$j++){
                    //si la categorie du prix courant  et egales a la categories envoyé dans newPrice on set le nouveau prix
                    if($currentPrice[$i]->getCategories() == $newPrices[$j]->categories){
                        $currentPrice[$i]->setPrice($newPrices[$j]->prix);
                        $em->persist($currentPrice[$i]);
                    }
                }
            }
            //on envoie en bdd
            $em->flush();
            return new Response('success');
            
        }
        else{
            $this->denyAccessUnlessGranted('ROLE_ADMIN');
            $tabPrice = $pricingRepo->findAll();
            return $this->render('admin/changePrice.html.twig', ['prices' => $tabPrice]);
        }
    }
}
