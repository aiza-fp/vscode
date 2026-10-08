<?php
class Router {
    public static function bideratu(): void {
        //if (isset($_GET['action']) && $_GET['action'] === 'produktuak') {
        $ikasleakController = new IkasleakController();
        $ikasleakController->bistaratu();
        exit;
        //}
        //Ez bada beste inora bideratu, hasiera orria erakutsi
        require __DIR__ . '/views/ikasleak.php';
    }
}
?>
