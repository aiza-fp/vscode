<?php
include("IrudiGeometrikoa.php");
include ("Triangelua.php");

$irudia=new IrudiGeometrikoa();
$irudia->setIzena("A");
$irudia->setKolorea("urdina");
$irudia->idatzi();

$triangelua=new Triangelua();
$triangelua->setIzena("B");
$triangelua->setKolorea("berdea");
$triangelua->setAltuera(5);
$triangelua->setOinarria(3);
$triangelua->idatzi();
$triangelua->azaleraKalkulatu();
?>