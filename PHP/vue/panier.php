<?php

$listePaniers = PaniersManager::findByUtilisateur($_SESSION["LDHA_utilisateur"]->getIdUtilisateur());

if($listePaniers){
    foreach($listePaniers as $panier){
    $produit = ProduitsManager::findById($panier->getIdProduit());
    echo '<div class="cadrePanier">
    <div class="cadreProduitImage"><img src="'.$produit->getImageProduit().'" alt="imageProduit"></div>
    <div class="cadreProduitNom centreHV">'.$produit->getNomProduit().'</div>
    <div class="cadreQuantite centreHV">Quantité : '.$panier->getQteProduit().'</div>
    <div class="cadreProduitPrix centreHV">'.$produit->getPrixProduit().'€</div>
    <button><a href="?page=actionPaniers&idPa='.$panier->getIdPanier().'&idPr='.$panier->getIdProduit().'&mode=supprimer">Supprimer</a></button></div>';
    }
}else{
    echo "Panier vide !";
}

