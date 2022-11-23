<?php
    session_start();
    if($_POST["newsletter"]){
      $email = $_POST["email"];  
      if(str_contains($email,"plamenak")){
        $poleZprav = ["Země je placatá","Ptáci jsou ve skutečnosti droni","ALIENS!"];
        $_SESSION["zprava"] = $poleZprav[rand(0,count($poleZprav)-1)];
    }
      else if(!empty($email)){
        $_SESSION["email"] = $email;
        unset($_SESSION["zprava"]);
      }
      else{
        unset($_SESSION["zprava"]);
      }
    }
    header("Location:formular.php");
    die();
?>