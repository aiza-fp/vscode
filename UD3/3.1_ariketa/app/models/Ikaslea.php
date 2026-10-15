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

    public static function bakarra(int $id): array {
        $mysqli = new mysqli("localhost", "root", "", "3-1ariketa");
        if ($mysqli->connect_errno) {
            throw new Exception("Akatsa MySQL konexioan: (" . $mysqli->connect_errno . ") " . $mysqli->connect_error);
        }

        /* Prestatu gaberko sententzia */
        $emaitza = $mysqli->query("SELECT id, izena, email FROM ikasleak WHERE id=".$id);
        if ($emaitza === false) {
            $errorea = $mysqli->error;
            $mysqli->close();
            throw new Exception("Akatsa kontsultan: " . $errorea);
        }

        $ikaslea = $emaitza->fetch_assoc();
        $mysqli->close();
        return $ikaslea;        
    }
    public static function ezabatu(int $id): void {
        $mysqli = new mysqli("localhost", "root", "", "3-1ariketa");
        if ($mysqli->connect_errno) {
            throw new Exception("Akatsa MySQL konexioan: (" . $mysqli->connect_errno . ") " . $mysqli->connect_error);
        }
        
        /* Prestatutako sententzia, 1 fasea: prestaketa */
        if (!($sententzia = $mysqli->prepare("DELETE FROM ikasleak WHERE id=?"))) {
            throw new Exception("Prestaketa gaizki atera da: (" . $mysqli->errno . ") " . $mysqli->error);
        }
        
        /* Prestatutako sententzia, 2 fasea: estekatzea y exekuzioa */
        if (!$sententzia->bind_param("i", $id)) {
            throw new Exception("Parametroen estekatzea gaizki atera da: (" . $sententzia->errno . ") " . $sententzia->error);
        }
        
        if (!$sententzia->execute()) {
            throw new Exception("Akatsa exekuzioan: (" . $sententzia->errno . ") " . $sententzia->error);
        }
        
        /* gomendagarria da itxiera esplizitua egitea */
        $sententzia->close();
        /* Prestatu gabeko sentetzia */
        //     $emaitza = $mysqli->query("SELECT * FROM test");
        //     var_dump($emaitza->fetch_all());
        //  header("Location: select_test.php");
    }
    public static function eguneratu(int $id, string $izena, string $email): void {
        $mysqli = new mysqli("localhost", "root", "", "3-1ariketa");
        if ($mysqli->connect_errno) {
            throw new Exception("Akatsa MySQL konexioan: (" . $mysqli->connect_errno . ") " . $mysqli->connect_error);
        }
        
        /* Prestatutako sententzia, 1 fasea: prestaketa */
        if (!($sententzia = $mysqli->prepare("UPDATE ikasleak SET izena=?, email=? WHERE id=?"))) {
            throw new Exception("Prestaketa gaizki atera da: (" . $mysqli->errno . ") " . $mysqli->error);
        }
        
        /* Prestatutako sententzia, 2 fasea: estekatzea y exekuzioa */
        if (!$sententzia->bind_param("ssi", $izena, $email, $id)) {
            throw new Exception("Parametroen estekatzea gaizki atera da: (" . $sententzia->errno . ") " . $sententzia->error);
        }
        
        if (!$sententzia->execute()) {
            throw new Exception("Akatsa exekuzioan: (" . $sententzia->errno . ") " . $sententzia->error);
        }
        
        /* gomendagarria da itxiera esplizitua egitea */
        $sententzia->close();
        /* Prestatu gabeko sentetzia */
        //     $emaitza = $mysqli->query("SELECT * FROM test");
        //     var_dump($emaitza->fetch_all());
        //  header("Location: select_test.php");
    }
    public static function sortu(string $izena, string $email): void {
        $mysqli = new mysqli("localhost", "root", "", "3-1ariketa");
        if ($mysqli->connect_errno) {
            throw new Exception("Akatsa MySQL konexioan: (" . $mysqli->connect_errno . ") " . $mysqli->connect_error);
        }
        
        /* Prestatutako sententzia, 1 fasea: prestaketa */
        if (!($sententzia = $mysqli->prepare("INSERT INTO ikasleak(izena,email) VALUES (?, ?)"))) {
            throw new Exception("Prestaketa gaizki atera da: (" . $mysqli->errno . ") " . $mysqli->error);
        }
        
        /* Prestatutako sententzia, 2 fasea: estekatzea y exekuzioa */
        if (!$sententzia->bind_param("ss", $izena, $email)) {
            throw new Exception("Parametroen estekatzea gaizki atera da: (" . $sententzia->errno . ") " . $sententzia->error);
        }
        
        if (!$sententzia->execute()) {
            throw new Exception("Akatsa exekuzioan: (" . $sententzia->errno . ") " . $sententzia->error);
        }
        
        /* gomendagarria da itxiera esplizitua egitea */
        $sententzia->close();
        /* Prestatu gabeko sentetzia */
        //     $emaitza = $mysqli->query("SELECT * FROM test");
        //     var_dump($emaitza->fetch_all());
        //  header("Location: select_test.php");
    }
}
?>