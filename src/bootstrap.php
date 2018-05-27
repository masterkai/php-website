<?php

spl_autoload_register(function ($className){

    $classNameLower = strtolower($className);
    $path = str_replace(array('\\', 'phpwebsite'), array('/','classes'), $className);
    $filename = './' . $path . '.php';

    if(file_exists($filename)){
        require_once $filename;
        return true;
    }

    return false;
});