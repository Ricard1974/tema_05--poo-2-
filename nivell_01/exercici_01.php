Exercici 1
Necessitem crear un tipus de dades que representi un animal. 
Els animals tenen un nom, ara bé, no és el mateix el so de la “parla” d’un gos, 
que el d’un gat. Per tant, necessitem crear altres tipus de dades que ens ajudin 
a programar aquests comportaments. Bàsicament, volem un mètode getSoAnimal() que 
mostri un missatge diferent si es tracta d’un gos (per exemple,“Bup, bup!”) o un 
gat (per exemple “Meu!”).


<?php


abstract class Animal
{
    protected $claseAnimal;
    protected $so;

    public function __construct($claseAnimal, $so)
    {
        $this->claseAnimal = $claseAnimal;
        $this->so = $so;
    }

    public function getSoAnimal()
    {
        return $this->so;
    }

    public function getClaseAnimal()
    {
        return $this->claseAnimal;
    }
}

class Gos extends Animal
{
    public function __construct()
    {
        parent::__construct('Gos', 'BupBup!');
    }
}

class Gat extends Animal
{
    public function __construct()
    {
        parent::__construct('Gat', 'Miauuu!');
    }
}

class Serp extends Animal
{
    public function __construct()
    {
        parent::__construct('Serp', 'PsssspPssssssss!');
    }
}


$gos = new Gos();
echo "Clase d'animal: " . $gos->getClaseAnimal() . "<br>";
echo "So d´quest animal: " . $gos->getSoAnimal() . "<br>";

$gat = new Gat();
echo "Clase d'animal: " . $gat->getClaseAnimal() . "<br>";
echo "So d´quest animal: " . $gat->getSoAnimal() . "<br>";

$serp= new Serp();
echo $serp->getClaseAnimal().' '.$serp->getSoAnimal();



?>