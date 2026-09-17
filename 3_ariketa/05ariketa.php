<?php
if(isset($_GET["zenbakia"])){
    $zenbakia = $_GET["zenbakia"];
    for ($j = 2; $j < $zenbakia; $j++) {
        $zenbakiLehena = true;
            for ($i = 2; $i < $j; $i++) {
                if ($j % $i == 0) {
                    $zenbakiLehena = false;
                    break;
                }
            }
        if($zenbakiLehena){
            echo "$j zenbaki lehena da"."<br>";
        }else{
            //echo "$j ez da zenbaki lehena"."<br>";
        }
    }
}else{
    echo "zenbakia parametroa definitu gabe";
}
?>