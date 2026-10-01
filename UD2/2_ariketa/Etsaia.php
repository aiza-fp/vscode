<?php
abstract class Etsaia extends Pertsonaia
{

    private int $boterea = 0;
    
    public function getBoterea()
    {
        return $this->boterea;
    }

    public function setBoterea($boterea)
    {
        $this->boterea = $boterea;
    }

    abstract public function mugitu(): string;
    abstract public function erasoEgin(): int;
}




?>