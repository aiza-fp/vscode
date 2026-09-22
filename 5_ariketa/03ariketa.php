<?php
    /*
Programa honetan array asoziatibo bat erabili beharko duzu, asteko egun bakoitza gako gisa gordetzeko eta egun bakoitzari balio oso bat esleitzeko. Pantailan asteko egun bakoitza eta array-an gordetako balioa erakutsi behar da, baita array-an gordetako balio guztien batura eta batezbestekoa ere.
    */

    $astea = array(
        'astelehena' => 8, 
        'asteartea' => 3, 
        'asteazkena'=> 22,
        'osteguna' => 27, 
        'ostirala' => -10, 
        'larunbata'=> 9,
        'igandea' => -1
    );

    $batura = 0;
    foreach($astea as $eguna => $balioa){
        $batura += $balioa;
    }

    $batezbestekoa = $batura / count($astea);

?>

<html>
    <title>Ariketa 503: Array asoziatiboak (Egunak)</title>
    <style>
        table, th, td {
            border: 1px solid;
        }
    </style>
    <body>
        <h1>
            Ariketa 503: Array asoziatiboak (Egunak)
        </h1>
        <table>
            <thead>
                <td>Eguna</td>
                <td>Balioa</td>
            </thead>
            <tbody>
                <?php
                    foreach($astea as $eguna => $balioa){
                        echo '<tr>';
                        echo '<td>', $eguna, '</td>';
                        echo '<td>', $balioa, '</td>';
                        echo '<tr>';
                    }
                ?>
            </tbody>
        </table>
        <?php
            echo 'Batura = ', $batura, '<br>';
            echo 'Batezbestekoa = ', $batezbestekoa, '<br>';
        ?>
    </body>
</html>