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
    echo "Funguje <br>";
    //deklarace proměnných
    $prvniPromenna = "<b>Nejlepší proměnná na světě</b>";
    $promenna1 = true;
    $promenna2 = 5;

    //komentář na řádek
    #komentář na řádek
    /*
        víceřádkový komentář
    */
    print $prvniPromenna . "<br>";
    $druhaPromenna = 5 + 2;

    print $prvniPromenna . " " . $druhaPromenna . "<br>";

    //Podmínky
    if ($druhaPromenna == 7) {
        echo "Proměnná se fakt rovná 7" . "<br>";
    } else if ($prvniPromenna != "AAAaaAAA") {
        echo "Proměnná není výkřik" . "<br>";
    } else
        echo "Proměnné se ničemu nerovnají" . "<br>";

    //Switch
    switch ($prvniPromenna):
        case "<b>Nejlepší proměnná na světě</b>":
            echo "Switch vyšel" . "<br>";
            break;
        default:
            echo "Switch nevyšel" . "<br>";
            break;
    endswitch;
    //Pole
    $tretiPromenna = ["Ark", "Devil May Cry", "Apex Legends", "Terraria", "Minecraft", "Dark Souls"];
    // Na výpis polí a objektů
    var_dump($tretiPromenna);

    //Cykly
    for ($i = 0; $i < count($tretiPromenna); $i++) {
        echo $tretiPromenna[$i] . "<br>";
    }

    foreach($tretiPromenna as $aktualniPromenna){
        echo $aktualniPromenna."<br>";
    }
    $ctvrtaPromenna = ["NejlepsiFilm" => "Avatar"];
    echo $ctvrtaPromenna["NejlepsiFilm"];
    var_dump($ctvrtaPromenna);

    function prvniFunkce($parametr1){
        GLOBAL $ctvrtaPromenna;
        $lokalniPromenna = "aaaa";
        echo $ctvrtaPromenna["NejlepsiFilm"];

        echo $parametr1;
        return $lokalniPromenna;
    }
    echo $lokalniPromenna;
    $naVypis = prvniFunkce("Yadayada");
    echo $naVypis;
    ?> 
</body>

</html>