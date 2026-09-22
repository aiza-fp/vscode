<?php
    /*
Bi pertsonen datu pertsonalak 6 aldagaian izango ditugu. Pertsona bakoitzak 3 datu izango ditu: izena, abizena eta NANa.
Datu guztiak array asoziatibo batean sartu behar dira, non indizeak "izena", "abizena", "NANa" izango diren, eta ondoren pantailan bistaratu behar dira taula formatuan.

   
    */

    $izena1 = 'Jon';
    $abizena1 = 'Etxeandia';
    $nan1 = '123455678A';

    $izena2 = 'Josefa';
    $abizena2 = 'Pérez';
    $nan2 = '87654321A';

    $erab1 = array('izena' => $izena1, 
        'abizena' => $abizena1, 
        'nan'=> $nan1);
    $erab2 = array('izena' => $izena2, 
        'abizena' => $abizena2, 
        'nan'=> $nan2);
?>

<html>
    <title>Ariketa 501: Array asoziatiboak </title>
    <style>
        table, th, td {
            border: 1px solid;
        }
    </style>
    <body>
        <h1>
            Ariketa 501: Array asoziatiboak
        </h1>
        <table>
            <thead>
                <td>izena</td>
                <td>abizena</td>
                <td>NAN</td>
            </thead>
            <tbody>
                <tr>
                    <td><?php echo $erab1['izena']; ?></td>
                    <td><?php echo $erab1['abizena']; ?></td>
                    <td><?php echo $erab1['nan']; ?></td>
                </tr>
                <tr>
                    <td><?php echo $erab2['izena']; ?></td>
                    <td><?php echo $erab2['abizena']; ?></td>
                    <td><?php echo $erab2['nan']; ?></td>
                </tr>
                </tr>
            </tbody>
        </table>
    </body>
</html>