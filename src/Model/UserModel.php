<?php

namespace Model;

use Core;

class UserModel extends Core\Entity
{
    protected $connexion;
    protected $bdd;
    private $mail;
    private $password;
    

    public function __construct(array $fields = [])
    {
        parent::__construct('users',$fields);
        $this->connexion = new \Core\Database();
        $this->bdd = $this->connexion->getDB();


    }

    public function setMail($mail)
    {
        $this->mail = $mail;
    }

    public function setPassword($password)
    {
        $this->password = $password;
    }

    public function getPassword(){
        return $this->password;
    }

    public function getMail(){
        return $this->mail;
    }

    public function save(){

        $this->fields = ["email" => $this->mail, "password" => $this->password];
        parent::create();


    }

    // CRUD //


    public function create()
    {
    
        $this->fields = ["email" => $this->mail, "password" => $this->password]; // COMMENT RECUP L'ID ?
        return parent::create();   
    
    }

    public function read()
    {
        return parent::read();         
    }

    public function update()
    {
        return parent::update();
    }

    public function delete(){
        return parent::delete();
    }

    public function read_all(){
        return parent::find();
    }
}
