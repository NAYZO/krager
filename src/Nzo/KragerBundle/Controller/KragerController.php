<?php

namespace Nzo\KragerBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class KragerController extends Controller
{
    public function indexAction()
    {
    	if(true)
        return $this->render('NzoKragerBundle:Krager:index.html.twig');
    }
}
