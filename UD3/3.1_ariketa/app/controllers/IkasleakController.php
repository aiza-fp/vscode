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
}
?>
