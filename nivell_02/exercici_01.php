<?php

interface FormaInterface { // crea el contrato 
    public function area();
}

class Forma implements FormaInterface// seria  la clase pare y usa el contrato
{

    public $amplada; // tambe es poden posar en protected, private
    public $alçada;
    public $texte;


    public function __construct($amplada, $alçada, $texte)
    {
        $this->amplada = $amplada;
        $this->alçada = $alçada;
        $this->texte=$texte;

    }

    public function area()
    {
        // return  0; // retorna res ja que calcularem el area de cada forma en la extensio de clase
    }
}

class Rectangle extends Forma  // la clase fill hereda (area), obligado a usar el contrato heredado de Forma
{
    public function area(){
        echo '<br/>';
        echo 'Amb una base de '.$this->amplada.' y una alçada de '.$this->alçada;
        echo '<br/>';
        echo $this->texte.'<br/>';

        return $this->amplada * $this-> alçada;
    }
}
class Triangle extends Forma // clase fill que hereda area()
{
    public function area(){

        echo '<br/>';
        echo 'Amb una base de '.$this->amplada.' y una alçada de '.$this->alçada;
        echo '<br/>';
        echo $this->texte.'<br/>';
        return ($this->amplada * $this-> alçada)/2;
    }
}


$rectangle= new Rectangle(2,2,'');
echo '<br/>';
echo 'El area del rectangle es de '.$rectangle->area();


$triangle= new Triangle(5,4,''); // amplada , alçada i missatge
echo '<br/>';
echo 'El area del triangle es de '.$triangle->area();