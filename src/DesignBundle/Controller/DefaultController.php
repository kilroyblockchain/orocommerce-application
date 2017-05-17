<?php

namespace DesignBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('DesignBundle:Default:index.html.twig');
    }
}
