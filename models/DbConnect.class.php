<?php

class DbConnect extends PDO{
    private $dsn;

    private $username;

    private $pass;

    private $options;

    public function __construct()
    {
<<<<<<< HEAD
        $dsn="mysql:host=localhost;dbname=ovo;port=3306;charset=utf8";
        $username="root";
=======
        $dsn="mysql:host=localhost;dbname=ovo_consulting;port=8889;charset=utf8";
        $username="elyess";
>>>>>>> 458cee6746fd65fd77f75a4c95507143176bb6ab
        $pass="";
        $options=[];
        parent::__construct($dsn,$username,$pass,$options);
        //équivalent à new PDO("mysql:host=localhost;dbname=myBlog;port=8889;charset=utf")
    }
}