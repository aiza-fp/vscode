<?php
    /*
    10 ausazko zenbaki(0 eta 99 bitartean) gorde array batean eta txikiena erakutsi.
    */

    $zenbakiArraya = array();
    $elementuak = 10;
    $min = 100;

    // Array-a bete eta minimoa gorde
    for ($i = 0; $i < $elementuak; $i++) {
        $zenbakiArraya[$i] = rand(1,99);
        if ($zenbakiArraya[$i] < $min) {
            $min = $zenbakiArraya[$i];
        }
    }

    
?>

<html>
    <title>: Ariketa 405: Array-ak </title>
    <style>
        table, th, td {
            border: 1px solid;
        }
    </style>
    <body>
        <h1>Ariketa 405: Array-ak</h1>
        <?php
            echo 'Array-a: ';
            for ($i=0; $i<count($zenbakiArraya); $i++) {
                echo $zenbakiArraya[$i], ', ';
            }
            echo '<br><br>';
            echo 'Balio minimoa = ', $min, '<br>';
        ?>
    </body>
</html>