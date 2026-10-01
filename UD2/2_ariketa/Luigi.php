<?php

class Luigi extends Pertsonaia implements Salto{
    
    private $gaitasunBerezia = "Salto handia";
        public function getGaitasunBerezia()
    {
        return $this->gaitasunBerezia;
    }

    public function setGaitasunBerezia($gaitasunBerezia)
    {
        $this->gaitasunBerezia = $gaitasunBerezia;
    }

    public function mugitu(): string{
        return "Luigi mugitu da.";
    }

    public function erasoEgin(): int{
        return $this->getIndarra() + $this->getArintasuna();
    }

    public function saltoEgin(): int{
        return $this->getIndarra() * $this->getArintasuna();
    }
}
?>