<?php
include ("Pertsonaia.php");
include ("Salto.php");
class Mario extends Pertsonaia implements Salto{
    
    private $gaitasunBerezia = "Tamaina handitu";

    public function getGaitasunBerezia()
    {
        return $this->gaitasunBerezia;
    }

    public function setGaitasunBerezia($gaitasunBerezia)
    {
        $this->gaitasunBerezia = $gaitasunBerezia;
    }

    public function mugitu(): string{
        return "Mario mugitu da.";
    }

    public function erasoEgin(): int{
        return $this->getIndarra();
    }

    public function saltoEgin(): int{
        return $this->getIndarra() * $this->getArintasuna();
    }
}
?>