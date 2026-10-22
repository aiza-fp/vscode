<?php
class IrakasgaiakController {
    public function bistaratu(int $id_ikaslea): void {
        try {
            $irakasgaiak = Irakasgaia::guztiak($id_ikaslea);
        } catch (Exception $e) {
            echo "Errorea gertatu da: " . $e->getMessage();
            $irakasgaiak = [];
        }
        require __DIR__ . '/../views/irakasgaiak.php';
    }
    public function ezabatu(int $id_ikaslea, int $id_irakasgaia): void {
        try {
            Irakasgaia::ezabatu($id_irakasgaia);
            $this->bistaratu($id_ikaslea);
        } catch (Exception $e) {
            echo "Errorea gertatu da: " . $e->getMessage();
        }        
    }
    public function eguneratu(int $id_ikaslea, int $id_irakasgaia, string $irakasgaia): void {
        try {
            Irakasgaia::eguneratu($id_irakasgaia, $irakasgaia);
            $this->bistaratu($id_ikaslea);
        } catch (Exception $e) {
            echo "Errorea gertatu da: " . $e->getMessage();
        }        
    }
    public function sortu(int $id_ikaslea, string $irakasgaia): void {
        try {
            Irakasgaia::sortu($id_ikaslea, $irakasgaia);
            $this->bistaratu($id_ikaslea);
        } catch (Exception $e) {
            echo "Errorea gertatu da: " . $e->getMessage();
        }        
    }
    public function update_form(int $id_irakasgaia): void {
        try {
            $irakasgaia = Irakasgaia::bakarra($id_irakasgaia);
        } catch (Exception $e) {
            echo "Errorea gertatu da: " . $e->getMessage();
        }
        require __DIR__ . '/../views/update_irakasgaia_form.php';
    }
    public function create_form(int $id_ikaslea): void {
        require __DIR__ . '/../views/create_irakasgaia_form.php';
    }
}
?>
