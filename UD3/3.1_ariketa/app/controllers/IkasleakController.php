<?php
class IkasleakController {
    public function bistaratu(): void {
        try {
            $ikasleak = Ikaslea::guztiak();
        } catch (Exception $e) {
            echo "Errorea gertatu da: " . $e->getMessage();
            $ikasleak = [];
        }
        require __DIR__ . '/../views/ikasleak.php';
    }
    public function ezabatu(int $id): void {
        try {
            Ikaslea::ezabatu($id);
            $this->bistaratu();
        } catch (Exception $e) {
            echo "Errorea gertatu da: " . $e->getMessage();
        }        
    }
    public function eguneratu(int $id, string $izena, string $email): void {
        try {
            Ikaslea::eguneratu($id, $izena, $email);
            $this->bistaratu();
        } catch (Exception $e) {
            echo "Errorea gertatu da: " . $e->getMessage();
        }        
    }
    public function sortu(string $izena, string $email): void {
        try {
            Ikaslea::sortu($izena, $email);
            $this->bistaratu();
        } catch (Exception $e) {
            echo "Errorea gertatu da: " . $e->getMessage();
        }        
    }
    public function update_form(int $id): void {
        try {
            $ikaslea = Ikaslea::bakarra($id);
        } catch (Exception $e) {
            echo "Errorea gertatu da: " . $e->getMessage();
        }
        require __DIR__ . '/../views/update_ikaslea_form.php';
    }
    public function create_form(): void {
        require __DIR__ . '/../views/create_ikaslea_form.php';
    }
}
?>
