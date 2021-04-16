<?php

use Core\Router;

Router::connect('/register', ['controller' => 'user','action' =>'register']);
Router::connect ('/', ['controller' => 'app' , 'action' => 'index']);
Router::connect('/user', ['controller' => 'user', 'action' => 'index']);
Router::connect('/add', ['controller' => 'user', 'action' => 'add']);
Router::connect('/login', ['controller' => 'user', 'action' => 'login']);
Router::connect('/test', ['controller' => 'user', 'action' => 'test']);



// 