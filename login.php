<?php
session_start();
    if($_POST['username']=='ada' && $_POST['password'] ==='ada@231')
    { 
      session_regenerate_id();
      $_SESSION['loggedin']=TRUE;
      $_SESSION['name']=$_POST['username'];
      $_SESSION['id']=$id;
      header('Location: dashboard.php');
    }
    else
    {
      echo('Invalid password and username');
      header('refresh:2;url=index.php');
     
    }

    ?>