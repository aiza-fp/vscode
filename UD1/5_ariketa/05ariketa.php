<?php
    /*
Gorde 50 ausazko zenbaki (0 eta 49 bitartekoak) dituen array bat. Ondoren, array-an zenbaki bakoitza zenbat aldiz agertzen den adierazi.
    */

    $zenbakiak = array();
    $zenbakiKopurua = array();
    for ($i=0; $i<50; $i++){
        $zenbakiak[$i] = rand(0,49);
        $zenbakiKopurua[$zenbakiak[$i]] = 0;
    }
    for ($i=0; $i<50; $i++){
        $zenbakiKopurua[$zenbakiak[$i]]++;
    }

?>

<html>
    <title>Ariketa 505: Array asoziatiboak (Numeros)</title>
    <body>
        <h1>
            Ariketa 505: Array asoziatiboak (Numeros)
        </h1>
        <?php
            echo '<h3>Ausazko zenbakien array-a erakutsi:</h3>';
            //var_dump($numeros);
            foreach($zenbakiak as $value){
                echo  $value, ', ';  
            }
            echo '<br>';
        ?>
        <br>
        <?php
            echo '<h3>Array-a kopuruekin:</h3>';
            //var_dump($zenbakiKopurua);
            echo '<ul>';
            foreach($zenbakiKopurua as $key => $value){
                echo '<li>Zenbaki hau: ', $key, ' agertu da ', $value, ' aldiz</li>';  
            }
            echo '</ul>';
        ?>
        <br>
          
    </body>
</html>