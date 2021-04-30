<?php

// var_dump($_POST);
// var_dump($_FILES);
if($_GET["mode"] == "modifier" && $_FILES["imageProduit"]["name"] <> ""){
    $pdt = ProduitsManager::findById($_POST["idProduit"]);
    $image = $pdt->getImageProduit();
    unlink($image);
}

$u = new Produits($_POST);

if($_GET["mode"] == "ajouter"){ //Définition des variables de l'image en cas d'ajout ou de modification de l'utilisateur
    $leNom = uniqid('prd_') . '.'.explode("/",$_FILES['imageProduit']['type'])[1];
    move_uploaded_file($_FILES['imageProduit']['tmp_name'],"IMG/".$leNom);
    $u->setImageProduit("IMG/".$leNom);
}
if($_GET["mode"] == "modifier"){
    if($_FILES["imageProduit"]["name"] <> ""){
        $leNom = uniqid('prd_') . '.' .explode("/",$_FILES['imageProduit']['type'])[1];
        move_uploaded_file($_FILES['imageProduit']['tmp_name'],"IMG/".$leNom);
        $u->setImageProduit("IMG/".$leNom);
    }else{
        $pdt = ProduitsManager::findById($_POST["idProduit"]);
        $u->setImageProduit($pdt->getImageProduit());
    }
}


// var_dump($_POST);
// var_dump($u);
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

header("location:?page=listeProduits");