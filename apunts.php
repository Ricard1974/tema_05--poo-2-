Las interfaces de objetos son contratos que han de cumplir las clases que las implementan. Contienen métodos vacíos que obligan a una clase a emplearlos, promoviendo así un estándar de desarrollo.



<?php

namespace MiNamespace;

// use OtroNamespace\OtraClase; ejemplo de namespace

// $instancia = new OtraClase();   




const MI_CONSTANTE = 'valor'; // Constante en mayúsculas y con guiones bajos

class MiClase {
    public function miMetodo() {
        // Implementación del método en camelCase
    }
}

trait MiTrait {
    // Implementación de un trait en PascalCase
}

function miFuncion() {
    // Implementación de una función en camelCase
}

// Debe haber una línea en blanco al final del archivo
?>

<?php


abstract class Shape {
    abstract public function calculateArea();
}

class Circle extends Shape {
    private $radius;

    public function __construct($radius) {
        $this->radius = $radius;
    }

    public function calculateArea() {
        return pi() * $this->radius * $this->radius;
    }
}

class Square extends Shape {
    private $side;

    public function __construct($side) {
        $this->side = $side;
    }

    public function calculateArea() {
        return $this->side * $this->side;
    }
}

// Uso de las clases
$circle = new Circle(5);
echo "Área del círculo: " . $circle->calculateArea() . "<br>"; // Imprime el área del círculo

$square = new Square(4);
echo "Área del cuadrado: " . $square->calculateArea() . "<br>"; // Imprime el área del cuadrado
