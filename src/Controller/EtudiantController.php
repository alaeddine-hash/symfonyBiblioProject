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

    /**
     * @Route("/list", name="list")
     */
    public function listeEtudiant(){
        // liste d'etudiant
        $etudiants = array("ali","med");

        //list des modules
        $modules = array(
            array("nom"=>"symfony","id"=>1,"enseignant"=>"Ali","nbrHeures"=>42,"date"=>"12-12-2021"),
            array("nom"=>"jEE","id"=>2,"enseignant"=>"Med","nbrHeures"=>31,"date"=>"12-10-2021"),
            array("nom"=>"BD","id"=>3,"enseignant"=>"Islem","nbrHeures"=>21,"date"=>"12-09-2021")
        );

        return $this->render("etudiant/list.html.twig",array("etudiants"=>$etudiants,"listModules"=>$modules));
    }
    /**
     * @Route("/affectation", name="Affectation")
     */
    public function affecter(){
        return $this->render("etudiant/affecter.html.twig");
    }

    /**
     * @Route("/indexFils", name="index_fils")
     */
    public function indexFils(){
        return $this->render("etudiant/index.html.twig");
    }

}
