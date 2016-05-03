<?php


class Bootstrap
{

    function __construct()
    {
//        error_reporting(E_ERROR | E_WARNING | E_PARSE | E_NOTICE);        
        error_reporting(E_ERROR );        
        
        $url = $this->_getUrl();
//        var_dump($url);exit();
        $this->_render($url);

//        try {
//            $this->_loadController($url);
//        } catch (Exception $ex) {
//            $this->_dealError($ex);
//
//        }
    }
    
   
    private function _getUrl(){
        if (isset($_GET['url'])) {
            $url = $_GET;
            $url = rtrim($_GET['url'], "/");
            $url = explode("/", $url);
        } else {            
            $url[] = 'intro';
            $url[] = '01';
        }
        return $url;
    }
    
    private function _render($url)
    {
         
        if(isset($url[0]) and !empty($url[0])){
            $chapter = $url[0];
        }
        else $chapter = "";

        if(isset($url[1]) and !empty($url[1])){
            $part = $url[1];
        }
        else $part = "";     
        
        if ($chapter==="" || $part===""){
            header('Location: ' . Config::path('intro/01'));
        }
        
        include 'views/header.php';
        include 'views/menu.php';
//        echo "views/$chapter/$part.php";
        
        include "views/$chapter/$part.php";
        include 'views/footer.php';
    }       
 }