<?php

class VisitorController {
    public function home(){
        require_once "views/visitor/home.view.php";
    }
    public function login(){
        require_once "views/visitor/login.view.php";
    }
    public function portfolio(){
        require_once "views/visitor/portfolio.view.php";
    }
    public function expertise(){
        require_once "views/visitor/expertise.view.php";
    }
    public function contact(){
        require_once "views/visitor/contact.view.php";
    }
    public function register(){
        require_once "views/visitor/register.view.php";
    }
    
}