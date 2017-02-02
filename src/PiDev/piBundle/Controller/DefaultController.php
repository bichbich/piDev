<?php

namespace PiDev\piBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('PiDevpiBundle:Default:index.html.twig');
    }
    public function LayoutAction()
    {
        return $this->render('PiDevpiBundle:Default:index.html.twig');
    }
}
