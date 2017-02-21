<?php
session_start();
$url = explode('/', $_SERVER['REQUEST_URI']);

if ($url[1]==""){
    include (__DIR__."/UniqueOneTemplate/index.php");
    exit();
}