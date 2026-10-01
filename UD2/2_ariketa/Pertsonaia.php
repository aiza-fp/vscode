<?php
abstract class Pertsonaia
{
    private String $izena;
    private int $biziPuntuak;
    private int $indarra = 0;
    private int $arintasuna = 0;
    
    public function getIzena()
    {
        return $this->izena;
    }


    public function getBiziPuntuak()
    {
        return $this->biziPuntuak;
    }


    public function getIndarra()
    {
        return $this->indarra;
    }

    public function getArintasuna()
    {
        return $this->arintasuna;
    }

    public function setIzena($izena)
    {
        $this->izena = $izena;
    }


    public function setBiziPuntuak($biziPuntuak)
    {
        $this->biziPuntuak = $biziPuntuak;
    }


    public function setIndarra($indarra)
    {
        $this->indarra = $indarra;
    }

    public function setArintasuna($arintasuna)
    {
        $this->arintasuna = $arintasuna;
    }

    public function minaJaso(int $mina): void
    {
        if($this->getBiziPuntuak() - $mina < 0){
            $this->setBiziPuntuak(0);
        }else{
            $this->setBiziPuntuak($this->getBiziPuntuak() - $mina);
        }
    }
    abstract public function mugitu(): string;
    abstract public function erasoEgin(): int;
}




?>