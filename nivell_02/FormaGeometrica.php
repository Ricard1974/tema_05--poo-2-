<?php


abstract class FormaGeometrica
{
    abstract public function calcularelArea(); // metodo abstracto de calcular el Arra
}

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


class Triangle extends FormaGeometrica
{

    private $costat;
    private $alçada;

    public function __construct($costat, $alçada)
    {
        $this->costat = $costat;
        $this->alçada = $alçada;
    }

    public function calcularelArea()
    {
        return $this->costat * $this->alçada / 2;
    }
}
