<?php

$tab=["idUtilisateur"=>$_SESSION["LDHA_utilisateur"]->getIdUtilisateur(),"idProduit"=>$_GET["id"],"qteProduit"=>1];
$panier = new Paniers($tab);

// var_dump($tab);
// var_dump($panier);
switch ($_GET['mode']) {
    case "ajouter":
        PaniersManager::add($panier);
        break;
        
    case "modifier":
        PaniersManager::update($panier);
        break;
        
    // case "detail":
    //     PaniersManager::findById($panier);
    //     break;
    case "supprimer":
        PaniersManager::delete($panier);
        break;

}
header("location:?page=panier");

