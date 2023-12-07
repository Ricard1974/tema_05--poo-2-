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

?>