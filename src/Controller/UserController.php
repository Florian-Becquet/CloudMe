<?php

namespace App\Controller;

use App\Repository\UserRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class UserController extends AbstractController
{
    
    /**
     * @Route("/mon-compte/profil", name="profil")
     */
    public function profil(Request $request, UserRepository $user, EntityManagerInterface $em)
    {
        $user = $this->getUser(); // Utilisateur courant
        $form = $this->createForm(AccountType::class, $user, ['action' => $this->generateUrl('profil')]); // Créer un formulaire
        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()) { // Si le formulaire est valide et qu'il est envoyé
            $em = $this->getDoctrine()->getManager();
            $em->persist($user);
            $em->flush();

            $this->addFlash('success', 'Votre profil a bien été modifié');
            return $this->redirectToRoute('home');
        }

        return $this->render('pages/monProfil.html.twig', [
            'formProfil' => $form->createView(),
        ]);
    }
}
