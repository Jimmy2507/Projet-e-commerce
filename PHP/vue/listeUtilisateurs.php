<a href="?page=formGestionUtilisateur&mode=ajouter"><button class="boutonPlus">+</button></a>
<?php
$listeUtilisateur = UtilisateursManager::getList();
if (count($listeUtilisateur)>0){
    foreach ($listeUtilisateur as $p) {
        echo '<div class="nom">Pseudo:'.$p->getPseudoUtilisateur().'</div>
            <div class="Produit">
                <a href=?page=formGestionUtilisateur&mode=detail&id='.$p->getIdUtilisateur().'><button class="button">detail</button></a>
                <a href=?page=formGestionUtilisateur&mode=modifier&id='.$p->getIdUtilisateur().'><button class="button">modifier</button></a>
                <a href=?page=formGestionUtilisateur&mode=supprimer&id='.$p->getIdUtilisateur().'><button class="button">supprimer</button></a>
            </div>';

    }
}else{
    echo "<h2>Il n'y a pas d'utilisateur'</h2>";
}