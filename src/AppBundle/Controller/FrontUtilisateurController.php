<?php

namespace AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;

class FrontUtilisateurController extends Controller {

    /**
     * @Route("/ajouter_course", name="ajouter_course")
     */
    public function ajouterCourseAction(){
        
        return $this->render('AppBundle:FrontUtilisateur:ajouter_course.html.twig', array(
            
        ) );
    }
    
    /**
     * @Route("/login", name="login")
     */
    public function loginAction() {
        $authenticationUtils = $this->get('security.authentication_utils');

        // get the login error if there is one
        $error = $authenticationUtils->getLastAuthenticationError();

        // last username entered by the user
        $lastUsername = $authenticationUtils->getLastUsername();

        return $this->render('AppBundle:FrontUtilisateur:login.html.twig', array(
                    'last_username' => $lastUsername,
                    'error' => $error,
        ));
    }
    
}
