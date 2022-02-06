<?php

abstract class ClaseAbstracta
{
    // El método abstracto sólo necesita definir los parámetros requeridos
    abstract protected function Prefijo($nombre);

}

class ClasePrueba extends ClaseAbstracta
{

    // La clase derivada puede definir parámetros opcionales que no estén en la estructura inicial
    public function Prefijo($nombre, $punto = ".") {
        if ($nombre == "Juan") {
            $prefijo = "Señor";
        } elseif ($nombre == "Sofia") {
            $prefijo = "Señora";
        } else {
            $prefijo = "";
        }
        return "{$prefijo}{$punto} {$nombre}";
    }
}

$class = new ClasePrueba();
echo $class->prefijo("Juan");
echo "<br>";
echo $class->prefijo("Sofia");
echo "<br>";
echo 'Abstraccion';
?>