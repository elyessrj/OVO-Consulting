<?php
require_once "models/Manager.php";
require_once "models/user/UserManager.php";
require_once "models/DbConnect.class.php";

class UserController extends AbstractController{
    private $base; //correspond à votre objet PDO

    private $UserManager; //correspond à la classe userManager

    public function __construct(){
        $this->base = new DbConnect(); //instanciation d'un objet PDO
        $this->UserManager= new UserManager($this->base); //créer un objet statement
    }

    public function loginValidation(){
        $data = $this->checkData();
        // var_dump($this->UserManager->getPasswordUser($data["mail"]));
        $connexion = $this->UserManager->verifyPassword($data["mail"], $data['mdp']);
        // var_dump($data);
        if ($connexion){
            if ($this->UserManager->accountValid($data['mail'])){
                DisplayController::messageAlert("Tu es connecté", DisplayController::VERTE);
                $_SESSION['user']=[
                    'mail' => $data['mail']
                ];
                header("Location: ".URL."account/profil");
                die();
            }else{
                DisplayController::messageAlert("Ton compte n'est pas activé", DisplayController::ORANGE);
                header("Location: ".URL."login");
                die();
            }
        }else{
            DisplayController::messageAlert("Pas connecté, ERREUR", DisplayController::ROUGE);
            header("Location: ".URL."login");
            die();
        }
     }
}