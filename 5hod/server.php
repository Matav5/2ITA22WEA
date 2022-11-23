<?php
    session_start();

    if(isset($_POST["login"])){
        //Proces přihlašovaní
        $ServerUsername = "Matav";
        $ServerPassword = "vesmirnylilek";

        $InputUsername = $_POST["username"];
        $InputPassword = $_POST["password"];

        if($ServerUsername == $InputUsername && $ServerPassword == $InputPassword){
            //Uživatel se úspěšně přihlásil
            $_SESSION["isLogged"] = true;
            $_SESSION["username"] = $InputUsername;

        }
    }

    if(isset($_POST["logout"]))
    {
        //Proces odhlašování
        session_destroy();
    }

    header("Location:index.php");
    die();
?>