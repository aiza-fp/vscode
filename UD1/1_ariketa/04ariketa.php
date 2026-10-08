<?php
$z1 = -50;
$z2 = -43;
$z3 = -43;

if($z1 >= $z2 && $z2 >= $z3){
    echo "<br>" . "1-Ordenatuta beherantz:" . $z1 .  " " . $z2 .  " " . $z3 .  " ";
    echo "<br>" . "1-Ordenatuta gorantz:" . $z3 .  " " . $z2 .  " " . $z1 .  " ";
}elseif($z1 >= $z2 && $z2 < $z3 && $z1 >= $z3){
    echo "<br>" . "2-Ordenatuta beherantz: " . $z1 .  " " . $z3 .  " " . $z2 .  " ";
    echo "<br>" . "2-Ordenatuta gorantz: " . $z2 .  " " . $z3 .  " " . $z1 .  " ";
}elseif($z1 >= $z2 && $z2 < $z3 && $z1 < $z3){
    echo "<br>" . "3-Ordenatuta beherantz: " . $z3 .  " " . $z1 .  " " . $z2 .  " ";
    echo "<br>" . "3-Ordenatuta gorantz: " . $z2 .  " " . $z1 .  " " . $z3 .  " ";
}

elseif($z2 >= $z3 && $z3 >= $z1){
    echo "<br>" . "4-Ordenatuta beherantz:" . $z2 .  " " . $z3 .  " " . $z1 .  " ";
    echo "<br>" . "4-Ordenatuta gorantz:" . $z1 .  " " . $z3 .  " " . $z2 .  " ";
}elseif($z2 >= $z3 && $z3 < $z1 && $z2 >= $z1){
    echo "<br>" . "5-Ordenatuta beherantz: " . $z2 .  " " . $z1 .  " " . $z3 .  " ";
    echo "<br>" . "5-Ordenatuta gorantz: " . $z3 .  " " . $z1 .  " " . $z2 .  " ";
}elseif($z2 >= $z3 && $z3 < $z1 && $z2 < $z1){
    echo "<br>" . "6-Ordenatuta beherantz: " . $z1 .  " " . $z2 .  " " . $z3 .  " ";
    echo "<br>" . "6-Ordenatuta gorantz: " . $z3 .  " " . $z2 .  " " . $z1 .  " ";
}

elseif($z3 >= $z1 && $z1 >= $z2){
    echo "<br>" . "7-Ordenatuta beherantz:" . $z3 .  " " . $z1 .  " " . $z2 .  " ";
    echo "<br>" . "7-Ordenatuta gorantz:" . $z2 .  " " . $z1 .  " " . $z3 .  " ";
}elseif($z3 >= $z1 && $z1 < $z2 && $z3 >= $z2){
    echo "<br>" . "8-Ordenatuta beherantz: " . $z3 .  " " . $z2 .  " " . $z1 .  " ";
    echo "<br>" . "8-Ordenatuta gorantz: " . $z1 .  " " . $z2 .  " " . $z3 .  " ";
}elseif($z3 >= $z1 && $z1 < $z2 && $z3 < $z2){
    echo "<br>" . "9-Ordenatuta beherantz: " . $z2 .  " " . $z3 .  " " . $z1 .  " ";
    echo "<br>" . "9-Ordenatuta gorantz: " . $z1 .  " " . $z3 .  " " . $z2 .  " ";
}

?>