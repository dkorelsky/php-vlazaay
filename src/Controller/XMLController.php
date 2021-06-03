<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class XMLController extends AbstractController
{
    #[Route('/xml', name: 'xml')]
    public function index(): Response
    {

        $url = "https://trainee.abaddon.pp.ua/catalog.xml";
        $xml = simplexml_load_file($url);

        return $this->render('xml/index.html.twig', [
            'controller_name' => 'XMLController',
            'xml' => $xml,
        ]);
    }

}
