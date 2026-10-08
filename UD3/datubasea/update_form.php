<?php
$id=$_GET['id'];
$mysqli = new mysqli("localhost", "root", "", "test");
$emaitza = $mysqli->query("select * from test where id=" .$id);

$erab = $emaitza->fetch_assoc();

$mysqli->close();
?>

<!DOCTYPE html>
<html lang="eu">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aldatu</title>
</head>

<body>
    <form action="update_test.php">
        <input type="text" name="id" placeholder="id" value="<?=$erab['id']?>" readonly>
        <input type="text" name="izena" placeholder="izena"  value="<?=$erab['izena']?>">
        <input type="submit" value="Gorde">
    </form>
</body>



</html>