<?php
$erreur =false;
$u = new Utilisateurs ($_POST);
// var_dump($_POST);
// var_dump($u);
switch ($_GET['mode']) {
    case "ajouter":
        UtilisateursManager::add($u);
        break;
        
    case "modifier":
        UtilisateursManager::update($u);
        break;
        
    case "detail":
        UtilisateursManager::findById($u);
        break;
    case "supprimer":
        UtilisateursManager::delete($u);
        break;

}
header("location:?page=listeUtilisateurs");

