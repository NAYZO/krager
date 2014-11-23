<?php

namespace Nzo\KragerBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class KragerController extends Controller
{
    public function indexAction($name)
    {
        return $this->render('NzoKragerBundle:Krager:index.html.twig',
            array('name' => $name));
    }
}
