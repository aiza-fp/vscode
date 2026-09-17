<?php
$lehenZenb = 4;
$azkenZenb = 9;
$batuketa = $lehenZenb;
$adierazpena = $lehenZenb;

for ($zenbakia = 1; $zenbakia <= $azkenZenb; $zenbakia++) {
    $batuketa += $zenbakia;
    $adierazpena .= "+" . $zenbakia;
}

echo $adierazpena . " = " . $batuketa;
