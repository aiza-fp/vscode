
<?php
if (isset($_GET['id'])) {
    $id= $_GET['id'];

    $mysqli = new mysqli("localhost", "root", "", "test");
    if ($mysqli->connect_errno) {
        echo "MySQL konexioak huts egin du: (" . $mysqli->connect_errno . ") " . $mysqli->connect_error;
    }
    
    /* Prestatutako sententzia, 1 fasea: prestaketa */
    if (!($sententzia = $mysqli->prepare("DELETE FROM test WHERE id=?"))) {
        echo "Prestaketa gaizki atera da: (" . $mysqli->errno . ") " . $mysqli->error;
    }
    
    /* Prestatutako sententzia, 2 fasea: estekatzea y exekuzioa */
    if (!$sententzia->bind_param("i", $id)) {
        echo "Parametroen estekatzea gaizki atera da: (" . $sententzia->errno . ") " . $sententzia->error;
    }
    
    if (!$sententzia->execute()) {
        echo "Akatsa exekuzioan: (" . $sententzia->errno . ") " . $sententzia->error;
    }
    
    /* gomendagarria da itxiera esplizitua egitea */
    $sententzia->close();
    
    /* Prestatu gabeko sententzia */
    //$emaitza = $mysqli->query("SELECT * FROM test");
    //var_dump($emaitza->fetch_all());
    header("Location: select_test.php");
}else{
    echo("<br>Parametroen akatsa<br>");

   
    
}



?>

