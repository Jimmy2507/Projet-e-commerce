<?php

$listeProduits = ProduitsManager::findByCategorie($_GET["id"]);
// var_dump($listeProduits);
foreach($listeProduits as $produit){
    echo '<a href="?page=produit&id='.$produit->getIdProduit().'"><div class="cadreProduit">
        <div class="cadreProduitImage"><img src="'.$produit->getImageProduit().'" alt="imageProduit"></div>
        <div class="cadreProduitNom">'.$produit->getNomProduit().'</div>'.
        '<div class="cadreProduitPrix">'.$produit->getPrixProduit().'</div>
    </div></a>';
}