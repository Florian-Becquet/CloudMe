<?php

namespace App\Controller;

use DateTime;
use App\Entity\User;
use App\Entity\Services;
use App\Entity\Subscription;
use App\Form\SubscriptionType;
use App\Repository\ServicesRepository;
use Doctrine\ORM\EntityManagerInterface;
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
    public function serveur(Request $request,ServicesRepository $repo,EntityManagerInterface $em){
        $info = $request->request->get('serv');
        $date = new DateTime;
        $sub = new Subscription;
        $user = new User;
        $service = new Services;
        $user = $this->getUser();
        $vps = $repo->findBy(['service_type' => $info, 'available' => '1']);
        $form = $this->createForm(SubscriptionType::class, $sub, 
        ['action' => $this->generateUrl('serveur')]);
        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()) {
            $sub_name = 'CL12'. $user->getId() . $info . $sub->getId();
            $sub->setStatus('0');
            $sub->setDateSub($date);
            $sub->setIpAdresse('231');
            $sub->setIdUser($user);
            $sub->setSubName($sub_name);
            $sub->setPrice('50');
            $serveur = $request->request->get('serveur');
            $vpsChosen = $repo->findOneBy(['id' => $serveur]);
            $sub->setIdServices($vpsChosen);
            $em->persist($sub);
            $em->flush();
            return $this->redirectToRoute('home');
            // return var_dump($sub);
        }
        return $this->render('pages/serveur.html.twig', [
            'subscriptionForm' => $form->createView(), 'liste' => $vps, 'choix' => $info
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
}