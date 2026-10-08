<html>
    <head></head>
    <body>
        <h1>Kalkulagailua</h1>
        <br>
        
        <?php


            $zenbaki1 = 0;
            $zenbaki2 = 0;
            $kalkulua = '';
            $dena_ok = true;
            $emaitza = 0.0;
           

            if(isset($_GET['zenbaki1'])) {
                $zenbaki1 = $_GET['zenbaki1'];
                echo 'zenbaki1 = <b>', $zenbaki1, '</b><br>';
                if (filter_var($zenbaki1, FILTER_VALIDATE_INT) === false) {
                    $dena_ok = false;
                    echo '<div style="color:red">Zenbaki 1 ez da zenbaki osoa</b></div><br>';
                }
            } else {
                $dena_ok = false;
                echo '<div style="color:red">Ez duzu adierazi <b>Zenbaki 1</b></div><br>';
            }

            if(isset($_GET['zenbaki2'])) {
                $zenbaki2 = $_GET['zenbaki2'];
                echo 'zenbaki2 = <b>', $zenbaki2, '</b><br>';
                if (filter_var($zenbaki2, FILTER_VALIDATE_INT) === false) {
                    $dena_ok = false;
                    echo '<div style="color:red">Zenbaki 2 ez da zenbaki osoa</b></div><br>';
                }
            } else {
                $dena_ok = false;
                echo '<div style="color:red">Ez duzu adierazi <b>Zenbaki 2</b></div><br>';
            }

            if(isset($_GET['kalkulua'])) {
                $kalkulua = $_GET['kalkulua'];
                echo 'kalkulua = <b>', $kalkulua, '</b><br>';
                //if (strcmp('suma', $kalkulua) != 0 && strcmp('resta', $kalkulua) != 0  && strcmp('multiplicacion', $kalkulua) != 0  && strcmp('division', $kalkulua) !== 0) {
                if ($kalkulua != 'batuketa' && $kalkulua != 'kenketa'  && $kalkulua != 'biderketa'  && $kalkulua != 'zatiketa') {
                    $dena_ok = false;
                    echo '<div style="color:red">kalkulua izan behar da "batuketa", "kenketa", "biderketa" edo "zatiketa"</div><br>';
                }
                   
            } else {
                $dena_ok = false;
                echo '<div style="color:red">Ez duzu adierazi <b>kalkulua</b> balioa</div><br>';
            }

            if ($dena_ok) {
                echo '<div style="color:green">Badirudi balioak ondo daudela, egin ditzagun kalkuluak..."</div><br>';

                if ($kalkulua == 'batuketa') {
                    $emaitza = $zenbaki1 + $zenbaki2;
                    echo $zenbaki1, ' + ', $zenbaki2, ' = ', $emaitza, '<br>';
                }
                if ($kalkulua == 'kenketa') {
                    $emaitza = $zenbaki1 - $zenbaki2;
                    echo $zenbaki1, ' - ', $zenbaki2, ' = ', $emaitza, '<br>';
                }
                if ($kalkulua == 'biderketa') {
                    $emaitza = $zenbaki1 * $zenbaki2;
                    echo $zenbaki1, ' x ', $zenbaki2, ' = ', $emaitza, '<br>';
                }
                if ($kalkulua == 'zatiketa') {
                    $emaitza = $zenbaki1 / $zenbaki2;
                    echo $zenbaki1, ' / ', $zenbaki2, ' = ', $emaitza, '<br>';
                }
            }

            echo '<br>';
        ?>

        <button onclick="history.back()">Bueltatu formulariora</button>
    </body>
</html>