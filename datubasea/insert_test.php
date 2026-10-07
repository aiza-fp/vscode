
<?php
if (isset($_GET['id']) && isset($_GET['izena'])) {
    $id= $_GET['id'];
    $izena = $_GET['izena'];

    $mysqli = new mysqli("localhost", "root", "", "test");
    
    if ($mysqli->connect_errno) {
        echo "Akatsa MySQL konexioan: (" . $mysqli->connect_errno . ") " . $mysqli->connect_error;
    }
    
    /* Prestatutako sententzia, 1 fasea: prestaketa */
    if (!($sententzia = $mysqli->prepare("INSERT INTO test(id, izena) VALUES (?, ?)"))) {
        echo "Prestaketa gaizki atera da: (" . $mysqli->errno . ") " . $mysqli->error;
    }
    
    /* Prestatutako sententzia, 2 fasea: estekatzea y exekuzioa */
    if (!$sententzia->bind_param("is", $id, $izena)) {
        echo "Parametroen estekatzea gaizki atera da: (" . $sententzia->errno . ") " . $sententzia->error;
    }
    
    if (!$sententzia->execute()) {
        echo "Akatsa exekuzioan: (" . $sententzia->errno . ") " . $sententzia->error;
    }
    
    /* gomendagarria da itxiera esplizitua egitea */
    $sententzia->close();
    
    /* Prestatu gabeko sentetzia */
//      $emaitza = $mysqli->query("SELECT * FROM test");
//      var_dump($emaitza->fetch_all());
    header("Location: select_test.php");
}else{
    echo("<br>Parametroetan akatsa<br>");
    
}



?>

