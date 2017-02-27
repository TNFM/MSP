<?php

class PageController {
    public  function getShowHomePage() {
       //include (__DIR__ . "/../views/index.php");
        header("LOCATION: http://196.203.197.31:980/dd/views/index.php");
    }
}