<?php require 'elements/header.php'; ?>

<form action="post_work.php" method="POST">
    <div class="champ-formulaire">
        <label for="work_title">Titre de l'œuvre</label>
        <input type="text" name="work_title" id="work_title">
    </div>
    <div class="champ-formulaire">
        <label for="painter">Auteur de l'œuvre</label>
        <input type="text" name="painter" id="painter">
    </div>
    <div class="champ-formulaire">
        <label for="image">URL de l'image</label>
        <input type="url" name="image" id="image">
    </div>
    <div class="champ-formulaire">
        <label for="description">Description</label>
        <textarea name="description" id="description"></textarea>
    </div>

    <input type="submit" value="Valider" name="submit">
</form>

<?php require 'elements/footer.php'; ?>