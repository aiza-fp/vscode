<?php
include("Mario.php");
include ("Luigi.php");
include("Koopa.php");
include ("Goomba.php");

echo "<br><br>MARIO:";
$marioObjetua = new Mario();
$marioObjetua->setIndarra(7);
$marioObjetua->setArintasuna(6);
echo "<br>" . $marioObjetua->mugitu();
echo "<br>" . $marioObjetua->erasoEgin();
echo "<br>" . $marioObjetua->saltoEgin();

echo "<br><br>LUIGI:";
$luigiObjetua = new Luigi();
$luigiObjetua->setIndarra(6);
$luigiObjetua->setArintasuna(8);
echo "<br>" . $luigiObjetua->mugitu();
echo "<br>" . $luigiObjetua->erasoEgin();
echo "<br>" . $luigiObjetua->saltoEgin();

echo "<br><br>KOOPA:";
$koopaObjetua = new Koopa();
$koopaObjetua->setIndarra(7);
$koopaObjetua->setArintasuna(6);
$koopaObjetua->setBoterea(3);
echo "<br>" . $koopaObjetua->mugitu();
echo "<br>" . $koopaObjetua->erasoEgin();

echo "<br><br>GOOMBA:";
$goombaObjetua = new Goomba();
$goombaObjetua->setIndarra(6);
$goombaObjetua->setArintasuna(8);
$goombaObjetua->setBoterea(4);
echo "<br>" . $goombaObjetua->mugitu();
echo "<br>" . $goombaObjetua->erasoEgin();

?>