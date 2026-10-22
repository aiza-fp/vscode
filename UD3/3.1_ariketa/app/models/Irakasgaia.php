<?php
class Irakasgaia {
    public static function guztiak(int $id_ikaslea): array {
        $mysqli = new mysqli("localhost", "root", "", "3-1ariketa");
        if ($mysqli->connect_errno) {
            throw new Exception("Akatsa MySQL konexioan: (" . $mysqli->connect_errno . ") " . $mysqli->connect_error);
        }

        /* Prestatu gaberko sententzia */
        $emaitza = $mysqli->query("SELECT id, ikasle_id, irakasgaia FROM irakasgaiak WHERE ikasle_id=".$id_ikaslea);
        if ($emaitza === false) {
            $errorea = $mysqli->error;
            $mysqli->close();
            throw new Exception("Akatsa kontsultan: " . $errorea);
        }

        $irakasgaiak = $emaitza->fetch_all(MYSQLI_ASSOC);
        $mysqli->close();
        return $irakasgaiak;        
    }

    public static function bakarra(int $id_irakasgaia): array {
        $mysqli = new mysqli("localhost", "root", "", "3-1ariketa");
        if ($mysqli->connect_errno) {
            throw new Exception("Akatsa MySQL konexioan: (" . $mysqli->connect_errno . ") " . $mysqli->connect_error);
        }

        /* Prestatu gaberko sententzia */
        $emaitza = $mysqli->query("SELECT id, ikasle_id, irakasgaia FROM irakasgaiak WHERE id=".$id_irakasgaia);
        if ($emaitza === false) {
            $errorea = $mysqli->error;
            $mysqli->close();
            throw new Exception("Akatsa kontsultan: " . $errorea);
        }

        $irakasgaia = $emaitza->fetch_assoc();
        $mysqli->close();
        return $irakasgaia;        
    }
    public static function ezabatu(int $id_irakasgaia): void {
        $mysqli = new mysqli("localhost", "root", "", "3-1ariketa");
        if ($mysqli->connect_errno) {
            throw new Exception("Akatsa MySQL konexioan: (" . $mysqli->connect_errno . ") " . $mysqli->connect_error);
        }
        
        /* Prestatutako sententzia, 1 fasea: prestaketa */
        if (!($sententzia = $mysqli->prepare("DELETE FROM irakasgaiak WHERE id=?"))) {
            throw new Exception("Prestaketa gaizki atera da: (" . $mysqli->errno . ") " . $mysqli->error);
        }
        
        /* Prestatutako sententzia, 2 fasea: estekatzea y exekuzioa */
        if (!$sententzia->bind_param("i", $id_irakasgaia)) {
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
    public static function ezabatu_ikasle_baten_irakasgaiak(int $id_ikaslea): void {
        $mysqli = new mysqli("localhost", "root", "", "3-1ariketa");
        if ($mysqli->connect_errno) {
            throw new Exception("Akatsa MySQL konexioan: (" . $mysqli->connect_errno . ") " . $mysqli->connect_error);
        }
        
        /* Prestatutako sententzia, 1 fasea: prestaketa */
        if (!($sententzia = $mysqli->prepare("DELETE FROM irakasgaiak WHERE ikasle_id=?"))) {
            throw new Exception("Prestaketa gaizki atera da: (" . $mysqli->errno . ") " . $mysqli->error);
        }
        
        /* Prestatutako sententzia, 2 fasea: estekatzea y exekuzioa */
        if (!$sententzia->bind_param("i", $id_ikaslea)) {
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
    public static function eguneratu(int $id_irakasgaia, string $irakasgaia): void {
        $mysqli = new mysqli("localhost", "root", "", "3-1ariketa");
        if ($mysqli->connect_errno) {
            throw new Exception("Akatsa MySQL konexioan: (" . $mysqli->connect_errno . ") " . $mysqli->connect_error);
        }
        
        /* Prestatutako sententzia, 1 fasea: prestaketa */
        if (!($sententzia = $mysqli->prepare("UPDATE irakasgaiak SET irakasgaia=? WHERE id=?"))) {
            throw new Exception("Prestaketa gaizki atera da: (" . $mysqli->errno . ") " . $mysqli->error);
        }
        
        /* Prestatutako sententzia, 2 fasea: estekatzea y exekuzioa */
        if (!$sententzia->bind_param("si", $irakasgaia, $id_irakasgaia)) {
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
    public static function sortu(int $id_ikaslea, string $irakasgaia): void {
        $mysqli = new mysqli("localhost", "root", "", "3-1ariketa");
        if ($mysqli->connect_errno) {
            throw new Exception("Akatsa MySQL konexioan: (" . $mysqli->connect_errno . ") " . $mysqli->connect_error);
        }
        
        /* Prestatutako sententzia, 1 fasea: prestaketa */
        if (!($sententzia = $mysqli->prepare("INSERT INTO irakasgaiak(ikasle_id,irakasgaia) VALUES (?, ?)"))) {
            throw new Exception("Prestaketa gaizki atera da: (" . $mysqli->errno . ") " . $mysqli->error);
        }
        
        /* Prestatutako sententzia, 2 fasea: estekatzea y exekuzioa */
        if (!$sententzia->bind_param("is", $id_ikaslea, $irakasgaia)) {
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