<?php
    if (!empty($_POST['frutak'])) {
        foreach ($_POST['frutak'] as $fruta) {
            echo "Aukeratu duzu: " . htmlspecialchars($fruta) . "<br>";
        }
    } else {
        echo "Ez duzu ezer aukeratu.";
    }

?>


