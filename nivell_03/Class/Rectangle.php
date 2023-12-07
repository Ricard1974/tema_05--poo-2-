<?php

require_once('Forma.php');


class Rectangle extends Forma  // la clase fill hereda (area), obligado a usar el contrato heredado de Forma
{
    public function area(){
        echo '<br/>';
        echo 'Amb una base de '.$this->amplada.' y una alçada de '.$this->alcada;
        echo '<br/>';
        return $this->amplada * $this-> alcada;
    }
}