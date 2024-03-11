<?php
session_start();
if(!isset($_SESSION['loggedin']))
{
  echo("Sorry,You have to login first");
  header('refresh:2;url=index.php');
  exit();
} 
?>