<?php

namespace App\Controller;

use DateTime;
use App\Entity\User;
use App\Entity\Subscription;
use App\Form\SubscriptionType;
use App\Repository\PricingRepository;
use App\Repository\ServicesRepository;
use Corsinvest\ProxmoxVE\Api\PveClient;
use Corsinvest\ProxmoxVE\Api\PVEStatusVmidLxcNodeNodesStart;
use Corsinvest\ProxmoxVE\Api\PVEStatusVmidLxcNodeNodesShutdown;
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
            //on crée le CT dans l'API 
            $vmId = $this->createCt();
            $subName = 'CL12' . $user->getId() . $vpsChosen->getServiceType() . $vmId;
            $sub->setSubName($subName);
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
     * fonction qui crée un CT
     *
     * @return void
     */
    public function createCt()
    {
        $client = new PveClient("sd-158254.dedibox.fr");
        $client->setResponseType('json');
//login check bool
        if ($client->login('root', 'Supinf0752', 'pam')) {

//recupere l'id de vm/ct suivant qui est disponible
            $nextVmId = $client->get('/cluster/nextid')->getResponse()->data;

            //on creer un tableau Key=>value ex : "sd-158254"=>2GO avec la liste des noeud du cluster
            $ListNodesRam = array();
            foreach ($client->getNodes()->Index()->getResponse()->data as $node) {
                $ListNodesRam[$node->node] = $node->mem;
            }

//on selectionne le noeud ou il y a le plus de memoire RAM disponible
            $nodeMaxFreeMem = min($ListNodesRam);
            $nodeName = array_search($nodeMaxFreeMem, $ListNodesRam);
            var_dump($nodeName);
            //preparation des parametres pour la creation d'un CT
            $tabParam = [
                "ostemplate" => "local:vztmpl/debian-9-turnkey-wordpress_15.3-1_amd64.tar.gz",
                "vmid" => $nextVmId,
                "cores" => 2,
                "hostname" => "testapi.maf.com",
                "password" => "azerty",
                "net0" => "bridge=vmbr0,name=eth0,ip=1.2.3.4/24",
                "rootfs" => "volume=local:12",
                "memory" => "4096",
               
            ];

            $client->setResponseType('json');
            $task = $client->create('/nodes/' . $nodeName . '/lxc', $tabParam)->getResponse();
            return $nextVmId;
            //var_dump($client->getNodes()->get("sd-158254")->getLxc());
        } else {
            echo "KOOO";
        }
    }
    /**
     * @Route("/openPanel", name="openPanel")
     * fonction qui ouvre un panel
     */
    public function openPanel(){
            $url = "https://sd-158254.dedibox.fr:8006/?console=lxc&novnc=1&vmid=105&vmname=testapi.maf.com&node=sd-158257&resize=off&cmd=";
            $client = new PveClient("sd-158254.dedibox.fr");
            $this->client->setResponseType('json');
            //login check bool
            if ($this->client->login('root', 'Supinf0752', 'pam')) {
                    $lxc = new PVEVmidLxcNodeNodesVncproxy($this->client, "sd-158257", 105);
                    $lxc->createRest($height = 250, $websocket = null, $width = 250);
                     return new Response($url); 
            }
            else{
                echo "KOOO";
            }
        }
    /** 
    *  fonction pour demarrer une vm
    *
    * @Route("/startCT", name="startCT")
    */
    public function startCT()
    {
        $client = new PveClient("sd-158254.dedibox.fr");
        $client->setResponseType('json');
        //login check bool
        if ($client->login('root', 'Supinf0752', 'pam')) {
            $lxc = new PVEStatusVmidLxcNodeNodesStart($client, "sd-158257", 105);
            $lxc->createRest($skiplock = null);
            return new Response('success');
        } else {
            echo "KOOO";
        }
    }
    /**
     * fonction pour stopper une vm
     *
     *  @Route("/stopCT", name="stopCT")
     */
    public function stopCT()
    {
        $client = new PveClient("sd-158254.dedibox.fr");
        $client->setResponseType('json');
        //login check bool
        if ($client->login('root', 'Supinf0752', 'pam')) {
            $lxc = new PVEStatusVmidLxcNodeNodesShutdown($client, "sd-158257", 105);
            $lxc->createRest($skiplock = null);
            return new Response('success');
        } else {
            echo "KOOO";
        }
    }
    /**
     * fonction dev de suppression des CT de tests
     *
     * @return bool
     *  @Route("/deleteAllCT", name="deleteAllCT")
     */
    public function deleteAllCT(){
        $client = new PveClient("sd-158254.dedibox.fr");
            $this->client->setResponseType('json');
            //login check bool
            if ($this->client->login('root', 'Supinf0752', 'pam')) {
            $client->delete('/nodes/sd-158257/lxc/108')->getResponse();
            $client->delete('/nodes/sd-158257/lxc/109')->getResponse();
            $client->delete('/nodes/sd-158257/lxc/110')->getResponse();
            $client->delete('/nodes/sd-158257/lxc/111')->getResponse();
            $client->delete('/nodes/sd-158257/lxc/112')->getResponse();
            $client->delete('/nodes/sd-158257/lxc/113')->getResponse();
            $client->delete('/nodes/sd-158257/lxc/114')->getResponse();
            $client->delete('/nodes/sd-158257/lxc/115')->getResponse();
            } else {
                echo "KOOO";
            }
    }
}

