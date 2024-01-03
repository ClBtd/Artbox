<?php
    require 'data.php';
    require 'elements/header.php';

    $oeuvre = NULL;

    foreach (OEUVRES as $oeuvres) {
        if ($oeuvres['id'] === (int)$_GET['id']) {
            $oeuvre = $oeuvres;
        }
    }
?>

<main>
    <article id="detail-oeuvre">
        <div id="img-oeuvre">
            <img src="<?=$oeuvre['image']?>" alt="<?=$oeuvre['titre']?>">
        </div>
        <div id="contenu-oeuvre">
            <h1><?=$oeuvre['titre']?></h1>
            <p class="description"><?=$oeuvre['artiste']?></p>
            <p class="description-complete"><?=$oeuvre['description']?></p>
        </div>
    </article>
</main>

<?php
    require 'elements/footer.php';
?>