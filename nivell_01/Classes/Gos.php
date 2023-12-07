<?php

require_once('Animal.php');
class Gos extends Animal
{
    public function __construct()
    {
        parent::__construct('Gos', 'BupBup!');
    }
}
?>