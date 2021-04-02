<?php

use Core\Router;

Router::connect('/register', ['controller' => 'user','action' =>'add']);
Router::connect ('/', ['controller' => 'app' , 'action' => 'index']);
