<?php

namespace App\Controller;

use App\Repository\UserRepository;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class AdminController extends AbstractController
{
    /**
     * @Route("/listUser", name="listUser")
     */
    public function listUser(UserRepository $userRepo)
    {
        $this->denyAccessUnlessGranted('ROLE_ADMIN');
        $listUser = $userRepo->findAll();
        return $this->render('admin/listUser.html.twig', ['users' => $listUser]);
    }
}
