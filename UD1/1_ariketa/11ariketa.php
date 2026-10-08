<?php

    /*
 Programa bat idatzi, testu-kate bat jasotzen duena eta zenbat bokal (a, e, i, o, u) dituen zenbatzen duena.
    */

    $testua = "Hau da frogA egIteko testUa";

    //$str = strtolower($testua);
    $bokal_kopurua = 0;

    for ($i = 0; $i < strlen($testua); $i++) {
        if($testua[$i] == "a" || $testua[$i] == "A" || $testua[$i] == "e" || $testua[$i] == "E"|| $testua[$i] == "i"|| $testua[$i] == "I"|| $testua[$i] == "o"|| $testua[$i] == "O"|| $testua[$i] == "u"|| $testua[$i] == "U"){
            $bokal_kopurua++;
        }
    }
    
    echo 'Testu honek: "', $testua, '" dituen bokal kopurua: ', $bokal_kopurua;

?>