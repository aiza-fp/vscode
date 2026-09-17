<?php
    /*
    10 zenbaki gorde array batean eta handiena erakutsi.
    */

    $zenbakiArraya = array(12,54,86,33,5,65);
    $max = 0;

    // Maximoa kalkulatu
    for ($i=0; $i<count($zenbakiArraya); $i++) {
        if ($zenbakiArraya[$i] > $max) {
            $max = $zenbakiArraya[$i];
        }
    }

    
?>

<html>
    <title>: Ariketa 404: Array-ak </title>
    <style>
        table, th, td {
            border: 1px solid;
        }
    </style>
    <body>
        <h1>Ariketa 404: Array-ak</h1>
        <?php
            echo 'Array-a: ';
            for ($i=0; $i<count($zenbakiArraya); $i++) {
                echo $zenbakiArraya[$i], ', ';
            }
            echo '<br><br>';
            echo 'Balio maximoa = ', $max, '<br>';
        ?>
    </body>
</html>