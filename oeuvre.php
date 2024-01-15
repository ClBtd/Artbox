<?php
    require 'bdd.php';
    require 'elements/header.php';

    if (!isset($_GET['id']))  {
        echo 'Aucune oeuvre sélectionnée';
        die;
    }
    
    $work_id = (int)htmlspecialchars($_GET['id']);
    
    $workStatement = connect('artbox')->prepare('SELECT * FROM artbox WHERE work_id = :work_id');
    $workStatement -> execute([
            'work_id' => $work_id
    
        ]);
    $work = $workStatement -> fetch();
?>

<main>
    <article id="detail-oeuvre">
        <div id="img-oeuvre">
            <img src="<?=$work['image']?>" alt="<?=$work['work_title']?>">
        </div>
        <div id="contenu-oeuvre">
            <h1><?=$work['work_title']?></h1>
            <p class="description"><?=$work['painter']?></p>
            <p class="description-complete"><?=$work['description']?></p>
        </div>
    </article>
</main>

<?php
    require 'elements/footer.php';
?>