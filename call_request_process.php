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

    $main_user_id   = $_POST['main_user_id'];
    $user_name      = $_POST['user_name'];
    $user_email     = $_POST['user_email'];
    $user_number    = $_POST['user_number'];

    if(!empty($main_user_id) && !empty($user_name) && !empty($user_email) && !empty($user_number)) {
        $obj_callreq = new ModelCallRequests(array('main_user_id'=>strip_tags($main_user_id), 'user_name'=>strip_tags($user_name), 'user_email'=>strip_tags($user_email), 'user_number'=>($user_number)));
        $call_request_id = $obj_callreq->addCallRequest();
        if($call_request_id) {
            echo 'success';
            exit;
        }
        else {
            echo 'sww';
            exit;
        }
    }
    else {
        echo 'sww';
        exit;
    }
?>