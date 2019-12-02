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
    }     /**
     * @Route("/serveur", name="serveur")
     */
    public function serveur(){
        $serveur = $this->getDoctrine()->getRepository(Services::class);
        $vps = $serveur->findBy(['service_type' => 'vps']);
        return $this->render('pages/serveur.html.twig', ['vps' => $vps]);
    }
         /**
     * @Route("/infovps", name="infovps")
     */
    public function infoVps(){

        return $this->render('pages/infoVps.html.twig');
    }
         /**
     * @Route("/infoserveur", name="infoserveur")
     */
    public function infoServeur(){

        return $this->render('pages/infoServeur.html.twig');
    }
         /**
     * @Route("/infobdd", name="infobdd")
     */
    public function infoBdd(){

        return $this->render('pages/infoBdd.html.twig');
    }
         /**
     * @Route("/infobv", name="infobv")
     */
    public function inBv(){

        return $this->render('pages/infoBv.html.twig');
    }
         /**
     * @Route("/infometrics", name="infometrics")
     */
    public function infoMetrics(){

        return $this->render('pages/infoMetrics.html.twig');
    }
}
