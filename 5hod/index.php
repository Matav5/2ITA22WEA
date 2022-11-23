<?php
    session_start();
    if(isset($_SESSION["isLogged"])){
        $isLogged = $_SESSION["isLogged"];
    }
    else{
        $isLogged = false;
    }
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
<?php
    if($isLogged){
       require 'admin.php';
    }
    else{
        require 'login.php';
    }
?>
</body>
</html>