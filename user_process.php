<?php
    if(!isset($page_fall)) {
        require_once 'config/requires.php';
        $db = new Db();
        $helper = new Helper();
    }
    else {
        $smarty = new Smarty();
        $helper = new Helper();
    }

    $domain_name = $_POST['user_domain'];
    $method = $_POST['method'];

    if(!empty($domain_name)) {
        $obj_appuser = new ModelAppUsers(array('domain_name'=>$domain_name));
        if($method == '1') { #Get User
            $is_userexist = $obj_appuser->isUserExists();
            if($is_userexist) {
                echo $is_userexist;
                exit;
            }
            else {
                echo 'no';
                exit;
            }
        }
        else if($method == '2') { #Add User
            $is_userinserted = $obj_appuser->insertUser();
            if($is_userinserted) {
                echo $is_userinserted;
                exit;
            }
            else {
                echo 'no';
                exit;
            }
        }
    }
    else {
        echo 'sww';
        exit;
    }
?>