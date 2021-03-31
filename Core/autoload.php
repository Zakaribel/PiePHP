<?php

spl_autoload_register(function ($className) {

    $className = str_replace('\\', '/', $className);
    
    $fileName = $className . ".php";
    
    if (is_file($fileName))
    {
         include($fileName);
    }
    elseif (is_file('./src/' . $fileName))
    {
        include('./src/' . $fileName);
    }
});
