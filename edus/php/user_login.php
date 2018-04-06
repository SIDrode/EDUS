<?php

  session_start();


  if(isset($_POST["username"]) && isset($_POST["password"])){

    if($_POST["username"] == "16996" && $_POST["password"] == "ciao"){

      $_SESSION['login_user'] = "16996";

    }
  }

  if(isset($_SESSION['login_user'])){

    header("Location: ../edus.php");
  }


 ?>
