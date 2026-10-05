<?php
interface Ordaingarria
{
    public function ordaindu(float $zenbatekoa): bool;
}
class Txartela implements Ordaingarria
{
    public function ordaindu(float $zenbatekoa): bool
    {
        echo "$zenbatekoa € txartelarekin";
        return true;
    }
}

?>