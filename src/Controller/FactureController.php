<?php

namespace App\Controller;

use DateTime;
use Dompdf\Dompdf;
use Dompdf\Options;
use App\Entity\User;
use App\Entity\Facture;
use App\Repository\FactureRepository;
use Doctrine\ORM\EntityManagerInterface;
use App\Repository\SubscriptionRepository;
use Knp\Component\Pager\PaginatorInterface;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class FactureController extends AbstractController
{
    /**
     * @Route("/infofacture", name="infofacture")
     */
    public function infofacture(Request $request,PaginatorInterface $paginator,FactureRepository $factRepo, EntityManagerInterface $em, SubscriptionRepository $subrepo){
        $user = new User();
        $user = $this->getUser();
        $tva = $user->getIdTva();
        $dataInput = $request->query->get('input');
        if($request->query->get($dataInput)){
            $value = $request->query->get($dataInput);
            $userFacture = $factRepo->findByParameters($value,$dataInput);
        }
        else{
            $userFacture = $factRepo->findBy(['id_user'=>$user->getId()],['date_edition'=>"ASC"]);
        }
        $factures = $paginator->paginate(
            $userFacture, // Requête contenant les données à paginer (ici nos factures)
            $request->query->getInt('page', 1), // Numéro de la page en cours, passé dans l'URL, 1 si aucune page
            10 // Nombre de résultats par page
        );
        return $this->render('pages/infoFacture.html.twig',
        [ 'tva' => $tva, 'factures' => $factures]);
    }

    /**
     * @Route("/facture/{id}", name="facture")
     */
    public function facture(Facture $facture,SubscriptionRepository $subrepo,FactureRepository $factrepo,Request $request){
        // On instancie tout ce qu'on a besoin
        $user = new User();
        $date = new DateTime();
        $totalPrice = 0;
        $i= 0;
        $subMois = array();
        $dateMois = date('m');
        $dateAnnee = date('Y');
        $premierDuMois = new DateTime('first day of this month');
        $premierDuMoisPrecedent = new DateTime('first day of previous month');
        $DernierJoursDuMoisPrecendent= new DateTime('last day of previous month');
        //date de la facture en cours, et on recupere le dernier jour du mois precedent
        $dateFacture = $facture->getDateEdition();
        $dateFacture = $dateFacture->modify('last day of previous month');
        
        //On défini nos variables
        $user=$this->getUser();
        $subscriptions = $user->getSubscriptions();
        $tva = $user->getIdTva();

        foreach($subscriptions as $sub){
            //Si la date de fin de la souscription est in
            if(($sub->getDateFin() >= $dateFacture || is_null($sub->getDateFin()))&& $sub->getDateSub() <= $dateFacture){
                $totalPrice = $totalPrice + $sub->getPrice();
                $service = $sub->getIdServices();
                $subMois[$i] = ['totalPrice'=>$totalPrice,'firstDay'=>$premierDuMoisPrecedent,'lastDays'=>$DernierJoursDuMoisPrecendent,'dateSub' => $sub->getDateSub(), 'subname' => $sub->getSubName(),'price'=>$sub->getPrice(),'headline' => $service->getHeadline()];
            }
            $i ++;
        } 

        // Configure Dompdf avec ce qu'on à besoin
        $pdfOptions = new Options();
        $pdfOptions->set('defaultFont', 'Arial');
        $pdfOptions->setDpi(150);
        // On instancie la librairie 
        $dompdf = new Dompdf($pdfOptions);
        
        // La page ou la facturation ce trouve 
        $html = $this->renderView('pages/facture.html.twig',['userSub'=>$subMois,'totalPrice'=>$totalPrice,'factureId' => $facture, 'tva'=>$tva]);
        
        // Charge l'HTML avec la library
        $dompdf->loadHtml($html);
        
        // (Optional) Choisir la taille de la feuille + mode portrait ou paysage
        $dompdf->setPaper('A4', 'portrait');

        // Rendre le HMTL en PDF
        $dompdf->render();

        // Genere le PDF et le télécharge avec la date du jours
        $dompdf->stream($user->getId().$date->format('d-m-Y'), [
            "Attachment" => true, 
        ]);
    }
}
