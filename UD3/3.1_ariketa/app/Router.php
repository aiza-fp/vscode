<?php
require_once __DIR__ . '/models/Ikaslea.php';
require_once __DIR__ . '/controllers/IkasleakController.php';
require_once __DIR__ . '/models/Irakasgaia.php';
require_once __DIR__ . '/controllers/IrakasgaiakController.php';

class Router {
    public static function bideratu(): void {
        if (isset($_GET['action']) && $_GET['action'] === 'eguneratu_ikaslea'
        && isset($_GET['id']) && isset($_GET['izena']) && isset($_GET['email'])) {
            $ikasleakController = new IkasleakController();
            $ikasleakController->eguneratu($_GET['id'], $_GET['izena'], $_GET['email']);
            exit;
        }
        if (isset($_GET['action']) && $_GET['action'] === 'update_form_ikaslea'
        && isset($_GET['id'])) {
            $ikasleakController = new IkasleakController();
            $ikasleakController->update_form((int) $_GET['id']);
            exit;
        }
        if (isset($_GET['action']) && $_GET['action'] === 'ezabatu_ikaslea'
        && isset($_GET['id'])) {
            $ikasleakController = new IkasleakController();
            $ikasleakController->ezabatu((int) $_GET['id']);
            exit;
        }
        if (isset($_GET['action']) && $_GET['action'] === 'create_form_ikaslea') {
            $ikasleakController = new IkasleakController();
            $ikasleakController->create_form();
            exit;
        }
        if (isset($_GET['action']) && $_GET['action'] === 'sortu_ikaslea'
        && isset($_GET['izena']) && isset($_GET['email'])) {
            $ikasleakController = new IkasleakController();
            $ikasleakController->sortu((string) $_GET['izena'],(string) $_GET['email']);
            exit;
        }

        if (isset($_GET['action']) && $_GET['action'] === 'eguneratu_irakasgaia'
        && isset($_GET['id_irakasgaia']) && isset($_GET['id_ikaslea']) && isset($_GET['irakasgaia']) ) {
            $irakasgaiakController = new IrakasgaiakController();
            $irakasgaiakController->eguneratu($_GET['id_ikaslea'], $_GET['id_irakasgaia'], $_GET['irakasgaia']);
            exit;
        }
        if (isset($_GET['action']) && $_GET['action'] === 'update_form_irakasgaia'
        &&isset($_GET['id_irakasgaia'])) {
            $irakasgaiakController = new IrakasgaiakController();
            $irakasgaiakController->update_form((int) $_GET['id_irakasgaia']);
            exit;
        }
        if (isset($_GET['action']) && $_GET['action'] === 'ezabatu_irakasgaia'
        && isset($_GET['id_ikaslea']) && isset($_GET['id_irakasgaia'])) {
            $irakasgaiakController = new IrakasgaiakController();
            $irakasgaiakController->ezabatu((int) $_GET['id_ikaslea'], (int) $_GET['id_irakasgaia']);
            exit;
        }
        if (isset($_GET['action']) && $_GET['action'] === 'create_form_irakasgaia'
        && isset($_GET['id_ikaslea'])) {
            $irakasgaiakController = new IrakasgaiakController();
            $irakasgaiakController->create_form((int) $_GET['id_ikaslea']);
            exit;
        }
        if (isset($_GET['action']) && $_GET['action'] === 'sortu_irakasgaia'
        && isset($_GET['irakasgaia']) && isset($_GET['id_ikaslea'])) { //ikaslearen id-a behar dugu
            $irakasgaiakController = new IrakasgaiakController();
            $irakasgaiakController->sortu((int) $_GET['id_ikaslea'],(string) $_GET['irakasgaia']);
            exit;
        }

        if (isset($_GET['action']) && $_GET['action'] === 'bistaratu_irakasgaiak'
        && isset($_GET['id_ikaslea'])) {
            $irakasgaiakController = new IrakasgaiakController();
            $irakasgaiakController->bistaratu((int) $_GET['id_ikaslea']);
            exit;
        }

        $ikasleakController = new IkasleakController();
        $ikasleakController->bistaratu();
        exit;
    }
}

// Estekak eta formularioak orain "public/index.php"-ra bideratzen dira
// (adib. "index.php?action=update_form&id=..."), eta hark "require" bidez
// kargatzen du fitxategi hau, beraz hemen deitzea nahikoa da.
Router::bideratu();
?>
