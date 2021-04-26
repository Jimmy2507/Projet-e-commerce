<?php
$erreur =false;
//var_dump($_POST);
$u = new Produits($_POST);
//var_dump($u);
switch ($_GET['mode']) {
    case "ajouter":
            ProduitsManager::add($u);
            break;
        
    case "modifier":
            ProduitsManager::update($u);
            break;
        
    case "detail":
        ProduitsManager::findById($u);
        break;
    case "supprimer":
        ProduitsManager::delete($u);
        break;

}
header("location:?page=ListeUser");

