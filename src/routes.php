<?php

use Core\Router;

Router::connect('/register', ['controller' => 'user','action' =>'register']);
Router::connect ('/', ['controller' => 'user' , 'action' => 'register']);
Router::connect ('/index', ['controller' => 'user' , 'action' => 'index']);
Router::connect('/user', ['controller' => 'user', 'action' => 'index']);
Router::connect('/add', ['controller' => 'user', 'action' => 'add']);
Router::connect('/login', ['controller' => 'user', 'action' => 'login']);
Router::connect('/test', ['controller' => 'user', 'action' => 'test']);
Router::connect('/login?updateSuccess=1', ['controller' => 'user', 'action' => 'login']);





