<?php
require_once('Animal.php');

class Serp extends Animal
{
    public function __construct()
    {
        parent::__construct('Serp', 'PsssspPssssssss!');
    }
}

?>