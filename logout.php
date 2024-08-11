<?php
   require_once __DIR__."../lib/session.php";

   session_regenerate_id(true); // régénéner l'id de session ; prévenir attaque de fixations de session
   
   //supprimer les éléments de la session dans la serveur
   session_destroy();

   //enlever les données du tableau de session
   unset($_SESSION);

  header('location: login.php');