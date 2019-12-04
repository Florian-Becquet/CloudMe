<?php

namespace App\Controller;

use App\Entity\Services;
use App\Repository\ServicesRepository;
use Knp\Component\Pager\PaginatorInterface;
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
    public function intro(){

        return $this->render('pages/home.html.twig');
    }     
    /**
     * @Route("/serveur", name="serveur")
     */
    public function serveur(Request $request,ServicesRepository $repo,PaginatorInterface $paginator){
        $info = $request->request->get('serv');
        $allVps = $repo ->findBy(['service_type' => $info]);
        if($request->request->getInt('page', 1) == 0){
            $page = 1;
        }
        else{
            $page = $request->request->getInt('page');
        }
            $vps = $this->get('knp_paginator')->paginate(
                // Doctrine Query, not results
                $allVps,
                // Define the page parameter
                $page,
                // Items per page
                5
            );
            return $this->render('pages/serveur.html.twig', [
                'allvps' => $vps ]);
    }
         /**
     * @Route("/infovps", name="infovps")
     */
    public function infoVps(Request $request){
        //recupération de l'id du service vps
        $id = $request->request->get('id');

        //fausses données 
        $metrics = array(['name' => 'VPS1', 'cpu' => 2,'ram' =>8,'space' => 500,'id' => 1],
                         ['name' => 'VPS2', 'cpu' => 8,'ram' =>16,'space' => 800,'id' => 2],
                         ['name' => 'VPS3', 'cpu' => 6,'ram' =>12,'space' => 1000,'id' => 3],
                        );

       //mise en place des données dans un tableau clé valeur result
        foreach ( $metrics as $met){
                if($met['id'] == $id){
                    $result = array(['name' => $met['name'],'cpu' => $met['cpu'] , 'ram'=> $met['ram'] , 'space'=> $met['space'],'id' => $id]); 
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
        $metrics = array(['name' => 'Serveur1', 'cpu' => 4,'ram' =>10,'space' => 450,'id' => 1],
                         ['name' => 'Serveur2', 'cpu' => 12,'ram' =>16,'space' => 500,'id' => 2],
                         ['name' => 'Serveur3', 'cpu' => 18,'ram' =>16,'space' => 800,'id' => 3],
                        );

       //mise en place des données dans un tableau clé valeur result
        foreach ( $metrics as $met){
                if($met['id'] == $id){
                    $result = array(['name' => $met['name'],'cpu' => $met['cpu'] , 'ram'=> $met['ram'] , 'space'=> $met['space'],'id' => $id]); 
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
        $metrics = array(['name' => 'Base de donnée 1', 'cpu' => 8,'ram' =>11,'space' => 400,'id' => 1],
                         ['name' => 'Base de donnée 2', 'cpu' => 14,'ram' =>14,'space' => 600,'id' => 2],
                         ['name' => 'Base de donnée 3', 'cpu' => 16,'ram' =>16,'space' => 700,'id' => 3],
                        );

       //mise en place des données dans un tableau clé valeur result
        foreach ( $metrics as $met){
                if($met['id'] == $id){
                    $result = array(['name' => $met['name'],'cpu' => $met['cpu'] , 'ram'=> $met['ram'] , 'space'=> $met['space'],'id' => $id]); 
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
        $metrics = array(['name' => 'Bureau Virtuel1', 'cpu' => 6,'ram' =>10,'space' => 350,'id' => 1],
                         ['name' => 'Bureau Virtuel2', 'cpu' => 12,'ram' =>12,'space' => 400,'id' => 2],
                         ['name' => 'Bureau Virtuel3', 'cpu' => 16,'ram' =>16,'space' => 600,'id' => 3],
                        );

       //mise en place des données dans un tableau clé valeur result
        foreach ( $metrics as $met){
                if($met['id'] == $id){
                    $result = array(['name' => $met['name'],'cpu' => $met['cpu'] , 'ram'=> $met['ram'] , 'space'=> $met['space'],'id' => $id]); 
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
}