
<?php

require('FormaInterface.php');
class Forma implements FormaInterface// seria  la clase pare y usa el contrato
{

    public $amplada; // tambe es poden posar en protected, private
    public $alcada;


    public function __construct($amplada, $alcada)
    {
        $this->amplada = $amplada;
        $this->alcada = $alcada;

    }

    public function area()
    {
        // return  0; // retorna res ja que calcularem el area de cada forma en la extensio de clase
    }
}

?>