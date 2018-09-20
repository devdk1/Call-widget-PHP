<?php
  if(!isset($page_fall)) {
      session_start();
      require_once 'config/requires.php';
      $db = new Db();
      $helper = new Helper();
  }
  else
    $helper = new Helper();

  $domain_name = isset($_POST['domain']) ? $_POST['domain'] : false;
  if($domain_name)
    $helper->setSessionVariable($domain_name);
  $helper->redirectPage('user');
?>