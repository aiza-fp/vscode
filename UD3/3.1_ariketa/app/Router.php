<?php
require_once __DIR__ . '/models/Ikaslea.php';
require_once __DIR__ . '/controllers/IkasleakController.php';

class Router {
    public static function bideratu(): void {
        if (isset($_GET['action']) && $_GET['action'] === 'eguneratuIkaslea'
        && isset($_GET['id']) && isset($_GET['izena']) && isset($_GET['email'])) {
            $ikasleakController = new IkasleakController();
            $ikasleakController->eguneratu($_GET['id'], $_GET['izena'], $_GET['email']);
            exit;
        }
        if (isset($_GET['action']) && $_GET['action'] === 'update_form'
        && isset($_GET['id'])) {
            $ikasleakController = new IkasleakController();
            $ikasleakController->update_form((int) $_GET['id']);
            exit;
        }
        if (isset($_GET['action']) && $_GET['action'] === 'ezabatu'
        && isset($_GET['id'])) {
            $ikasleakController = new IkasleakController();
            $ikasleakController->ezabatu((int) $_GET['id']);
            exit;
        }
        if (isset($_GET['action']) && $_GET['action'] === 'create_form') {
            $ikasleakController = new IkasleakController();
            $ikasleakController->create_form();
            exit;
        }
        if (isset($_GET['action']) && $_GET['action'] === 'sortuIkaslea'
        && isset($_GET['izena']) && isset($_GET['email'])) {
            $ikasleakController = new IkasleakController();
            $ikasleakController->sortu((string) $_GET['izena'],(string) $_GET['email']);
            exit;
        }
        //if (isset($_GET['action']) && $_GET['action'] === 'produktuak') {
        $ikasleakController = new IkasleakController();
        $ikasleakController->bistaratu();
        exit;
        //}
        //Ez bada beste inora bideratu, hasiera orria erakutsi
        //require __DIR__ . '/views/ikasleak.php';
    }
}

// Router.php zuzenean eskatzen bada (adib. "Aldatu"/"Ezabatu" estekak), bideratu
// hemendik bertatik. "public/index.php"-tik "require" bidez kargatzen bada,
// hark deituko dio berak "Router::bideratu()"-ri, beraz ez da hemen bikoiztuko.
//if (basename($_SERVER['SCRIPT_FILENAME']) === basename(__FILE__)) {
    Router::bideratu();
//}
?>
