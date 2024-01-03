<?php
    require 'data.php';
    require 'elements/header.php';
?>

    <main>
        <div id="liste-oeuvres">
            <?php foreach (OEUVRES as $oeuvres) : ?>
                <article class="oeuvre">
                    <a href="oeuvre.php?id=<?=$oeuvres['id']?>.php">
                        <img src=<?=$oeuvres['image']?> alt=<?=$oeuvres['titre']?>>
                        <h2><?=$oeuvres['titre']?></h2>
                        <p class="description"><?=$oeuvres['artiste']?></p>
                    </a>
                </article>
            <?php endforeach; ?>
        </div>
    </main>

<?php
    require 'elements/footer.php';
?>