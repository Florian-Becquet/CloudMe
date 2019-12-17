<?php

namespace App\Controller;

use App\Repository\UserRepository;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class AdminController extends AbstractController
{
    /**
     * @Route("/listUser", name="listUser")
     * 
     * controller pour l'affichage de la liste des utilisateures uniquement accesible pour l'admin
     */
    public function listUser(UserRepository $userRepo)
    {
        $subscriptions = array();
        $countSub = array();
        $i=0;
        $this->denyAccessUnlessGranted('ROLE_ADMIN');
        $listUser = $userRepo->findAll();
        //boucle dans laquelle pour chaque utilisateur on va aller faire un compte de ses souscriptions et ensuite le set dans un tableau 
        foreach ($listUser as $users){
            $subscriptions[$i] = $users->getSubscriptions();
            $countSub[$i] = count($subscriptions[$i]);
            $allUser[$i] = ['id' => $users->getId(), 'name' => $users->getName(), 'firstName' => $users->getFirstName(), 'status' => $users->GetStatus(), 'email' => $users->getEmail(), 'count' => $countSub[$i]];
            $i++;
        }
        
        return $this->render('admin/listUser.html.twig', ['users' => $allUser]);
    }
}
