<?php
require_once __DIR__ . '/../models/Produktua.php';
class ProduktuakController {
    public function index(): void {
        $produktuak = Produktua::guztiak();
        require __DIR__ . '/../views/produktuak.php';
    }
}
$produktuakKontrolatzailea = new ProduktuakController();
$produktuakKontrolatzailea->index();
?>
