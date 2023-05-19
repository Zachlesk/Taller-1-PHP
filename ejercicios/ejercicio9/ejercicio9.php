
<?php
     if ($_GET) {
        
        $atleta1 = $_GET["atleta1"];
        $atleta2 = $_GET["atleta2"];
        $atleta3 = $_GET["atleta3"];
        $marca1 = $_GET["marca1"];
        $marca2 = $_GET["marca2"];
        $marca3 = $_GET["marca3"];
        $gano = "no";
        $record = 15.50;
        $nombreGanador;
        $recordPaMedalla = 0;

        if ($marca1 > $recordPaMedalla || $marca2 > $recordPaMedalla || $marca3 > $recordPaMedalla) {
            if ($marca1 > $recordPaMedalla) {
                $recordPaMedalla = $marca1;
                $nombreGanador = $atleta1;
                if ($marca1 > $record) {
                    $record = $marca1;
                    $gano = "si";
                }
            }
            if ($marca2 > $recordPaMedalla) {
                $recordPaMedalla = $marca2;
                $nombreGanador = $atleta2;
                if ($marca2 > $record) {
                    $record = $marca2;
                    $gano = "si";
                }
            }
            if ($marca3 > $recordPaMedalla) {
                $recordPaMedalla = $marca3;
                $nombreGanador = $atleta3;
                if ($marca3 > $record) {
                    $record = $marca3;
                    $gano = "si";
                }
            }
        }

        echo "El atleta campeon/campeona fue {$nombreGanador} con una marca de salto de {$recordPaMedalla} y {$gano} ganó los 500.000 Millones";
    }
    
?>
