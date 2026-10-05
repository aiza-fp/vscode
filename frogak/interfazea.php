<?php
// INTERFAZEAK:
interface Ordaingarria
{
    public function ordaindu(float $zenbatekoa): bool;
}
class Txartela implements Ordaingarria
{
    public function ordaindu(float $zenbatekoa): bool
    {
        echo "<br>$zenbatekoa € txartelarekin";
        return true;
    }
}
function eginOrdainketa(Ordaingarria $ordainketaModua, float $zenbatekoa): void
{
    $ordainketaModua->ordaindu($zenbatekoa);
}

$txartela = new Txartela();
$txartela->ordaindu(23.6);
eginOrdainketa($txartela, 25.50);

//KLASE ABSTRAKTUAK:
abstract class Animalia
{
    public function lo_egin(): string
    {
        return "Zzz";
    }
    abstract public function soinua(): string;
}
class Txakurra extends Animalia
{
    public function soinua(): string
    {
        return "Zaunka";
    }
}

$sanBernardo = new Txakurra();
echo "<br>" . $sanBernardo->lo_egin();
echo "<br>" . $sanBernardo->soinua();


//BIAK KONBINATUTA:
interface Mugikorra
{
    public function mugitu(): string;
}
abstract class Ibilgailua
{
    public function gelditu(): string
    {
        return "Geldituta";
    }
}
class Bizikleta extends Ibilgailua implements Mugikorra
{
    public function mugitu(): string
    {
        return "Pedalei eragin";
    }
}

$bizikletaOrbea = new Bizikleta();
echo "<br>" . $bizikletaOrbea->mugitu();
echo "<br>" . $bizikletaOrbea->gelditu();
?>