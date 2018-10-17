<?php

namespace Fi\BootstrapitaliaBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpKernel\Kernel;

class BootstrapitaliaController extends Controller
{

    public function indexAction()
    {
        //Prova
        return $this->render('BootstrapitaliaBundle:Demo:index.html.twig');
    }

    public function dropdownAction()
    {
        $elenco = array();
        $elenco[] = array("id" => "primo", "descrizione" => "Prima descrizione");
        $elenco[] = array("id" => "secondo", "descrizione" => "Seconda descrizione");
        $response = new JsonResponse($elenco);
        return $response;
    }

}
