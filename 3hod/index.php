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
    if(isset($_GET["vyberCloveka"]))
        $vyberCloveka = $_GET["vyberCloveka"];
    else
        $vyberCloveka = "kamen";

    if(isset($_GET["vyberPocitace"]))
        $vyberPocitace = $_GET["vyberPocitace"];
    else
        $vyberPocitace = "";
    
    if(isset($_GET["vyhralClovek"]))
        $vyhralClovekStyl = $_GET["vyhralClovek"] == "1" ? " color:green" : " color:red ";
    else
        $vyhralClovekStyl = "";

    if(isset($_GET["vyhralPocitac"]))
        $vyhralPocitacStyl = $_GET["vyhralPocitac"] == "1" ? " color:green" : " color:red ";
    else
        $vyhralPocitacStyl = "";
    /*$vyberPocitace = $_GET["vyberPocitace"];
    $vyhralClovek = $_GET["vyhralClovek"];
    $vyhralPocitac = $_GET["vyhralPocitac"];
    echo $vyberCloveka;*/
    ?>
    <h2 style="<?php
    echo $vyhralClovekStyl;
    ?>
    ">Uživatel</h2>
<form action="server.php" method="post">

    <label for="kamen">Kámen</label>
    <input type="radio" name="vyber" id="kamen" value="kamen" 
    <?php
        if($vyberCloveka == "kamen")
            echo "checked";
    ?>
    >
    <br>
    <label for="nuzky">Nůžky</label>
    <input type="radio" name="vyber" id="nuzky" value="nuzky"
    <?php
     if($vyberCloveka == "nuzky")
            echo "checked";
    ?>
    >
    <br>
    <label for="papir">Papír</label>
    <input type="radio" name="vyber" id="papir" value="papir"
    <?php
     if($vyberCloveka == "papir")
            echo "checked";
    ?>
    >
    <br>    
    <input type="submit" value="Zahrát kolo!">
</form>
<h2 style="<?php
    echo $vyhralPocitacStyl;
    ?>
    ">Počítač</h2>
<form>
    <label for="kamen2">Kámen</label>
        <input type="radio" name="vyber" id="kamen2" value="kamen" 
        <?php
            if($vyberPocitace == "kamen")
                echo "checked";
        ?>
        disabled
        >
        <br>
        <label for="nuzky2">Nůžky</label>
        <input type="radio" name="vyber" id="nuzky2" value="nuzky"
        <?php
        if($vyberPocitace == "nuzky")
                echo "checked";
        ?>
        disabled
        >
        <br>
        <label for="papir2">Papír</label>
        <input type="radio" name="vyber" id="papir2" value="papir"
        <?php
        if($vyberPocitace == "papir")
                echo "checked";
        ?>
        disabled
        >
    </form>
</body>
</html>