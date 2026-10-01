<?php

class Triangelua extends IrudiGeometrikoa{
    
    private $altuera;
    private $oinarria;
    
    function __construct() {}

    public function getAltuera()
    {
        return $this->altuera;
    }


    public function getOinarria()
    {
        return $this->oinarria;
    }


    public function setAltuera($altuera)
    {
        $this->altuera = $altuera;
    }


    public function setOinarria($oinarria)
    {
        $this->oinarria = $oinarria;
    }

    
  
    public function idatzi() {
        parent::idatzi();
        echo "Altuera: " . $this->altuera;
        echo"<br>";
        echo "Oinarria: " . $this->oinarria;
        echo"<br>";
    }
    public function azaleraKalkulatu(){
        echo"AZALERA: ".($this->oinarria * $this->altuera)/2;
    }
    
    
}