<?php
require_once('Animal.php');

class Gat extends Animal
{
    public function __construct()
    {
        parent::__construct('Gat', 'Miauuu!');
    }
}

?>