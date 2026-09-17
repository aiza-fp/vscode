<?php
    /*
        Oinetako-denda batean 5 produktu baino ez dira saltzen. Produktuak eta prezioak bi 
        arraytan gordeta ditut (produktuak batean eta prezioak bestean). Produktu bakoitza 
        bere prezioarekin bistaratzea beharrezkoa da.   
    */


    $produktuak = array('Gizonezkoen zapatak', 'Emakumezkoen zapatak', 'Korrikarako zapatilak', 'Sandaliak', 'Galtzerdiak');
    $prezioak = array(60, 75, 45, 25, 12);

?>

<html>
    <title>Ariketa 402: Array-ak </title>
    <style>
        table, th, td {
            border: 1px solid;
        }
    </style>
    <body>
        <h1>
            Ariketa 402: Array-ak
        </h1>
        <table>
            <thead>
                <td>Produktua</td>
                <td>Prezioa</td>
            </thead>
            <tbody>
                <?php
                    for ($i=0; $i<5; $i++) {
                        echo '<tr>';
                        echo '<td>', $produktuak[$i], '</td>';
                        echo '<td>', $prezioak[$i], '</td>';
                        echo '</tr>';
                    }
                ?>
            </tbody>
        </table>
    </body>
</html>