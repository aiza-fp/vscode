<?php

    /*
Sortu programa bat kate bat hartzen duena eta alderantziz itzultzen duena.   */
    
    $testua = "Testu hau buelta emateko da";
    $testuaAlderantziz = "";

    for ($i = strlen($testua) - 1; $i >= 0; $i--) {
        $testuaAlderantziz .= $testua[$i];
    }

    echo '$testua =', $testua, '<br>';
    echo '$testuaAlderantziz =', $testuaAlderantziz, '<br>';
    
    //$textoInvertido = strrev($textoOriginal);
?>