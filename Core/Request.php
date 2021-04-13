<?php

Namespace Core;
use Core;

class Request{


public function __construct(){

    htmlspecialchars(trim(stripslashes(($_POST))));
    htmlspecialchars(trim(stripslashes(($_GET))));

}


}
