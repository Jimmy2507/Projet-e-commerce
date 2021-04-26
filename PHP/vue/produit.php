<?php
$produit = ProduitsManager::findById(1);

echo "<h2>".$produit->getNomProduit()."</h2>";
echo '<div class="contenu">
    <div class="imageProduit">
        <img src="'.$produit->getImageProduit().'" alt="imageProduit">
    </div>
    <div class="cadreDescription">'.
        $produit->getDescProduit()
    .'</div>
    <div class="cadrePrix colonne">
        <div class="prixProduit">'.
        $produit->getPrixProduit()
    .'€</div>
        <div class="boutonPanier">AJOUTER AU PANIER</div>
        <div class="centreHV">Disponibilité :</div><div class="centreHV">';
        if($produit->getStockProduit() > 0){
            echo "En stock";
        }else{
            echo "Indisponible";
        }
    echo '</div></div>
</div>';
    
