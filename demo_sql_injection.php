<?php

// NE PAS UTILISER CE CODE EN PRODUCTION
// PAS SECURISE CONTRE LES INJECTIONS SQL

$pdo = new PDO('mysql:dbname=studi_checkit;host=localhost;charset=utf8mb4', 'root', ''); //connection BDD avec PDO
$id = $_GET['id']; //recupère l'id dans l'URL
$query = $pdo->query("SELECT * FROM user WHERE id = $id"); //va tout récupèrer dans la BDD user tout les id
$result = $query->fetch(PDO::FETCH_ASSOC); //récupère le resultat

var_dump($result); 
?>
