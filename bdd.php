<?php 

function connect (string $table) : object {

try
{
	return new PDO("mysql:host=localhost;dbname=$table;charset=utf8", 'root', 'root');
}
catch (Exception $e)
{
    die('Erreur : ' . $e->getMessage());
}

}