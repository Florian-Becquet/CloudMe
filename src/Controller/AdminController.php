<?php

namespace App\Controller;

use App\Repository\UserRepository;
use App\Repository\ServicesRepository;
use App\Repository\SubscriptionRepository;
use Knp\Component\Pager\PaginatorInterface;
use Symfony\Component\HttpFoundation\Request;
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
    public function listSub(SubscriptionRepository $subRepo,Request $request,PaginatorInterface $paginator){
        $this->denyAccessUnlessGranted('ROLE_ADMIN');
       
        
        $paginateSub = array();
        $dateSub = "";
        $dateFin = "";
        //traitement de la recherche
        $dataInput = $request->query->get('input');
        if($request->query->get($dataInput)){
            
            $value = $request->query->get($dataInput);
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
                $paginateSub[$i] = ['name' => $user->getName(),'firstName' => $user->getFirstName(),'cpu' => $subscriptions[$i]->getCpu()
                ,'ram' =>  $subscriptions[$i]->getRam(),'space' =>  $subscriptions[$i]->getDiskSpace()
                ,'price' =>  $subscriptions[$i]->getPrice(),'dateSub' =>  $dateSub
                ,'dateFin' =>  $dateFin,'subName' =>  $subscriptions[$i]->getSubName(),
                'id' =>  $subscriptions[$i]->getId()];
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
            $paginateSub[$i] = ['name' => $user->getName(),'firstName' => $user->getFirstName(),'cpu' => $subscriptions[$i]->getCpu()
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
     * @Route("/recherche", name="recherche")
     * 
     * controller pour l'affichage de la liste des souscriptions uniquement accesible pour l'admin
     */
    public function recherche(){
        $this->denyAccessUnlessGranted('ROLE_ADMIN');
        return $this->render('admin/recherche.html.twig');
    }

}
