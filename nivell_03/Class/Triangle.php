<?php

class Triangle extends Forma // clase fill que hereda area()
{
    public function area(){

        echo '<br/>';
        echo 'Amb una base de '.$this->amplada.' y una alçada de '.$this->alcada;
        echo '<br/>';
        return ($this->amplada * $this-> alcada)/2;
    }
}

?>