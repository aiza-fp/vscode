<?php
class ProduktuakController {
    public function index(): void {
        $produktuak = Produktua::guztiak();
        require __DIR__ . '/../views/produktuak.php';
    }
}
?>
