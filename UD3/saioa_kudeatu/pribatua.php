<?php
session_start();

// Saioa hasi ez duen erabiltzailea loginera bidali
if (($_SESSION["saioa_hasita"] ?? false) !== true) {
    header("Location: login.php");
    exit;
}

$izena = $_SESSION["erabiltzailea"];
?>

<!DOCTYPE html>
<html lang="eu">
<head>
    <meta charset="UTF-8">
    <title>Eremu pribatua</title>
</head>
<body>
    <h1>Ongi etorri, <?= htmlspecialchars($izena) ?>!</h1>
    <p>Saioa hasita daukazu.</p>

    <form action="logout.php" method="post">
        <button type="submit">Saioa itxi</button>
    </form>
</body>
</html>
