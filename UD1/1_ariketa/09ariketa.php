<?php

    /* 
 Definitu bi kalifikazio bi aldagaitan eta kalkulatu bataz bestekoa gainditua edo gainditu gabea den.
   */

    $nota1 = 4.3;
    $nota2 = 6.0;

    $batezbestekoa = ($nota1 + $nota2) / 2;

    echo 'Nota1 = ', $nota1, '<br>';
    echo '$Nota2 = ', $nota2, '<br>';
    echo 'Batezbestekoa = ', $batezbestekoa, '<br>';
    if ($batezbestekoa >= 5) {
        echo "GAINDITUA<br>";
    } else {
        echo "EZ GAINDITUA<br>";
    }
?>