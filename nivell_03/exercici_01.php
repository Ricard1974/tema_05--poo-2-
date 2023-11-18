<?php

interface FormaInterface { // crea el contrato 
    public function area();
}

class Forma implements FormaInterface// seria  la clase pare y usa el contrato
{

    public $amplada; // tambe es poden posar en protected, private
    public $alcada;
    public $texte;


    public function __construct($amplada, $alcada, $texte)
    {
        $this->amplada = $amplada;
        $this->alcada = $alcada;
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
        echo 'Amb una base de '.$this->amplada.' y una alçada de '.$this->alcada;
        echo '<br/>';
        echo $this->texte.'<br/>';

        return $this->amplada * $this-> alcada;
    }
}
class Triangle extends Forma // clase fill que hereda area()
{
    public function area(){

        echo '<br/>';
        echo 'Amb una base de '.$this->amplada.' y una alçada de '.$this->alcada;
        echo '<br/>';
        echo $this->texte.'<br/>';
        return ($this->amplada * $this-> alcada)/2;
    }
}


class Cercle extends Forma // clase fill que hereda area()
{

    private $radio;

    public function __construct($radio)
    {
        $this->radio = $radio;
    }

    public function area():float{

        echo '<br/>';

        $elarea= pi() * pow($this->radio, 2);
        echo 'El radio es '.$this->radio.'<br/>';

        return (float) number_format($elarea, 2); // en cas que surti de resultat un int es poasa float i tractara el nuero integre amb decimals
        // return number_format(pi() * pow($this->radio, 2), 2);

    }
}


$rectangle= new Rectangle(2,2,'hola que tal');
echo '<br/>';
echo 'El area del rectangle es de '.$rectangle->area();


$triangle= new Triangle(5,4,'ya ves'); // amplada , alcada i missatge
echo '<br/>';
echo 'El area del triangle es de '.$triangle->area();

$cercle= new Cercle(5);
echo '<br/>';
echo 'El area del cercle es de '.$cercle->area();