<?php
require_once('FormaGeometrica.php');

$rectangle = new Rectangle(10,5);
$triangle= new Triangle(3,5);

echo '<br/>El area del triangle es de '.$triangle->calcularelArea();
echo '<br/>El area del Cuadrat o rectangle es de '.$rectangle->calcularelArea();