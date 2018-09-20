<?php
    define('_SERVER_', 'http://localhost:8888/CallWidget/');
    
    require_once 'lib/Smarty.class.php';
    require_once 'db_config.php';
    require_once 'classes/Db/Db.php';
    require_once 'classes/userhelper/Helper.php';
    require_once 'classes/model/ModelAppUsers.php';
    require_once 'classes/model/ModelCallRequests.php';