<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SPA</title>
</head>
<body>
    <?php 
    if(isset( $_POST["loginSubmit"] ) ) {

        $errMsg = "";
        $username = $_POST["username"];
        $password = $_POST["password"];
        $pizzaQuestion = $_POST["pizzaQuestion"];
        //Validace uživatelskýho jména
        if(empty($username))
        {
            $errMsg .= "Uživatelské jméno je povinné!<br>";
        }

        if($username == "Gilbert")
        {
            $errMsg .= "Uživatelský jméno fakt nemůže být Gilbert<br>";
        }

        //Validace hesla
        if(empty($password)){
            $errMsg .= "Heslo je povinné!<br>";
        }

        if(empty($pizzaQuestion)){
            $errMsg .= "Odpověď na otázku je povinná!<br>";
        }
        //Validace správnosti odpovědí

        if(empty($errMsg)){
            echo "Úspěšně jste se přihlásil";
        }
    }

    ?>
    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]) ?>" method="POST">
        <label for="username">Uživatelské jméno: </label>
        <input type="text" name="username" required value="<?php
         if(!empty($errMsg))
            echo $username;
        ?>"> <br>

        <label for="password">Heslo: </label>
        <input type="password" name="password" required value="<?php
         if(!empty($errMsg))
            echo $password;
        ?>"> <br>

        <label for="pizzaQuestion">Máte rád ananas na pizze? </label>  <br>
            <label for="pizzaQuestionAno">Ano! :</label>
            <input type="radio" name="pizzaQuestion" value="ano" id="pizzaQuestionAno"
            <?php
                if(!empty($errMsg) && $pizzaQuestion == "ano")
                    echo "checked";
            ?>> <br>

            <label for="pizzaQuestionNe">Ne! :</label>
            <input type="radio" name="pizzaQuestion" value="ne" id="pizzaQuestionNe"
            <?php
                if(!empty($errMsg) && $pizzaQuestion == "ne")
                    echo "checked";
            ?>> <br>

            <label for="pizzaQuestionIdc">Nezajimá mě! :</label>
            <input type="radio" name="pizzaQuestion" value="nezajímá" id="pizzaQuestionIdc"
            <?php
                if(!empty($errMsg) && $pizzaQuestion == "nezajímá")
                    echo "checked";
                else if(empty($errMsg))
                    echo "checked";

            ?> > <br>
            <input type="submit" name="loginSubmit"  value="Přihlásit se">
        </form>

        <?php
            if(isset($errMsg))
                echo $errMsg;
        ?>
</body>
</html>