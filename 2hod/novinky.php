<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lidl Idnes</title>
</head>
<body>
    <form action="form.php" method="GET">
        <input type="text" name="jmeno">
        <input type="submit" value="Pošli">
    </form>
    <?php
        require 'admin.php';
    ?>
    <?php
        vytvorClanek("DNEŠNÍ HOROSKOP PRO BÝK",
         "Lorem ipsum dolor sit amet consectetur adipisicing elit.
          Modi est dolor nostrum inventore fugiat dolores nihil?
          Nesciunt tempora quis odio quo vitae!","Jan Čestmír",
        date('d.m.Y'));

        function vytvorClanek(string $titulek ,string $obsah, string $autor, string $datum, string $log = "Vytvořil se nový článek a zmáčkl jsi mě.") : int{
            global $isAdmin;
            echo "<div style='border: 1px solid black; padding:5px;'>
                <h2>{$titulek}</h2>
                <p>{$obsah}</p>
                <h5>Autor: {$autor}. Zveřejněno: {$datum}</h5>";
            if($isAdmin){
               echo "<button> Upravit </button>
                <button> Odstranit </button>";
            }
            echo "<button onClick='console.log(\"{$log}\")'>Vypiš</button>";
            echo "</div>";
            return 0;
        }
        
    ?>
</body>
<?php
    require 'footer.php';
?>
<p>dostal jsem se až sem</p>
</html>