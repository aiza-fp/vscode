<?php
    /*
  Hilabeteen izenak indize bezala eta egun kopuruak balio bezala dituen array asoziatibo bat sortu eta erakutsi.
    */

    $hilabetea = array(
        'urtarrila' => 31, 
        'otsaila' => 28, 
        'martxoa'=> 31,
        'apirila' => 30, 
        'maiatza' => 31, 
        'ekaina'=> 30,
        'uztaila' => 31, 
        'abuztua' => 31, 
        'iraila'=> 30,
        'urria' => 31, 
        'azaroa' => 30, 
        'abendua'=> 31,
    );
    

?>

<html>
    <title>Ariketa 502: Array asoziatiboak (Hilabeteak)</title>
    <style>
        table, th, td {
            border: 1px solid;
        }
    </style>
    <body>
        <h1>
            Ariketa 502: Array asoziatiboak (Hilabeteak)
        </h1>
        <table>
            <thead>
                <td>Hilabetea</td>
                <td>Egunak</td>
            </thead>
            <tbody>
                <?php
                    foreach ($hilabetea as $hilabeteIzena => $egunak){
                        echo '<tr>';
                        echo '<td>', $hilabeteIzena, '</td>';
                        echo '<td>', $egunak, '</td>';
                        echo '<tr>';
                    }
                ?>
            </tbody>
        </table>
    </body>
</html>