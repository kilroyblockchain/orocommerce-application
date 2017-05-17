<?php

namespace Kilroy\Design\Bundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('KilroyDesignBundle:Default:index.html.twig');
    }
}
