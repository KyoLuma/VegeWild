<?php

namespace VegeWildBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;

class DefaultController extends Controller
{
    /**
     * @Route("/")
     */
    public function indexAction()
    {
        return $this->render('VegeWildBundle:Default:index.html.twig');
    }
    /**
     * @Route("/contact", name="contact")
     */
    public function contactAction()
    {
        return $this->render('@VegeWild/contact.html.twig');
    }
}
