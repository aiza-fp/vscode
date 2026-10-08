<?php
    /*
Definitu zenbaki bat aldagai batean eta esan ze kalifikaziori dagokion. 
●	1 eta 4,9: Ez gainditua
●	5 eta 5,9: Nahiko
●	6 eta 6,9: Ondo
●	7 eta 8,9: Oso ondo
●	9 eta 10: Bikain
●	Bestela AKATSA.
    */

    $nota = -1.5;

    echo '$nota = ', $nota, '<br>';
    if ($nota >= 0 && $nota <= 4.9) {
        echo 'EZ GAINDITUA<br>';
    } elseif ($nota >= 5 && $nota <= 5.9) {
        echo 'NAHIKO<br>';
    } elseif ($nota >= 6 && $nota <= 6.9) {
        echo 'ONDO<br>';
    } elseif ($nota >= 7 && $nota <= 8.9) {
        echo 'OSO ONDO<br>';
    } elseif ($nota >= 9 && $nota <= 10) {
        echo 'BIKAIN<br>';
    } else {
        echo 'AKATSA<br>';
    }

?>
