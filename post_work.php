<?php

require ('elements/header.php');
require ('bdd.php');

if (empty($_POST['work_title']) 
|| empty($_POST['painter'])
|| empty($_POST['image'])
|| empty($_POST['description'])
|| strlen($_POST['description']) < 3
|| !filter_var($_POST['image'], FILTER_VALIDATE_URL))
{
    echo "<p>Le formulaire n'as pas été rempli correctement.</p>";
    die;
}

else {
    $work_title = htmlspecialchars($_POST['work_title']);
    $painter = htmlspecialchars($_POST['painter']);
    $image = htmlspecialchars($_POST['image']);
    $description = htmlspecialchars($_POST['description']);

    $addWork = connect('artbox') -> prepare('INSERT INTO artbox (image, work_title, painter, description) VALUES (:image, :work_title, :painter, :description)');
    $addWork -> execute([
        'image' => $image,
        'work_title' => $work_title,
        'painter' => $painter,
        'description' => $description
    ]);

    header('Location: index.php');

}

require ('elements/footer.php');