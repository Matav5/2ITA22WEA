<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="server.php" method="post">
        <input type="email" name="email">
        <input type="submit" name="newsletter" value="Přidat Newsletter">
    </form>
    <?php
        if(isset($_SESSION["zprava"])){
            echo "<p>".$_SESSION["zprava"]."</p>";
        }
        if(isset($_SESSION["email"])){
            echo "<p> Jste přihlášen k newsletteru na emailu: ".$_SESSION["email"]."</p>";
        }
    ?>
</body>
</html>