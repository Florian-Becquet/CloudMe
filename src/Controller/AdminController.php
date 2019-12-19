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
        $listUser = $userRepo->findAll();
        //boucle dans laquelle pour chaque utilisateur on fait un compte de ses souscriptions et ensuite le set dans un tableau 
        foreach ($listUser as $users){
            $subscriptions[$i] = $users->getSubscriptions();
            $countSub[$i] = count($subscriptions[$i]);
            $allUser[$i] = ['id' => $users->getId(), 'name' => $users->getName(), 'firstName' => $users->getFirstName(), 'status' => $users->GetStatus(), 'email' => $users->getEmail(), 'count' => $countSub[$i]];
            $i++;
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
            if($dataInput =="os"){
                $dataInput = "OS";
            }
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
    public function listSub(SubscriptionRepository $subRepo){
        $this->denyAccessUnlessGranted('ROLE_ADMIN');
        return $this->render('admin/listSub.html.twig');
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
