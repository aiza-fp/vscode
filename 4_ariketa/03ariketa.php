<?php
    /*
    Ariketa hau egiteko aurreko ariketa (ariketa02) kopiatu eta izena aldatu.
    Gure oinetako-dendak beherapenak jarriko ditu. Produktu guztien prezioak aldatu behar dira.
    Beherapena aldagaian gordeta egongo da eta ehuneko bat izango da (20%, 50%, ...), 
    adibidez: $beherapena = 20;.
    Pantailan produktuak eta prezio zaharrak eta berriak inprimatuko dira; prezio berriak 
    prezioen array-an gordeko dira (programa amaitzean prezioen array-ak prezio berriak izango ditu).
   
    */


    $produktuak = array('Gizonezkoen zapatak', 'Emakumezkoen zapatak', 'Korrikarako zapatilak', 'Sandaliak', 'Galtzerdiak');
    $prezioak = array(60, 75, 45, 25, 12);
    $beherapena = 20;

?>

<html>
    <title>Ariketa 403: Array-ak </title>
    <style>
        table, th, td {
            border: 1px solid;
        }
    </style>
    <body>
        <h1>
            Ariketa 403: Array-ak 
        </h1>
        <h3> <?php echo $beherapena; ?>%-eko beherapenak</h3>
        <table>
            <thead>
                <td>Produktua</td>
                <td>Prezioa</td>
                <td>Prezioa Beherapenarekin</td>
            </thead>
            <tbody>
                <?php
                    for ($i=0; $i<5; $i++) {
                        echo '<tr>';
                        echo '<td>', $produktuak[$i], '</td>';
                        echo '<td>', $prezioak[$i], '</td>';
                        echo '<td>', $prezioak[$i] * (100-$beherapena)/100, '</td>';
                        echo '</tr>';
                    }
                ?>
            </tbody>
        </table>
        
        <?php
            // Guardamos los nuevos precios rebajados en el array anterior
            for ($i=0; $i<5; $i++) {
                $prezioak[$i] = $prezioak[$i] * (100-$beherapena)/100;
            }

            var_dump($prezioak);
        ?>

    </body>
</html>