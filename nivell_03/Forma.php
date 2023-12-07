
<?php

require('FormaInterface.php');

class Forma extends FormaInterface// seria  la clase pare y usa el contrato
{

    public $amplada; // tambe es poden posar en protected, private
    public $alcada;


    public function __construct($amplada, $alcada)
    {
        $this->amplada = $amplada;
        $this->alcada = $alcada;

    }

    public function area()
    {}
}

?>