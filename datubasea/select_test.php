
<?php
$mysqli = new mysqli("localhost", "root", "", "test");
if ($mysqli->connect_errno) {
    echo "Akatsa MySQL konexioan: (" . $mysqli->connect_errno . ") " . $mysqli->connect_error;
}

/* Prestatu gaberko sententzia */
$emaitza = $mysqli->query("SELECT * FROM test");

// emaitza erakutsi
while ($row = $emaitza->fetch_assoc()) {
    echo($row['id'] . " - " . $row['izena'] . " - ");
    echo '<a href="update_form.php?id=' . $row['id'] . '">Modificar</a>';
    echo ' - ';
    echo '<a href="delete_test.php?id=' . $row['id'] . '">Eliminar</a>';
    //printf("%s - %s\n", $row["id"], $row["izena"]);
    echo "<br>";
    
}

/* gomendagarria da itxiera esplizitua egitea */
$mysqli->close();

?>
<br>
<a href="insert_form.php">ikaslea gehitu</a>