<?php
$erreur =false;
var_dump($_POST);
var_dump($_FILES);//A VOIR S'IL NE FAUT PAS UTILISER FILES CAR CA N'A PAS L'AIR D'ÊTRE DANS POST
if($_GET["mode"] == "modifier" && isset($_POST["imageProduit"])){
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
    if(isset($_POST["imageProduit"])){
        $leNom = uniqid('prd_') . '.' .explode("/",$_FILES['imageProduit']['type'])[1];
        move_uploaded_file($_FILES['imageProduit']['tmp_name'],"IMG/".$leNom);
        $u->setImageProduit("IMG/".$leNom);
    }else{
        $pdt = ProduitsManager::findById($_POST["idProduit"]);
        $u->setImageProduit($pdt->getImageProduit());
    }
}


var_dump($_POST);
var_dump($u);
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
// header("location:?page=listeProduits");

