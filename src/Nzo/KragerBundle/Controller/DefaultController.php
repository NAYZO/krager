<?php

namespace Nzo\KragerBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction($name)
    {
        return $this->render('NzoKragerBundle:Default:index.html.twig', array('name' => $name));
    }
}
