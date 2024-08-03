<?php

#vérifier le login et le mot de passe de l'utilisateursont bien dans la base de données
function verifyUserLoginPassword (PDO $pdo, string $email, string $password):bool|array
{
    $query = $pdo->prepare("SELECT * FROM user WHERE email = :email"); //récupérer l'utilisateur par l'email
    $query->bindValue(':email', $email, PDO::PARAM_STR);
    $query->execute();
    //fetch() nous permet de récupérer une seule ligne
    $user = $query->fetch(PDO::FETCH_ASSOC);
    //$result est un tableau association qu’on peut manipuler comme on l’a vu précédemment

    if($user && password_verify($password, $user['password'])){
        /*verif ok
        var_dump(password_verify($password, $user['password']));*/
        return $user;
    }
        else {
           //email ou password incorrect 
        return false; //si pas utilisateur connu dans la base de données => false
    }

//$2y$10$u9GAzZu2eSrtqk9PHhlXQOIYI0l0jB8CO6kiBzbZJ4dah93BAaXMq
}