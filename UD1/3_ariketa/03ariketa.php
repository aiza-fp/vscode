<?php
if(isset($_GET["bikoitiak"])){
    $alderdiBikoitiak = $_GET["bikoitiak"] == "true" ? true : false;
    $muga = rand(1, 99);

    for ($zenbakia = 1; $zenbakia <= $muga; $zenbakia++) {
        if ($alderdiBikoitiak && $zenbakia % 2 == 0) {
            echo $zenbakia . "<br>";
        } elseif (!$alderdiBikoitiak && $zenbakia % 2 != 0) {
            echo $zenbakia . "<br>";
        }
    }
}else{
    echo "bikoitiak parametroa definitu gabe";
}
?>