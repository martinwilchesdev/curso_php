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
};

// arreglos
$languages = ['JavaScript', 'PHP'];
$languages[] = 'Ruby'; // añadir elementos al array

// arreglos asociativos
$datos = [
    'nombre' => 'Martin',
    'apellido' => 'Wilches',
    'edad' => 31
];
?>

<img src="<?= LOGO_URL ?>" alt="PHP LOGO" width="200">

<ul>
    <!-- plantilla utilizada para la iteracion mediante el bucle foreach -->
<?php foreach($languages as $lang) : ?>
    <li><?= $lang ?></li>
<?php endforeach ?>
</ul>
