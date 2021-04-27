<?php
// var_dump($_POST);
$u = new Categories($_POST);
// var_dump($u);
switch ($_GET['mode']) {
    case "ajouter":
        CategoriesManager::add($u);
        break;
        
    case "modifier":
        CategoriesManager::update($u);
        break;
    case "supprimer":
        CategoriesManager::delete($u);
        break;

}
header("location:?page=listeCategories");