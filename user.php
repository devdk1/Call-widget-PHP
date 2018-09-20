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

    $is_session = $helper->isSessionStart();
    if($is_session) {
        $logput_flag = isset($_GET['flag']) ? $_GET['flag'] : false;
        if(!$logput_flag) {
            $obj_appuser = new ModelAppUsers(array('domain_name'=>$_SESSION['domain_name']));
            $is_userexist = $obj_appuser->isUserExists();  #Get User

            $call_requests = false;
            if($is_userexist) {
                $obj_callreq = new ModelCallRequests(array('main_user_id'=>($is_userexist)));
                $call_requests = $obj_callreq->fetchCallRequestsByUserId(); #Get All requests
                // date_default_timezone_set("Asia/Calcutta");
                $cur_date = date("Y-m-d H:i:s");
                if(!empty($call_requests)) {
                    foreach($call_requests AS $key=>$value) {
                        $interval = date_diff(date_create($cur_date), date_create($value['date_add']));
                        $call_requests[$key]['time'] = $interval->format('%H:%I:%S');
                    }
                }
                $smarty->assign('domain_name', $_SESSION['domain_name']);
                $smarty->assign('server_name', _SERVER_);
                $smarty->assign('call_requests', $call_requests);
                $smarty->assign('title', 'Call Requests');
                $smarty->display('call_requests.tpl');
            }
            else {
                $_SESSION = array();
                $smarty->assign('error', 'User not found');
                $smarty->assign('title', 'Login To Continue');
                $smarty->display('user.tpl');
            }        
        }
        else {
            $_SESSION = array();
            $smarty->assign('title', 'Login To Continue');
            $smarty->display('user.tpl');
        }
    }
    else {
        $smarty->assign('title', 'Login To Continue');
        $smarty->display('user.tpl');
    }
?>