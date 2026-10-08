<?php
    /*
Bi pertsonen datu pertsonalak 6 aldagaitan izango ditugu. Pertsona bakoitzak 3 datu izango ditu: izena, abizena eta NANa.
Datu guztiak bi arraytan sartu behar dira ($erab1, $erab2) eta ondoren pantailan bistaratu behar dira taula formatuan.
   
    */

    $izena1 = 'Jon';
    $abizena1 = 'Etxeandia';
    $nan1 = '123455678A';

    $izena2 = 'Josefa';
    $abizena2 = 'Pérez';
    $nan2 = '87654321A';

    $erab1 = array($izena1, $abizena1, $nan1);
    $erab2 = array($izena2, $abizena2, $nan2);

?>

<html>
    <title>Ariketa 401: Array-ak </title>
    <style>
        table, th, td {
            border: 1px solid;
        }
    </style>
    <body>
        <h1>
            Ariketa 401: Array-ak
        </h1>
        <table>
            <thead>
                <td>izena</td>
                <td>abizena</td>
                <td>NAN</td>
            </thead>
            <tbody>
                <tr>
                    <td><?php echo $erab1[0]; ?></td>
                    <td><?php echo $erab1[1]; ?></td>
                    <td><?php echo $erab1[2]; ?></td>
                </tr>
                <tr>
                    <td><?php echo $erab2[0]; ?></td>
                    <td><?php echo $erab2[1]; ?></td>
                    <td><?php echo $erab2[2]; ?></td>
                </tr>
                </tr>
            </tbody>
        </table>
    </body>
</html>