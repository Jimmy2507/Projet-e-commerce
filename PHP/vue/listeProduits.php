<a href="?page=formGestionProduits&mode=ajouter"><button class="boutonPlus">+</button></a>
<?php
$listeProduits = ProduitsManager::getList();
if (count($listeProduits)>0){
    foreach ($listeProduits as $p) {
        echo '<div class="nom">Nom:'.$p->getNomProduit().'</div>
            <div class="Produit">
                <a href=?page=formGestionProduits&mode=detail&id='.$p->getIdProduit().'><button class="button">detail</button></a>
                <a href=?page=formGestionProduits&mode=modifier&id='.$p->getIdProduit().'><button class="button">modifier</button></a>
                <a href=?page=formGestionProduits&mode=supprimer&id='.$p->getIdProduit().'><button class="button">supprimer</button></a>
            </div>';

    }
}else{
    echo "<h2>Il n'y a pas de produits</h2>";
}