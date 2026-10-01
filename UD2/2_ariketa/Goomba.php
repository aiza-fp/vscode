<?php

class Goomba extends Etsaia{
    
    private int $azkartasuna = 0;
    
    public function getAzkartasuna()
    {
        return $this->azkartasuna;
    }

    public function setAzkartasuna($azkartasuna)
    {
        $this->azkartasuna = $azkartasuna;
    }

    public function mugitu(): string{
        return "Goomba mugitu da.";
    }
    public function erasoEgin(): int{
        return $this->getAzkartasuna() + $this->getBoterea();
    }
}
?>