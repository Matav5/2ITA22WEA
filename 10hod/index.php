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
        $pokemonJSON =  file_get_contents("https://pokeapi.co/api/v2/pokemon/charizard");
        $pokemon = json_decode($pokemonJSON,TRUE);
        echo "Jméno pokémona: ".$pokemon["name"]. " s výškou ".$pokemon["height"]."0cm";

        $slovnicek = ["oblibeny_serial" => "Spongebob", "objektivne_nejhorsi_serial" => "Ulice","hodnoceni" => 10];
        $slovnicekJSON = json_encode($slovnicek);
        echo $slovnicekJSON;
    ?>
</body>
</html>