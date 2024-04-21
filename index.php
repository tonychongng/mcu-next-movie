<?php

require 'functions.php';
const API_URL = "https://whenisthenextmcufilm.com/api";

$data = get_data(API_URL);
$untilMessage = get_until_message($data["days_until"]);

?>

<head>
    <meta charset="UTF-8"/>
    <title>La próxima película de Marvel</title>
    <meta name="description" content="Página que muestra la próxima película de Marvel"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
</head>

<main>
    <section>
        <h1>Próxima película</h1>
        <img src="<?= $data["poster_url"] ?>" width="300" poster de la próxima película"/>

        <p><?= $data["title"];?> - <?= $untilMessage ?></p>

        <p>Se estrena el: <?= $data["release_date"] ?></p>
    </section>

    <section>
        <h1>Siguiente película: <?= $data["following_production"]["title"]?></h1>
    </section>
</main>

<style>
    :root {
        color-scheme: dark;
    }

    img {
        border-radius: 15px;
        margin: auto 0;
    }

    body {
        display: flex;
        justify-content: center;
    }

    section {
        text-align: center;
    }
</style>
