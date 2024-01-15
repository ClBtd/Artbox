<?php
    require 'bdd.php';
    require 'elements/header.php';

    $worksStatement = connect('artbox')->prepare('SELECT * FROM artbox');
    $worksStatement->execute();
    $works = $worksStatement->fetchAll();
?>

    <main>
        <div id="liste-oeuvres">
            <?php foreach ($works as $work) : ?>
                <article class="oeuvre">
                    <a href="oeuvre.php?id=<?=$work['work_id']?>.php">
                        <img src=<?=$work['image']?> alt=<?=$work['work_title']?>>
                        <h2><?=$work['work_title']?></h2>
                        <p class="description"><?=$work['painter']?></p>
                    </a>
                </article>
            <?php endforeach; ?>
        </div>
    </main>

<?php
    require 'elements/footer.php';
?>