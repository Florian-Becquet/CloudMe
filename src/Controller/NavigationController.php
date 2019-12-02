<?php

namespace App\Controller;

use App\Entity\Services;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class NavigationController extends AbstractController
{
  /**
     * @Route("/home", name="home")
     */
    public function home(){
            $vps = array('vps0001','vps0002','vps0003');
            $serveur = array('serv0001','serv0002','serv0003');
            $bureauVirtuel = array('BV0001','BV0002','BV0003');
            $bdd = array();
        return $this->render('base.html.twig' , ['vps' => $vps , 'serveur' => $serveur, 'bureauVirtuel' => $bureauVirtuel,'bdd' => $bdd]);
    }
       /**
     * @Route("/intro", name="intro")
     */
    public function intro(){

        return $this->render('pages/home.html.twig');
    }

     /**
     * @Route("/serveur", name="serveur")
     */
    public function serveur(){
        $serveur = $this->getDoctrine()->getRepository(Services::class);
        $vps = $serveur->findBy(['service_type' => 'vps']);
        return $this->render('pages/serveur.html.twig', ['vps' => $vps]);
    }
}
