<html>
    <head></head>
    <body>
        <h1>Datu Pertsonalak</h1>
        <br>
        
        <?php

            $izena = '';
            $abizenak = '';
            $adina = 0;
            $pisua = 0;
            $sexua = '';
            $egoerazibila = '';
            $zaletasunak='';

            if(!empty($_POST['izena'])) {
                $izena = $_POST['izena'];
                echo 'Bere izena da <b>', $izena, '</b><br>';
            } else {
                echo '<div style="color:red">Ez du adierazi bere <b>izena</b></div><br>';
            }

            if(!empty($_POST['abizenak'])) {
                $abizenak = $_POST['abizenak'];
                echo 'Bere abizenak dira <b>', $abizenak, '</b><br>';
            } else {
                echo '<div style="color:red">Ez du adierazi bere <b>abizenak</b></div><br>';
            }

            if(isset($_POST['adina'])) {
                $adina = $_POST['adina'];
                echo 'Bere adin tartea da <b>', $adina, '</b><br>';
            } else {
                echo '<div style="color:red">Ez du adierazi bere <b>adin tartea</b></div><br>';
            }

            if(isset($_POST['pisua'])) {
                $pisua = $_POST['pisua'];
                echo 'Bere pisua da <b>', $pisua, '</b><br>';
            } else {
                echo '<div style="color:red">Ez du adierazi bere <b>pisua</b></div><br>';
            }

            if(isset($_POST['sexua'])) {
                $sexua = $_POST['sexua'];
                echo 'Bere sexua da <b>', $sexua, '</b><br>';
            } else {
                echo '<div style="color:red">Ez du adierazi bere <b>sexua</b></div><br>';
            }

            if(isset($_POST['egoerazibila'])) {
                $egoerazibila = $_POST['egoerazibila'];
                echo 'Bere egoera zibila da <b>', $egoerazibila, '</b><br>';
            } else {
                echo '<div style="color:red">Ez du adierazi bere <b>egoera zibila</b></div><br>';
            }

            
            if(isset($_POST['zaletasunak'])) {
                echo 'Gustatzen zaio: <b>';
                foreach ($_POST['zaletasunak'] as $zaletasuna){
                    echo $zaletasuna, ', ';
                }
                echo '<br>';
            } else {
                echo 'Ez du zaletasunik.<br>';
            }

            echo '</b><br>';
        ?>

        <button onclick="history.back()">Bueltatu formulariora</button>
    </body>
</html>