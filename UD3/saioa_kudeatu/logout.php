<?php
session_start();

if ($_SERVER["REQUEST_METHOD"] !== "POST") {
    header("Location: pribatua.php");
    exit;
}

// Saioaren aldagai guztiak hustu
$_SESSION = [];

// Zerbitzarian gordetako saioa suntsitu
session_destroy();

header("Location: login.php");
exit;
