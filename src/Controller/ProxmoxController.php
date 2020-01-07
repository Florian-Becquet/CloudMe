<?php

namespace App\Controller;

use DateTime;
use App\Entity\User;
use App\Entity\Subscription;
use App\Form\SubscriptionType;
use App\Repository\PricingRepository;
use App\Repository\ServicesRepository;
use Corsinvest\ProxmoxVE\Api\PveClient;
use Corsinvest\ProxmoxVE\Api\ApiFunction;
use Corsinvest\ProxmoxVE\Api\PVEStatusVmidLxcNodeNodesStart;
use Corsinvest\ProxmoxVE\Api\PVEVmidLxcNodeNodesVncproxy;
use Doctrine\ORM\EntityManagerInterface;
use App\Repository\SubscriptionRepository;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class ProxmoxController extends AbstractController
{
    /**
     * @Route("/formSub", name="formSub")
     *
     * controller pour la page serveur qui va afficher soit un formulaire soit une liste des services possibles
     */
    public function formSub(Request $request, ServicesRepository $repo, EntityManagerInterface $em, PricingRepository $repoPrice, SubscriptionRepository $repoSub)
    {
        //info contient le type de service choisi (vps/vdi/srv/bdd) et on cherche dans la bdd ce service disponible
        $info = $request->request->get('serv');
        if ($info == "srv") {
            $choix = "Serveur";
        } else if ($info == "bdd") {
            $choix = "Base de donnée";
        } else if ($info == "vdi") {
            $choix = "Bureau virtuel";
        } else if ($info == "vps") {
            $choix = "VPS";
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
            ['action' => $this->generateUrl('formSub')]);
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
            $subId = $allSub[count($allSub) - 1]->getId() + 1;
            $sub_name = 'CL12' . $user->getId() . $vpsChosen->getServiceType() . $subId;
            $function = new ApiFunction("sd-158254.dedibox.fr");
            $vmId = $function->createCt();
            $sub->setSubName($vmId);
            //envoie en bdd et redirection vers home
            $em->persist($sub);
            $em->flush();
            
            return $this->redirectToRoute('home');
        }
        return $this->render('pages/formSub.html.twig', [
            'subscriptionForm' => $form->createView(), 'liste' => $vps, 'choix' => $choix, 'price' => $price,
        ]);
    }
    /**
     * @Route("/unsubUser", name="unsubUser")
     *
     * L'utilisateur se désabonne
     */
    public function unSubUser(Request $request, SubscriptionRepository $subRepo, EntityManagerInterface $em)
    {
        $id = $request->request->get('id');
        $sub = $subRepo->find($id);

        $date = new DateTime('now');
        $date->modify('last day of this month');
        $date->format('Y-m-d');
        $sub->setDateFin($date);
        $sub->setStatus(1);
        $em->persist($sub);
        $em->flush();

        return new Response("success");

    }
    /**
     * @Route("/reSubUser", name="reSubUser")
     *
     * L'utilisateur se réabonne
     */
    public function reSubUser(Request $request, SubscriptionRepository $subRepo, EntityManagerInterface $em)
    {
        $id = $request->request->get('id');
        $sub = $subRepo->find($id);
        $sub->setDateFin(null);
        $sub->setStatus(0);
        $em->persist($sub);
        $em->flush();
        return new Response('success');
    }
   
  
    /**
     * @Route("/openPanel", name="openPanel")
     *
     */
    
    public function openPanel(){
        $function = new ApiFunction("sd-158254.dedibox.fr");
        $url = $function->openPanel();
        return new Response($url);
    }
}
