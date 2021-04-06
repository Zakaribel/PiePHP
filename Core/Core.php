<?php

namespace Core;

use Controller;

class Core
{

    public function run()
    {
        // $params = explode('/', substr($_SERVER['REQUEST_URI'], 1));

        // if (count($params) <= 1 && $params[0] == "") {
        //     $controller = new Controller\AppController();
        //     $controller->indexAction();
        // } else {
        //     $controllerPath = str_replace('\\', '/', __DIR__) . '/../src/Controller/' . ucfirst($params[0]) . 'Controller.php';

        //     if (file_exists($controllerPath)) {
        //         $controllerName = 'Controller\\' . ucfirst($params[0]) . 'Controller';
        //         $controller = new $controllerName();
        //         if (isset($params[1])) {
        //             $actionName = $params[1] . 'Action';
        //             if (method_exists($controller, $actionName)) {
        //                 $controller->$actionName();
        //             } else {
        //                 echo "404";
        //             }
        //         } else {
        //             $controller->indexAction();
        //         }
        //     } else {
        //         echo "404";
        //     }
        // }

        include 'src/routes.php';
        
        $route = Router::get($_SERVER['REQUEST_URI']);
        $controller = "Controller\\".ucfirst($route['controller']). 'Controller';
        $action = $route['action']."Action";

        $done = new $controller();
        $done->$action();

        

    }

    
}
