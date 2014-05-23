<?php

namespace Como\FormBuilderBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction($name)
    {
        return $this->render('ComoFormBuilderBundle:Default:index.html.twig', array('name' => $name));
    }
}
