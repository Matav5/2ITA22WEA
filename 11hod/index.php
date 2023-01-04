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
        class Vozidlo {

            public $rychlost;


            public $kapacitaNadrze;

            //4l na 100km
            public $spotreba;

            public $obrazek;

            public function __construct(int $rychlost, int $kapacitaNadrze, float $spotreba, string $obrazek){
                $this->rychlost = $rychlost;
                $this->kapacitaNadrze = $kapacitaNadrze;
                $this->spotreba = $spotreba;
                $this->obrazek = $obrazek;
            }
            public function vypocitejDojezd() : float{
                $dojezd = ($this->kapacitaNadrze * 100) / $this->spotreba;
                return $dojezd;
            }
            public function vypocitejDobuDojezdu() : float{
                return  $this->vypocitejDojezd() / $this->rychlost;
            }
            public function render(){
                $html = "
                    <div class='auto'>
                    <img src='{$this->obrazek}'>
                    <ul>
                        <li>Rychlost: {$this->rychlost} km/h</li>
                        <li>Kapacita Nádrže: {$this->kapacitaNadrze} l</li>
                        <li>Spotřeba: {$this->spotreba} l / 100km</li>
                        <li>Dojezd: {$this->vypocitejDojezd()} km</li>
                        <li>Doba dojezdu: {$this->vypocitejDobuDojezdu()} h</li>
                    </ul>
                    </div>
                ";
                echo $html;
            }
        }

        class Autobus extends Vozidlo{
            public $kapacitaPasazeru;
            public function __construct(int $rychlost, int $kapacitaNadrze, float $spotreba, string $obrazek, int $kapacitaPasazeru){
                parent::__construct($rychlost,$kapacitaNadrze,$spotreba,$obrazek);
                $this->kapacitaPasazeru = $kapacitaPasazeru;
            }
        }
        $auto = new Vozidlo(250,60,8,"http://h360.cz/wp-content/uploads/luxusni-ziguli.jpg");
        $autobus = new Autobus(90, 80, 32, "https://cdn.xsd.cz/resize/c890df0d1a3334c4b96122c56ef09e0a_resize=1000,750_.jpg?hash=901d5c3970758751f7c99a0d87bfaeee", 40);
       
        echo $auto->vypocitejDobuDojezdu()." hod";

        $auto->render();
        $autobus->render();
    ?>

   
</body>
</html>