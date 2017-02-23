<?php
require 'start.php';
$router=new AltoRouter();
$router->map('GET', '/', function(){
    echo "sdf";
    //include (__DIR__ . "/UniqueOneTemplate/index.php");
});
    echo "hors";
    echo $p;
$match=$router->match();

if ($match && is_callable($match['target'])) {
    call_user_func_array($match['target'], $match['params']);
} else {
    header($_SERVER['SERVER_PROTOCOL'] . '404 Not Found');
}