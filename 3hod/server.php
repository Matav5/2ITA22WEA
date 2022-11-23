<?php
    $vyberCloveka = $_POST["vyber"];

    $moznostiVyberu = ["kamen","nuzky","papir"];
    $vyberPocitace = $moznostiVyberu[rand(0,2)];

    $vyhralClovek = false;
    $vyhralPocitac = false;
    //Podmínka kdo vyhrál a prohrál
    if($vyberCloveka == $vyberPocitace){

    }
    else if($vyberCloveka == "kamen"){
        if($vyberPocitace == "papir"){
            $vyhralPocitac = true;
        }
        else {
            $vyhralClovek = true;
        }
    }
    else if($vyberCloveka == "nuzky"){
        if($vyberPocitace == "kamen"){
            $vyhralPocitac = true;
        }
        else {
            $vyhralClovek = true;
        }
    }
    else {
        if($vyberPocitace == "nuzky"){
            $vyhralPocitac = true;
        }
        else {
            $vyhralClovek = true;
        }
    }
    echo $vyhralClovek == 1 ? "true" : "false";
    echo "\n";
    echo $vyhralPocitac == 1 ? "true" : "false";
    $parameters = "vyberCloveka={$vyberCloveka}&vyberPocitace={$vyberPocitace}&vyhralClovek={$vyhralClovek}&vyhralPocitac={$vyhralPocitac}";
    header("Location: http://localhost/workspace/2ITA/3hod?".$parameters);
    die();
?>