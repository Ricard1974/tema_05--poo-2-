<?php

include_once('Classes/Gos.php');
include_once('Classes/Gat.php');
include_once('Classes/Serp.php');

$gos = new Gos();
echo "Clase d'animal: " . $gos->getClaseAnimal() . "<br>";
echo "So d´quest animal: " . $gos->getSoAnimal() . "<br>";

$gat = new Gat();
echo "Clase d'animal: " . $gat->getClaseAnimal() . "<br>";
echo "So d´quest animal: " . $gat->getSoAnimal() . "<br>";

$serp= new Serp();
echo $serp->getClaseAnimal().' '.$serp->getSoAnimal();

