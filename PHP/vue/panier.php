<?php

$listePaniers = PaniersManager::findByUtilisateur($_SESSION["LDHA_utilisateur"]->getIdUtilisateur());

if($listePaniers){
    foreach($listePaniers as $panier){
    $produit = ProduitsManager::findById($panier->getIdProduit());
    echo '<div class="cadreProduit">
    <div class="cadreProduitImage"><img src="'.$produit->getImageProduit().'" alt="imageProduit"></div>
    <div class="cadreProduitNom">'.$produit->getNomProduit().'</div>
    <div class="cadreQuantite">Quantité : '.$panier->getQteProduit().'</div>
    <div class="cadreProduitPrix">'.$produit->getPrixProduit().'€</div>
    <button><a href="?page=actionPaniers&id='.$panier->getIdProduit().'&mode=supprimer">Supprimer</a></button></div>';
    }
}else{
    echo "Panier vide !";
}

