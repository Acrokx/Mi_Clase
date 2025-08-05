<?php
// Tipos de variables en PHP

// 1. Variables Enteras (int)
$edad = 32;
$cantidad_productos = 100;
$anio_actual = 2025;

// 2. Variables de Punto Flotante (float / double)
$precio = 20.99;
$altura = 1.52;
$temperatura = -3.5;

// 3. Variables de Cadena (string)
$nombre = "Cristhian";
$apellido = "Enciso";
$mensaje = "Bienvenido al curso de PHP";

// 4. Variables Booleanas (bool)
$es_mayor_de_edad = true;
$tiene_descuento = false;
$activo = true;

// 5. Variables Arreglo (array)
$frutas = ["Manzana", "Mora", "Pera"];
$numeros = [1, 2, 3, 4, 5];
$mezcla = ["Texto", 99, 3.14, true];

// 6. Variables Objeto (object)
class Persona {
    public $nombre;
    public $edad;

    public function __construct($nombre, $edad) {
        $this->nombre = $nombre;
        $this->edad = $edad;
    }

    public function saludar() {
        return "Hola, soy $this->nombre y tengo $this->edad años.";
    }
}

$persona1 = new Persona("Juan", 20);
$persona2 = new Persona("María", 22);
$persona3 = new Persona("Carlos", 30);

// 7. Variables Nulas (null)
$variable_vacia = null;
$sin_definir = null;
$opcional = null;

// Imprimir variables
echo "<h2>Enteros:</h2>";
echo "$edad, $cantidad_productos, $anio_actual <br>";

echo "<h2>Flotantes:</h2>";
echo "$precio, $altura, $temperatura <br>";

echo "<h2>Cadenas:</h2>";
echo "$nombre $apellido, $mensaje <br>";

echo "<h2>Booleanos:</h2>";
echo "Es mayor de edad: " . ($es_mayor_de_edad ? "Sí" : "No") . "<br>";
echo "Tiene descuento: " . ($tiene_descuento ? "Sí" : "No") . "<br>";
echo "Activo: " . ($activo ? "Sí" : "No") . "<br>";

echo "<h2>Arreglos:</h2>";
print_r($frutas);
echo "<br>";
print_r($numeros);
echo "<br>";
print_r($mezcla);
echo "<br>";

echo "<h2>Objetos:</h2>";
echo $persona1->saludar() . "<br>";
echo $persona2->saludar() . "<br>";
echo $persona3->saludar() . "<br>";

echo "<h2>Nulos:</h2>";
var_dump($variable_vacia);
var_dump($sin_definir);
var_dump($opcional);
?>
