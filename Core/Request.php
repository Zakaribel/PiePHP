<?php

namespace Model;
Use Core;

class Request{


    private static $_GET;
    private static $_POST;

    public function __construct(){
        var_dump($this->$_POST);
    }
    

}

$obj= new Request();
