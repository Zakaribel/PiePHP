<?php
namespace Controller;
use Model;
class UserController {


    public function addAction(){

        echo "hello";
        
    }

    public function indexAction(){

        echo "index de l'user controller...";

    }


    public function registerAction(){
        $email = "";
        $password ="";
        $userModel = new Model\userModel();
        if(isset($_POST)){
            $_POST['email'] = $email;
            $_POST['psw'] = $password;
            $userModel->setPassword($password);
            $userModel->setMail($email);
            $userModel->save();
        }

    }
    
}