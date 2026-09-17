<?php
if(isset($_GET["lerroKopurua"])){
    for ($lerroa = 1; $lerroa <= $_GET["lerroKopurua"]; $lerroa++) {
        echo str_repeat("o", $lerroa) . "<br>";
    }
}else{
    echo "lerroKopurua parametroa definitu gabe";
}

?>