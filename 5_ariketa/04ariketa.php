<?php
    /*
Array asoziatibo bat sortu eta gakoa eta balioaren arabera ordenatu. Horretarako, ksort eta natsort funtzioak erabili behar dituzu. 
    */

    $pertsonak = array(
        'jordi' => 'Jordi Rubio', 
        'marta' => 'Marta Fabra', 
        'eva'=> 'Eva Palacio',
        'toni' => 'Antonio Comas', 
        'emilio' => 'Emilio Morales', 
        'fco'=> 'Francisco Cascales'
    );

?>

<html>
    <title>Ariketa 504: Array asoziatiboak (Pertsonak, ordenatu)</title>
    <style>
        table, th, td {
            border: 1px solid;
        }
    </style>
    <body>
        <h1>
            Ariketa 504: Array asoziatiboak (Pertsonak, ordenatu)
        </h1>
        <?php
            echo '<h3>Array-a erakutsi:</h3>';
            echo '<ul>';
            foreach($pertsonak as $key => $value){
                echo '<li>', $key, ' - ', $value, '</li>';  
            }
            echo '</ul>';
        ?>
        <br>
        <?php
            echo '<h3>Klabe bidez ordenatu:</h3>';
            ksort($pertsonak);
            echo '<ul>';
            foreach($pertsonak as $key => $value){
                echo '<li>', $key, ' - ', $value, '</li>';  
            }
            echo '</ul>';
        ?>
        <br>
        <?php
            echo '<h3>Eduki bidez ordenatu:</h3>';
            natsort($pertsonak);
            echo '<ul>';
            foreach($pertsonak as $key => $value){
                echo '<li>', $key, ' - ', $value, '</li>';  
            }
            echo '</ul>';
        ?>
          
    </body>
</html>