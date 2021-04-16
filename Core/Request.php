<?php

namespace Core;

class Request
{ 
    private $post;
    private $get;


    public function __construct()
    {

        
        if (!empty($_POST)) {
            foreach ($_POST as $key => $value) {
               $this->post[$key]= htmlspecialchars(trim(stripslashes(($value))));
            }
        } elseif (!empty($_GET)) {
            foreach ($_GET as $key => $value) {

                $this->get[$key]= htmlspecialchars(trim(stripslashes(($value))));
            }
        }
    }

    public function getQueryParams($index){

        return array($this->post,$this->get)[$index];
    }



}
