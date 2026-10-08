<?php
class Ikaslea {
    public static function guztiak(): array {
        $mysqli = new mysqli("localhost", "root", "", "3-1ariketa");
        if ($mysqli->connect_errno) {
            throw new Exception("Akatsa MySQL konexioan: (" . $mysqli->connect_errno . ") " . $mysqli->connect_error);
        }

        /* Prestatu gaberko sententzia */
        $emaitza = $mysqli->query("SELECT id, izena, email FROM ikasleak");
        if ($emaitza === false) {
            $errorea = $mysqli->error;
            $mysqli->close();
            throw new Exception("Akatsa kontsultan: " . $errorea);
        }

        $ikasleak = $emaitza->fetch_all(MYSQLI_ASSOC);
        $mysqli->close();
        return $ikasleak;
        
    }
}
?>