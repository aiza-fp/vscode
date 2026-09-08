<?php

    if (isset($_POST['sagarra'])) {
        echo "Aukeratu duzu: " . htmlspecialchars($_POST['sagarra']) . "<br>";
    }
    if (isset($_POST['laranja'])) {
        echo "Aukeratu duzu: " . htmlspecialchars($_POST['laranja']) . "<br>";
    }
    if (isset($_POST['bananak'])) {
        echo "Aukeratu duzu: " . htmlspecialchars($_POST['bananak']) . "<br>";
    }
    
    // Inork hautatu ez badu:
    if (!isset($_POST['sagarra']) && !isset($_POST['laranja']) && !isset($_POST['bananak'])) {
        echo "Ez duzu ezer aukeratu.";
    }

?>