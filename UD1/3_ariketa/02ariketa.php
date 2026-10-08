<?php
if(isset($_GET["lehenZenb"]) && isset($_GET["azkenZenb"])){
    $lehenZenb = $_GET["lehenZenb"];
    $azkenZenb = $_GET["azkenZenb"];
    $batuketa = 0;

    for ($zenbakia = $lehenZenb; $zenbakia <= $azkenZenb; $zenbakia++) {
        $batuketa += $zenbakia;
    }

    echo $batuketa;
}else{
    echo "lehenZenb edo/eta azkenZenb parametroak definitu gabe";
}
?>