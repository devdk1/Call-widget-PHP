<?php 
    header("Content-Type: text/html; charset=utf-8", true);
    header('Access-Control-Allow-Origin: *');
    ini_set('display_errors',1);

    require_once 'config/requires.php';
    $db = new Db();
    $helper = new Helper();
    
    session_start();
    $page_fall = isset($_GET['p']) ? $_GET['p'] : false;

    if ($page_fall && $page_fall != '') { 
        $page_file_name = $page_fall. ".php";

        if(file_exists($page_file_name)){ 
            include $page_fall. ".php";
        } 
        else 
            $helper->redirectPage('404');
    } 
    else { 
        $page_fall = 'user';
        include $page_fall. ".php";
    } 
    Db::disconnect();
?>