<?php
const API_URL = "https://whenisthenextmcufilm.com/api";

$curl = curl_init();

curl_setopt_array($curl , array(
        CURLOPT_URL => API_URL,
        CURLOPT_RETURNTRANSFER => true,
        CURLOPT_SSL_VERIFYHOST => false,
        CURLOPT_SSL_VERIFYPEER => false,
));

$response = curl_exec($curl);

$data = json_decode($response, true);

$err = curl_error($curl);
if($err) {
    var_dump($err);
}else {
    curl_close($curl);
}
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

        <p><?= $data["title"] ?> se estrena en <?= $data["days_until"] ?> días</p>

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
        display: grid;
        place-content: center;
    }

    section {
        text-align: center;
    }
</style>
