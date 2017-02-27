<?php
session_start();
require (__DIR__ . "/vendor/autoload.php");

    // this line forces Zend Framework to throw Exceptions as they are and letting us handle them
    //Zend_Controller_Front::getInstance()->throwExceptions(true);

    // creating new Whoops object
    $whoops = new Whoops\Run();
    
    // adding an error handler, pretty one ;)
    $whoops->pushHandler(new Whoops\Handler\PrettyPageHandler());

    // and now final touch: setting Whoops as default error handler
    $whoops->register();
    
    $router=new AltoRouter();