<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class VoitureController extends AbstractController
{
    /**
     * @Route("/voiture", name="app_voiture")
     */
    public function index(): Response
    {
        return $this->render('voiture/index.html.twig', [
            'controller_name' => 'VoitureController',
        ]);
    }

    /**
     * @Route("/voiture", name="voiture")
     */
    public function listVoiture(){
    $em = $this->getDoctrine()->getManager();
    $voitures = $em->getRepository(voiture::class)->findAll();
    {
        return $this->render('voiture/listVoiture.html.twig', array("ListeVoiture"=>$voitures));
    }
    }
}
