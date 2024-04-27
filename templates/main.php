<main>
    <section>
        <h1>Próxima película</h1>
        <img src="<?= $poster_url ?>" width="300" poster de la próxima película"/>

        <p><?= $title; ?> - <?= $untilMessage ?></p>

        <p>Se estrena el: <?= $release_date; ?></p>
    </section>

    <section>
        <h1>Siguiente película: <?= $following_production?></h1>
    </section>
</main>