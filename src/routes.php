<?php

use Core\Router;

Router::connect('/register', ['controller' => 'user','action' =>'register']);
Router::connect ('/', ['controller' => 'app' , 'action' => 'index']);
