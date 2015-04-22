<?php

class myAutoloader
{
    public static function loadController($class)
    {
        $path = 'src/controllers/' . $class . '.php';
        
        if (is_readable($path))
            include $path;
    } 

    public static function loadModel($class)
    {
        $path = 'src/models/' . $class . '.php';

        if (is_readable($path))
            include $path;
    }

}
spl_autoload_register(array('myAutoloader', 'loadController'));
spl_autoload_register(array('myAutoloader', 'loadModel')); 
 


?>