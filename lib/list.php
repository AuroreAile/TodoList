<?php

#vérifier le login et le mot de passe de l'utilisateur sont bien dans la base de données
function getListsByUserId(PDO $pdo, int $userId): array
{
    $query = $pdo->prepare("SELECT list.*, category.name AS category_name,
                            category.icon AS category_icon FROM list 
                            JOIN category ON category.id = list.category_id
                            WHERE user_id = :user_id"); //récupérer l'utilisateur par l'email
    $query->bindValue(':user_id', $userId, PDO::PARAM_INT);
    $query->execute();
    $lists = $query->fetchAll(PDO::FETCH_ASSOC);

    return $lists;
}