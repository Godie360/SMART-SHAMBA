<?php
include_once 'database.connectSS.php';
  session_start();
  session_destroy();
  header("Location:Homepage.php");
?>
