<?php
namespace Controller;
use Model;
class UserController extends \Core\Controller {

    public function addAction(){

        echo "hello add action";
        
    }

    public function indexAction(){

        $this->render("index");
    }
   
    public function registerAction(){

        $this->render("register");   
       
        
        $post = $this->request->getQueryParams(0);
        $userModel = new Model\UserModel($post);

        if(!empty($post)){
            $userModel->setPassword($post['psw']);
            $userModel->setMail($post['email']);
            $userModel->create();
        }

    }

   

    public function loginAction(){
        $this->render("login");
    }
    
}