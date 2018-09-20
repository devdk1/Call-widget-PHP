<?php
    if(!isset($page_fall)) {
        session_start();
        require_once 'config/requires.php';
        $db = new Db();
        $helper = new Helper();
    }
    else {
        $smarty = new Smarty();
        $helper = new Helper();
    }
    $smarty->assign('title', 'Page not found');
    $smarty->display('404.tpl');
?>