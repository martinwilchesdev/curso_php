<?php
const API_URL = 'https://whenisthenextmcufilm.com/api';
# inicializar nueva sesion de cURL; ch cURL handle
$ch = curl_init(API_URL);

// recibir el resultado de la peticion y no mostrarlo en pantalla
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

// ejecutar la peticion y guardar el resultado
$result = curl_exec($ch);

// $result = file_get_contents(API_URL); // peticion GET a una API

$data = json_decode($result, true);
curl_close($ch);

// var_dump($data);
?>

<head>
    <title>La próxima pelicula de Marvel</title>
    <link
        rel="stylesheet"
        href="https://cdn.jsdelivr.net/npm/@picocss/pico@2/css/pico.classless.min.css">
</head>

<main>
    <section>
        <img src="<?= $data['poster_url'] ?>" alt="<?= $data['title'] ?>" width="300" style="border-radius: 16px;">
    </section>

    <hgroup>
        <h2><?= $data['title'] ?> se estrena en <?= $data['days_until'] ?> días!</h2>
        <p>Fecha de estreno: <?= $data['release_date'] ?></p>
        <p>La siguiente es <?= $data['following_production']['title'] ?></p>
    </hgroup>
</main>

<style>
    :root {
        color-scheme: light dark;
    }

    body {
        display: grid;
        place-content: center;
    }
</style>
