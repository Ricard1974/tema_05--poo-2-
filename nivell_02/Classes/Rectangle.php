<?php


require_once('FormaGeometrica.php');


class Rectangle extends FormaGeometrica
{

    private $costat1;
    private $costat2;

    public function __construct($costat1,$costat2)
    {
        $this->costat1 = $costat1;
        $this->costat2 = $costat2;
    }

    public function calcularelArea()
    {
        return $this->costat1 * $this->costat2;
    }
}

?>