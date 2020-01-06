<?php

namespace App\Controller;

use App\Entity\User;
use App\Repository\ServicesRepository;
use App\Repository\SubscriptionRepository;
use DateTime;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class NavigationController extends Controller
{
    /**
     * @Route("/home", name="home")
     */
    public function home(ServicesRepository $serviceRepo)
    {
        $user = $this->getUser();
        $date = new DateTime('-1 day');
        $vps = array();
        $serveur = array();
        $bureauVirtuel = array();
        $bdd = array();
        $allSub = array();
        $subscriptions = $user->getSubscriptions();
        for ($i = 0; $i < count($subscriptions); $i++) {
            if ($subscriptions[$i]->getDateFin() >= $date || $subscriptions[$i]->getDateFin() == null) {
                $id_serv = $subscriptions[$i]->getIdServices();
                $serv = $serviceRepo->findOneBy(['id' => $id_serv]);
                if ($serv->getServiceType() == "vps") {
                    $countVps = count($vps);
                    $vps[$countVps] = ['name' => $subscriptions[$i]->getSubName(), 'id' => $subscriptions[$i]->getId()];

                } else if ($serv->getServiceType() == "srv") {
                    $countServ = count($serveur);
                    $serveur[$countServ] = ['name' => $subscriptions[$i]->getSubName(), 'id' => $subscriptions[$i]->getId()];
                } else if ($serv->getServiceType() == "vdi") {
                    $countVdi = count($bureauVirtuel);
                    $bureauVirtuel[$countVdi] = ['name' => $subscriptions[$i]->getSubName(), 'id' => $subscriptions[$i]->getId()];
                } else if ($serv->getServiceType() == "bdd") {
                    $countBdd = count($bdd);
                    $bdd[$countBdd] = ['name' => $subscriptions[$i]->getSubName(), 'id' => $subscriptions[$i]->getId()];
                }
            }
        }
        return $this->render('base.html.twig', ['vps' => $vps, 'serveur' => $serveur, 'bureauVirtuel' => $bureauVirtuel, 'bdd' => $bdd]);
    }

    /**
     * @Route("/intro", name="intro")
     */
    public function intro(Request $request, ServicesRepository $serviceRepo, SubscriptionRepository $subRepo)
    {
        $user = $this->getUser();
        $allSub = array();
        $idUser = $user->getId();
        $subscriptions = $user->getSubscriptions();
        for ($i = 0; $i < count($subscriptions); $i++) {
            $id_serv = $subscriptions[$i]->getIdServices();
            $serv = $serviceRepo->findOneBy(['id' => $id_serv]);
            $allSub[$i] = ['name' => $subscriptions[$i]->getSubName(), 'id' => $subscriptions[$i]->getId(), 'status' => $subscriptions[$i]->getStatus(), 'headline' => $serv->getHeadline(), 'type' => $serv->getServiceType()];
        }
        $id = $request->request->get('id');

        //methode pour rechercher la somme de cpu/ram/disk_space pour les souscriptions d'un user
        $sumCpu = $subRepo->getSumSubByUser('cpu', $idUser);
        $sumRam = $subRepo->getSumSubByUser('ram', $idUser);
        $sumDisk = $subRepo->getSumSubByUser('disk_space', $idUser);
        $countSub = count($subscriptions);
        $maxDisk = $countSub * 500;
        $maxRam = $countSub * 16;
        $maxCpu = $countSub * 8;

        return $this->render('pages/home.html.twig', ['maxCpu' => $maxCpu, 'maxRam' => $maxRam, 'maxDisk' => $maxDisk, 'CPU' => $sumCpu, 'RAM' => $sumRam, 'Disque' => $sumDisk, 'souscription' => $allSub]);
    }

    /**
     * @Route("/info", name="info")
     */
    public function info(Request $request, SubscriptionRepository $sub, ServicesRepository $serviceRepo)
    {
        //recupération de l'id du service vps
        $id = $request->request->get('id');
        $info = $sub->findOneBy(['id' => $id]);
        $protection = "";
        $replication = "";
        $retention = array('Sauvegarde du 17/11/2019');
        $serv = $serviceRepo->findOneBy(['id' => $info->getIdServices()]);
        if ($info->getHighAvailability()) {
            $arr = explode(',', $info->getHighAvailability());
            if (count($arr) == 2) {
                $protection = $arr[0];
                $replication = $arr[1];
            } else if (count($arr) == 1) {
                if ($arr[0] == "protectionHA") {
                    $protection = $arr[0];
                } else if ($arr[0] == "replicationServ") {
                    $replication = $arr[0];
                }
            }
        }
        $result = array(['headline' => $serv->getHeadline(), 'name' => $info->getSubName(), 'ip' => $info->getIP(), 'protection' => $protection
            , 'replication' => $replication, 'status' => $info->getStatus(), 'backup' => $info->getBackup(), 'cpu' => $info->getCpu(), 'ram' => $info->getRam()
            , 'space' => $info->getDiskSpace(), 'price' => $info->getPrice(), 'id' => $info->getId(), 'dateFin' => $info->getDateFin()]);

        return $this->render('pages/info.html.twig', ['info' => $result, 'retention' => $retention]);
    }
    /**
     * @Route("/infometrics", name="infometrics")
     */
    public function infoMetrics()
    {

        return $this->render('pages/infoMetrics.html.twig');
    }
}
