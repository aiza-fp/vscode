<?php

    /*
<?php

    /*
Programa bat idatzi, hitz bat palindromoa den ala ez jakiteko (aurrera eta atzera berdin irakurtzen dena).
*/
    
    $testua = "Te43teT";
    $testuaAlderantziz = "";

    for ($i = strlen($testua) - 1; $i >= 0; $i--) {
        $testuaAlderantziz .= $testua[$i];
    }

    echo '$testua =', $testua, '<br>';
    echo '$testuaAlderantziz =', $testuaAlderantziz, '<br>';
    
    if($testua == $testuaAlderantziz){
        echo 'Palindromoa da.';
    }else{
        echo 'Ez da palindromoa';
    }

    //$textoInvertido = strrev($textoOriginal);
?> 