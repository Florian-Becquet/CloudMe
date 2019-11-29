<?php

namespace App\Controller;

use DateTime;
use App\Entity\TVA;
use App\Entity\User;
use App\Form\RegistrationFormType;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Security\Core\Encoder\UserPasswordEncoderInterface;

class RegistrationController extends AbstractController
{
    /**
     * @Route("/register", name="app_register")
     * 
     * fonction d'enregistrement d'un nouvel utilisateur une fois enregistré il est redirigé vers le login.
     * @author CSM
     */
    public function register(Request $request, UserPasswordEncoderInterface $passwordEncoder): Response
    {
        //on set la date d'aujourd'hui, on instancie User
        $date = new DateTime();
        $user = new User();
        //on recupere la TVA avec l'id 1
        $repo = $this->getDoctrine()->getRepository(TVA::class);
        $tva = $repo->find(1);
        //création du formulaire d'enregistrement
        $form = $this->createForm(RegistrationFormType::class, $user);
        $form->handleRequest($request);
        //si le form est valide et soumis on encode le password et on insere l'User dans la BDD, puis redirection vers login
        if ($form->isSubmitted() && $form->isValid()) {
            // encode the plain password
            $user->setPassword(
                $passwordEncoder->encodePassword(
                    $user,
                    $form->get('plainPassword')->getData()
                )
            );
            $user->setIdTva($tva);
            $user->setStatus(0);
            $user->setDateInscription($date);
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->persist($user);
            $entityManager->flush();

            return $this->redirectToRoute('app_login');
        }
        //sinon on affiche la page de registration
        return $this->render('registration/register.html.twig', [
            'registrationForm' => $form->createView(),
        ]);
    }
}
