<?php
session_start();

//Ce fichier est le routeur de l'application web

/*
Création d'une constante qui redéfinit un lien absolu depuis http(s)
str_replace qui permet de supprimer index.php de la redéfinition de URL
*/
define("URL", str_replace("index.php","",
    (isset($_SERVER['https'])?"https":"http")."://$_SERVER[HTTP_HOST]$_SERVER[PHP_SELF]"
    )
);
// var_dump($_SERVER);

require_once 'controllers/DisplayController.php';
require_once "controllers/AbstractController.php";
require_once "controllers/visitors/VisitorsController.php";
require_once 'controllers/user/UserController.php';
require_once "controllers/SecurityController.php";


// $project= new ProjectController();
$visitor= new VisitorController();
$user= new UserController();


try{
    if (empty($_GET["page"])){
        $visitor->home();
    }else{
        $url= explode("/", filter_var($_GET["page"], FILTER_SANITIZE_URL));
        switch ($url[0]){
            case "accueil":
                $visitor->home();
                break;
            case "portfolio":
                $visitor->portfolio();
                break;
            case "expertise":
                $visitor->expertise();
                break;
            case "contact":
                $visitor->contact();
                break;
            case "register":
                $visitor->register();
                break;
            case "registerValidation":
                $user->registerValidation();
                break;
            case "login":
                $visitor->login();
                break;
            case "loginValidation":
                $user->loginValidation();
                break;
            case "account":
                if(!SecurityController::isLog()){
                    DisplayController::messageAlert("Il faut se connecter !", DisplayController::ROUGE);
                    header("Location: " . URL . "accueil");
                } else{
                    switch ($url[1]){
                        case "profil":
                            $user->myProfil();
                            break;
                        case "logout":
                            $user->logout();
                            break;
                        // case "addArticle":
                        //     $article->addArticle();
                        //     break;
                        // case "addArticle":
                        //     $article->addArticleValidation();
                        //     break;
                        }
                    }
        }

    }

}catch (Exception $e){
    $msg=$e->getMessage();
    require_once "views/error.view.php";
}



