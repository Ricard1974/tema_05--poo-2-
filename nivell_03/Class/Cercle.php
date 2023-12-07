<?php

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


?>