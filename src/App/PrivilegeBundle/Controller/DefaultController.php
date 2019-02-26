<?php

namespace App\PrivilegeBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;

class DefaultController extends Controller
{
    /**
     * @Route("/privilege")
     */
    public function indexAction()
    {
        return $this->render('AppPrivilegeBundle:Default:index.html.twig');
    }
}
