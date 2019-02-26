<?php

namespace App\PrivilegeBundle\Controller;


use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;

class SecurityController extends Controller
{
    public function loginAction(Request $request)
    {
        // si le visiteur est d�j� authentifi� on le redirige vers la page d'accueil
        if ($this->get('security.authorization_checker')->isGranted('IS_AUTHENTICATED_REMEMBERED'))
        {
            return $this->redirectToRoute('index');
        }

        // Le service authentication_utils permet de r�cup�rer le nom d'utilisateur
        // et l'erreur dans le cas o� le formulaire a d�j� �t� soumis mais �tait invalide
        // (mauvais mot de passe par exemple)
        $authenticationUtils = $this->get('security.authentication_utils');

        return $this->render('@AppPrivilege/Security/login.html.twig', array(
            'last_username' => $authenticationUtils->getLastUsername(),
            'error'         => $authenticationUtils->getLastAuthenticationError(),
        ));
    }
}