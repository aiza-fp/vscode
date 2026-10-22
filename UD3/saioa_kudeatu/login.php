<?php
session_start();
$errorea = "";

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $erabiltzailea = $_POST["erabiltzailea"] ?? "";
    $pasahitza = $_POST["pasahitza"] ?? "";

    // Adibiderako datuak
    if ($erabiltzailea === "ane" && $pasahitza === "1234") {
        // Saioaren identifikatzailea berritu segurtasunerako
        session_regenerate_id(true);

        // Datu hauek beste orrietan ere erabil daitezke
        $_SESSION["erabiltzailea"] = $erabiltzailea;
        $_SESSION["saioa_hasita"] = true;

        header("Location: pribatua.php");
        exit;
    }

    $errorea = "Erabiltzailea edo pasahitza okerra da.";
}
?>

<!DOCTYPE html>
<html lang="eu">
<head>
    <meta charset="UTF-8">
    <title>Saioa hasi</title>
</head>
<body>
    <h1>Saioa hasi</h1>

    <p><?= $errorea ?></p>

    <form method="post">
        <label>
            Erabiltzailea:
            <input type="text" name="erabiltzailea" required>
        </label>
        <br>

        <label>
            Pasahitza:
            <input type="password" name="pasahitza" required>
        </label>
        <br>

        <button type="submit">Sartu</button>
    </form>
</body>
</html>
