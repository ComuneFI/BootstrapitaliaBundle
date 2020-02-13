<?php

namespace Fi\BootstrapitaliaBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class BootstrapitaliaController extends AbstractController
{
    public function index()
    {
        //Prova
        return $this->render('@Bootstrapitalia/Demo/index.html.twig');
    }
}
