<a href="?page=formGestionCategorie&mode=ajouter"><button class="boutonPlus">+</button></a>
<?php
$listeCategorie = CategoriesManager::getList();
if (count($listeCategorie)>0){
    foreach ($listeCategorie as $p) {
        echo '<div class="nom">Nom:'.$p->getNomCategorie().'</div>
            <div class="Produit">
                <a href=?page=formGestionCategorie&mode=modifier&id='.$p->getIdCategorie().'><button class="button">modifier</button></a>
                <a href=?page=formGestionCategorie&mode=supprimer&id='.$p->getIdCategorie().'><button class="button">supprimer</button></a>
            </div>';

    }
}else{
    echo "<h2>Il n'y a pas de produits</h2>";
}