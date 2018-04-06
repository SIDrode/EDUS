<?php

  session_start();


  if(isset($_POST["tutor-username"]) && isset($_POST["tutor-password"])){

    if($_POST["tutor-username"] == "17139" && $_POST["tutor-password"] == "ciao"){

      $_SESSION['login_user'] = "17139";

    }
  }

  if(isset($_SESSION['login_user'])){

    header("Location: ../edus_tutor.php");
  }


 ?>
