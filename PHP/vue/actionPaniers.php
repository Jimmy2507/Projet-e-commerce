<?php

if($_GET["mode"]=="ajouter"){
    $tab=["idUtilisateur"=>$_SESSION["LDHA_utilisateur"]->getIdUtilisateur(),"idProduit"=>$_GET["idPr"],"qteProduit"=>1];//Si ajout nouveau produit, pas d'idPanier

    $liste=PaniersManager::findByUtilisateur($_SESSION["LDHA_utilisateur"]->getIdUtilisateur());//Mais on vérifie qu'il n'a pas déjà l'article dans son panier
    foreach($liste as $panier){
        if($panier->getIdUtilisateur()==$_SESSION["LDHA_utilisateur"]->getIdUtilisateur() && $panier->getIdProduit() == $_GET["idPr"]){//Sinon on augmente la quantité au lieu d'ajouter un panier
            $tab["idPanier"] = $panier->getIdPanier();//On récupère l'id du panier
            $_GET["mode"]="modifier";//On modifie au lieu d'ajouter
            $tab["qteProduit"]++;//On incrémente la quantité
        }
    }
}else{
    $tab=["idPanier"=>$_GET["idPa"],"idUtilisateur"=>$_SESSION["LDHA_utilisateur"]->getIdUtilisateur(),"idProduit"=>$_GET["idPr"],"qteProduit"=>1];
}


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
    case "supprimer":
        PaniersManager::delete($panier);
        break;
}
header("location:?page=panier");