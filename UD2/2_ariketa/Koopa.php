<?php
include ("Etsaia.php");

class Koopa extends Etsaia{
    
    private bool $oskolBerdeaDa = false;
    
    public function getOskolBerdeaDa()
    {
        return $this->oskolBerdeaDa;
    }

    public function setOskolBerdeaDa($oskolBerdeaDa)
    {
        $this->oskolBerdeaDa = $oskolBerdeaDa;
    }

    public function mugitu(): string{
        return "Koopa mugitu da.";
    }
    public function erasoEgin(): int{
        $eragindakoMina = $this->getArintasuna();
        if($this->getOskolBerdeaDa()){
            $eragindakoMina = $this->getArintasuna() * 2;
        }
        return $eragindakoMina;        
    }
}
?>