<?php 

class UserManager extends Manager{

    public function getPasswordUser($mail){
        //Recherche du mdp de la BDD en fonction du mail
        $sql="SELECT pass FROM user WHERE mail=?";
        $res=$this->getDb()->prepare($sql);
        $res->execute([$mail]);
        $pass=$res->fetch();
        return $pass['pass'];
    }

    public function verifyPassword($mail, $password){
        $mdp=$this->getPasswordUser($mail);
        return password_verify($password, $mdp);
    }
    
    public function accountValid($mail){
        //cherche le statut du compte (valide ou non)
        $sql= "SELECT is_valid FROM user WHERE mail=?";
        $res=$this->getDb()->prepare($sql);
        $res->execute([$mail]);
        $valid=$res->fetch();
        return (($valid['is_valid']===0) ? false : true);
    }


}