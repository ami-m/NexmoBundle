<?php

namespace AmiM\NexmoBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('AmiMNexmoBundle:Default:index.html.twig');
    }
}
