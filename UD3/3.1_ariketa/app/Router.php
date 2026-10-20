<?php
require_once __DIR__ . '/models/Ikaslea.php';
require_once __DIR__ . '/controllers/IkasleakController.php';

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
