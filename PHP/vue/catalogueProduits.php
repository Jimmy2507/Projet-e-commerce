<?php

$listeProduits = ProduitsManager::findByCategorie($_GET["id"]);

if(!empty($listeProduits)){
    foreach($listeProduits as $produit){
    echo '<a href="?page=produit&id='.$produit->getIdProduit().'"><div class="cadreProduit">
        <div class="cadreProduitImage"><img src="'.$produit->getImageProduit().'" alt="imageProduit"></div>
        <div class="cadreProduitNom centreHV">'.$produit->getNomProduit().'</div>'.
        '<div class="cadreProduitPrix centreHV">'.$produit->getPrixProduit().'€</div>
    </div></a>';
}
}else{
    echo "Catégorie introuvable.";
}