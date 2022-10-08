<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class EtudiantController extends AbstractController
{
    /**
     * @Route("/etudiant", name="app_etudiant")
     */
    public function index(): Response
    {
        return new Response("Bonjour du part du controller symfony");
    }
    /**
     * @Route("/etudiant/{id}", name="affichage_etudiant",requirements={"id"="\d{2}"})
     */
    public function affichageEtudiant($id) : Response
    {
        return new Response("Bonjour l'etudiant num : ".$id);

    }
    /**
     * @Route("/etudiant/{name}", name="app_etudiant")
     */
    public function voirNom($name) : Response
    {
        return $this->render('etudiant/etudiant.html.twig',['name'=>$name]);
    }
}
