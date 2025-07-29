<?php

// variables
$name = "Martin";
$age = 31;

// var_dump($name); // obtener el valor de la variable y el tipo de dato
// is_string($name); // retorna true si la variable es de tipo string
// echo gettype($name); // obtener el tipo de dato de una variable

// constantes globales
define('LOGO_URL', 'https://upload.wikimedia.org/wikipedia/commons/thumb/2/27/PHP-logo.svg/2560px-PHP-logo.svg.png');

// constantes locales
const NOMBRE = 'Martin';

// evalua un conjunto de condiciones y asigna un valor a una variable a partir del resultado obtenido
$output = match(true) {
    $age < 19 => 'Teeneger',
    default => 'Elder'
}
?>

<img src="<?= LOGO_URL ?>" alt="PHP LOGO" width="200" >
<h1>
    <?= "Hola Mundo" ?>
</h1>
