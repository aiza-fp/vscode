<?php
if(isset($_GET["zenbakia"])){
    $zenbakia = $_GET["zenbakia"];
    $zenbakiLehena = true;
        for ($i = 2; $i < $zenbakia; $i++) {
            if ($zenbakia % $i == 0) {
                 $zenbakiLehena = false;
                 break;
            }
        }
    if($zenbakiLehena){
        echo "$zenbakia zenbaki lehena da";
    }else{
        echo "$zenbakia ez da zenbaki lehena";
    }
}else{
    echo "zenbakia parametroa definitu gabe";
}
?>