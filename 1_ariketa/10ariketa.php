<?php

    /*
Denverra joateko hegazkin txartel bat edukita eta  irteeraData (data eta ordua) jakinda, programak kalkulatu beharko du zenbat denbora falta den hegazkina hartzeko, momentuko orduaren arabera egin behar da kalkulua.
*/

    $irteeraData = date_create("2026-11-25 14:30:00");
    $orain = date_create(); 
    $interval = $orain->diff($irteeraData);
    
    echo 'IrteeraData = ', date_format($irteeraData,"Y-m-d H:i:s");
    echo '<br>';
    echo 'Orain = ',date_format($orain,"Y-m-d  H:i:s");
    echo '<br>';
    echo 'Falta den denbora: '.$interval->format('%y urte'), ', ';
    echo $interval->format('%m hilabete'), ', ';
    echo $interval->format('%d egun'), ', ';
    echo $interval->format('%H ordu'), ', ';
    echo $interval->format('%i minutu'), ', ';
    echo $interval->format('%s segundu'), '. ';
    echo '<br>';
?>