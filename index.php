<?php

//use Zend\View\View;
//use Zend\View\Helper\ViewModel;

require 'start.php';

//$view = new ViewModel();
//$view->setRoot(__DIR__ . "/Views");
//$view->addScriptPath(__DIR__ . "/Views");

//resources.view.scriptPath="/path/to/scripts/";

$router=new AltoRouter();

$router->map('GET', '/dd/', function(){
    //include (__DIR__ . "/Views/index.php");
    //echo (__DIR__ . "/Views/index.php");
    header("LOCATION: http://196.203.197.31:980/dd/Views/index.php");
});

$match=$router->match();

if ($match && is_callable($match['target'])) {
    call_user_func_array($match['target'], $match['params']);
} else {
    //header($_SERVER['SERVER_PROTOCOL'] . '404 Not Found');
    //$_SERVER['SERVER_PROTOCOL']='404 Not Found';
    //header("HTTP/1.1 404 Not Found", TRUE);
    header("LOCATION: http://196.203.197.31:980/dd/Views/base_pages_404.php");
    //include($_SERVER['DOCUMENT_ROOT'].'/404.htm');
    //print_r ($_SERVER['SERVER_PROTOCOL']);
    //print_r($_GET);
    //print_r ($_SERVER);
}