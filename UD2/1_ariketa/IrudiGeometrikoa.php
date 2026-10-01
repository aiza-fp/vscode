<?php
class IrudiGeometrikoa{
    
    private $izena;
    private $kolorea;
    

    function __construct() {
        
    }

    public function getKolorea()
    {
        return $this->kolorea;
    }

    public function setKolorea($kolorea)
    {
        $this->kolorea = $kolorea;
    }

    public function getIzena()
    {
        return $this->izena;
    }
    
    public function setIzena($izena)
    {
        $this->izena = $izena;
    }
    
    public function idatzi() {
        echo "Izena: " . $this->izena;
        echo "<br>";
        echo "Kolorea: " . $this->kolorea;
        echo "<br>";
    }
    
}