<?php

require_once('FormaGeometrica.php');

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
        return ($this->costat * $this->alçada) / 2;
    }
}

?>