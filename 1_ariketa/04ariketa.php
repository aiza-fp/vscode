<?php
$zenbaki1 = 5;
$zenbaki2 = 9;
$zenbaki3 = 2;

if($zenbaki1 >= $zenbaki2 && $zenbaki2 >= $zenbaki3){
    echo "<br>" . "Ordenatuta beherantz:" . $zenbaki1 .  " " . $zenbaki2 .  " " . $zenbaki3 .  " ";
    echo "<br>" . "Ordenatuta gorantz:" . $zenbaki3 .  " " . $zenbaki2 .  " " . $zenbaki1 .  " ";
}elseif($zenbaki1 >= $zenbaki2 && $zenbaki2 < $zenbaki3){
    echo "<br>" . "Ordenatuta beherantz: " . $zenbaki1 .  " " . $zenbaki3 .  " " . $zenbaki2 .  " ";
    echo "<br>" . "Ordenatuta gorantz: " . $zenbaki2 .  " " . $zenbaki3 .  " " . $zenbaki1 .  " ";
}elseif($zenbaki2 >= $zenbaki3 && $zenbaki3 >= $zenbaki1){
    echo "<br>" . "Ordenatuta beherantz: " . $zenbaki1 .  " " . $zenbaki3 .  " " . $zenbaki2 .  " ";
    echo "<br>" . "Ordenatuta gorantz: " . $zenbaki2 .  " " . $zenbaki3 .  " " . $zenbaki1 .  " ";
}elseif($zenbaki2 >= $zenbaki3 && $zenbaki3 < $zenbaki1){
    echo "<br>" . "Ordenatuta beherantz: " . $zenbaki2 .  " " . $zenbaki1 .  " " . $zenbaki3 .  " ";
    echo "<br>" . "Ordenatuta gorantz: " . $zenbaki3 .  " " . $zenbaki1 .  " " . $zenbaki2 .  " ";
}elseif($zenbaki3 >= $zenbaki1 && $zenbaki1 >= $zenbaki2){
    echo "<br>" . "Ordenatuta beherantz: " . $zenbaki3 .  " " . $zenbaki1 .  " " . $zenbaki2 .  " ";
    echo "<br>" . "Ordenatuta gorantz: " . $zenbaki2 .  " " . $zenbaki1 .  " " . $zenbaki3 .  " ";
}elseif($zenbaki3 >= $zenbaki1 && $zenbaki1 < $zenbaki2){
    echo "<br>" . "Ordenatuta beherantz: " . $zenbaki3 .  " " . $zenbaki2 .  " " . $zenbaki1 .  " ";
    echo "<br>" . "Ordenatuta gorantz: " . $zenbaki1 .  " " . $zenbaki2 .  " " . $zenbaki3 .  " ";
}

?>