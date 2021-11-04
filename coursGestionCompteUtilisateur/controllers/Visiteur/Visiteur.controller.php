<?php
require_once("./controllers/MainController.controller.php");
require_once("./models/Visiteur/Visiteur.model.php");

class VisiteurController extends MainController {
    private $visiteurManager;

    public function __construct(){
        $this->visiteurManager = new VisiteurManager();
    }

    //Propriété "page_css" : tableau permettant d'ajouter des fichiers CSS spécifiques
    //Propriété "page_javascript" : tableau permettant d'ajouter des fichiers JavaScript spécifiques
    public function accueil() {
        // Toolbox::ajouterMessageAlerte("test", Toolbox::COULEUR_VERTE);
        // Toolbox::ajouterMessageAlerte("test2", Toolbox::COULEUR_ORANGE);
        // Toolbox::ajouterMessageAlerte("test3", Toolbox::COULEUR_ROUGE);

        $data_page = [
            "page_description" => "Description de la page d'accueil",
            "page_title" => "Titre de la page d'accueil",
            "view" => "views/Visiteur/accueil.view.php",
            "template" => "views/common/template.php"
        ];
        $this->genererPage($data_page);
    }

    public function login() {
        $data_page = [
            "page_description" => "Page de connexion",
            "page_title" => "Page de connexion",
            "view" => "views/Visiteur/login.view.php",
            "template" => "views/common/template.php"
        ];
        $this->genererPage($data_page);
    }

    public function pageErreur($message){
        parent::pageErreur($message);
    }
}