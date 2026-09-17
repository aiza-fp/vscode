<?php
$lehenZenb = 43;
$azkenZenb = 120;
$batuketa = 0;

for ($zenbakia = $lehenZenb; $zenbakia <= $azkenZenb; $zenbakia++) {
    $batuketa += $zenbakia;
}

echo $batuketa;
?>
