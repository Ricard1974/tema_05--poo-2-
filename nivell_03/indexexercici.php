<?php

require_once('Rectangle.php');
// require_once('Triangle.php');
// require_once('Cercle.php');


$rectangle= new Rectangle(2,2);
echo '<br/>';
echo 'El area del rectangle es de '.$rectangle->area();

// $triangle= new Triangle(5,4); // amplada , alcada i missatge
// echo '<br/>';
// echo 'El area del triangle es de '.$triangle->area();

// $cercle= new Cercle(5);
// echo '<br/>';
// echo 'El area del cercle es de '.$cercle->area();

?>