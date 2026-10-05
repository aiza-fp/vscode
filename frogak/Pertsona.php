<?php

class Pertsona
{
    private String $izena;
    private String $abizena;
    private int $nota;
    
    function __construct($izena, $abizena, $nota) {
        // Eraikitzailea
        $this->izena = $izena;
        $this->abizena = $abizena;
        $this->nota = $nota;
    }

    public function getIzena()
    {
        return $this->izena;
    }


    public function getAbizena()
    {
        return $this->abizena;
    }


    public function getNota()
    {
        return $this->nota;
    }


    public function setIzena($izena)
    {
        $this->izena = $izena;
    }


    public function setAbizena($abizena)
    {
        $this->abizena = $abizena;
    }


    public function setNota($nota)
    {
        $this->nota = $nota;
    }

    
     
    public function idatzi_datuak() {
        echo '<br/><br/>Datuak idazten:<br/>';
        echo 'IZENA : '.$this->izena .' ABIZENA : '. $this->abizena.' NOTA : '. $this->nota;
    }
    
}

$ikasle = new pertsona("Jokin","Amuriza",10);
$ikasle->idatzi_datuak();
$ikasle->setIzena("Jon");
$ikasle->idatzi_datuak();
echo "<br><br>Ikaslearen izena: ".$ikasle->getIzena()."<br>";
var_dump($ikasle);