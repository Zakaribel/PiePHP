<?php

namespace Model;

use Core;

class UserModel
{
    protected $connexion;
    protected $bdd;
    private $mail;
    private $password;


    public function __construct()
    {
        $this->connexion = new Core\Database();
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

    public function save(){
        $query = $this->bdd->prepare('insert into Users (email,password) VALUES (?,?)');
        $query->execute(array($this->mail, $this->password));

    }

    // CRUD //


    public function create($mail, $pass)
    {
        $query = $this->bdd->prepare('insert into Users (email,password) VALUES (?,?)');
        $query->execute(array($mail, $pass));
        return $query->fetchAll();
    }

    public function read($champ, $id)
    {
        $query = $this->bdd->prepare('select ? from Users where id=?');
        $query->execute(array($champ, $id));
        return $query->fetchAll();        
    }

    public function update($col, $champ, $id = "id")
    {
        $query = $this->bdd->prepare('update Users set ?=? where id=?');
        $query->execute(array(
            $col,
            $champ,
            $id
        ));
    }

    public function delete($id){
        $query = $this->bdd->prepare('delete from Users where id=?');
        $query->execute(array($id));
    }

    public function read_all(){
        $query = $this->bdd->query('select * from Users');
        return $query->fetchAll();
    }
}
