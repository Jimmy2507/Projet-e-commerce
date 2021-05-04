<?php

if(isset($_GET["id"])){
    $produit = ProduitsManager::findById($_GET["id"]);

    if($produit->getStockProduit() > 0){
        $lien = 'href="?page=actionPaniers&idPr='.$produit->getIdProduit().'&mode=ajouter"';
    }else{
        $lien = '';
    }

    if(!empty($produit)){

        echo "<h2>".$produit->getNomProduit()."</h2>";
        echo '<div class="contenu">
            <div class="imageProduit">
                <img src="'.$produit->getImageProduit().'" alt="imageProduit">
            </div>
            <div class="cadreDescription">'.
                $produit->getDescProduit()
            .'</div>
            <div class="cadrePrix colonne">
                <div class="prixProduit flexNone">'.
                $produit->getPrixProduit()
            .'€</div>
                <div class="boutonPanier flexNone" ><a '.$lien.' >AJOUTER AU PANIER</a></div>
                <div class="centreHV flexNone">Disponibilité : ';
                if($produit->getStockProduit() > 0){
                    echo "En stock";
                }else{
                    echo "Rupture";
                }
            echo '</div></div>
        </div>';

    }else{
        echo "Ce produit est introuvable.";
    }
    
}else{
    echo "Aucun produit cherché.";
}

    
