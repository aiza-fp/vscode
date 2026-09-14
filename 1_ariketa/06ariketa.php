<?php
    $a = 25;
    $b = 1.2;

    $batura = $a + $b;
    $biderkadura = $a * $b;

    // Visualizacion datos
    echo '$a = ', $a, '<br>';
    echo '$b = ', $b, '<br>';
    echo '$batura = ', $batura, '<br>';
    echo '$biderkadura = ', $biderkadura, '<br>';

    if ($batura > $biderkadura) {
        echo 'Batura biderkadura baino handiagoa da.';
    } else {
        echo 'Biderkadura batura baino handiagoa da.';
    }
?>