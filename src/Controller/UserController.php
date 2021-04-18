<?php

namespace Controller;

use Model;

class UserController extends \Core\Controller
{

    public function addAction()
    {

        echo "hello add action";
    }

    public function indexAction()
    {
        session_start();
        $this->render("index");
        $post = $this->request->getQueryParams(0);

        if (!empty($post)) {
            $this->entity = new \Core\Entity("users", ["colName" => "email", "modifiedEmail" => "'" . $post['modifyEmail'] . "'"]);
            $this->entity->id = $_SESSION['user'][0]['id'];
            $modified =  $this->entity->update();

            if ($modified) {

                session_destroy();
                header('Location: http://pie.localhost/login?updateSuccess=1');
            } else {

                echo "erreur";
            }
        }
    }

    public function registerAction()
    {

        $this->render("register");


        $post = $this->request->getQueryParams(0);

        if (!empty($post)) {
            $userModel = new Model\UserModel($post);
            $userModel->setPassword(sha1($post['psw']));
            $userModel->setMail($post['email']);
            $userModel->create();
            echo "<p style='text-align:center;'>You're successfully registered !</p>";
        }
    }




    public function loginAction()
    {


        $this->render("login");

        $post = $this->request->getQueryParams(0);
        $get = $this->request->getQueryParams(1);


        if (!empty($post)) {

            $hashedpass = sha1($post['password']);
            $this->entity = new \Core\Entity("users", ["WHERE" => "email = '" . $post['email'] . "' AND password ='" . $hashedpass . "'"]);
            $accountExists =  $this->entity->find();

            if ($accountExists) {

                session_start();
                $_SESSION['user'] = $accountExists;
                header('Location: http://pie.localhost/index');
            } else {
                echo "<p style='text-align:center;color:red;'>Email or password is incorrect ! Maybe you're not registered yet ?</p>";
            }
        }

        if ($get['updateSuccess']) {

            echo "<p style='color:green;background-color:yellow;font-weight:bold;text-align:center;'>You're email is successfully modified you can now relog with your new email.</p>";
        }
    }
}
