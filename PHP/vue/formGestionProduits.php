<?php
$mode = $_GET['mode'];
if(isset($_GET['id'])){
    $produit= ProduitsManager::findById($_GET['id']);
    $idProduit = $produit->getIdProduit();
}else{
    $produit= new Produits();
}
$listeCategorie = CategoriesManager::getList();
switch($mode){
    case "ajouter":
        $sousTitre ='<h5>Ajouter un nouveau produit</h5>';
        $dis ="";
        $submit = '<button>Ajouter</button>';
        break;
    case "modifier":
        $sousTitre = '<h5>Modifier un  utilisateur</h5>';
        $dis = "";
        $submit = '<button>Modifier</button>';
        break;
    case "supprimer":
        $sousTitre = '<h5>Supprimer un  utilisateur</h5>';
        $dis = "disabled";
        $submit = '<button>Supprimer</button>';
        break;
    case "detail":
        $sousTitre = '<h5>Détail du produit</h5>';
        $dis = "disabled";
        break;
}

echo $sousTitre;
echo '<form method="post" action="?page=actionProduits&mode=' . $mode . '" enctype="multipart/form-data">';
if ($mode != "ajouter") {
    echo '<input type="hidden" name="idProduit" value="' . $produit->getIdProduit() . '">';
}

echo '
    <input type="text" name="nomProduit" placeholder="Nom du produit" value="' . $produit->getNomProduit() . '" ' . $dis . '>
    <input type="text" name="prixProduit" placeholder="Prix du Produit" value="'.$produit->getPrixProduit().'" '.$dis.'>
    <input type ="text" name="stockProduit" placeholder="Stock" value="'.$produit->getStockProduit().'" '.$dis.'>
    <textarea name="descProduit" '.$dis.'>'.$produit->getDescProduit().'</textarea>
    ';
        if ($_GET["mode"] == "ajouter" || $_GET["mode"] == "modifier"){
            echo '
            <label for="imageProduit">Image : </label>
            <input type="file" name="imageProduit">';
        }


    echo '<select name= "idCategorie">';
        foreach ($listeCategorie as $c) {
            if ($_GET["mode"]!="ajouter") {
                $sel="";
                if ($c->getIdCategorie()==$produit->getIdCategorie()){
                    $sel="selected";
                }
            }
            echo '<option value ="'.$c->getIdCategorie().'"'.$sel.$dis.'>'.$c->getNomCategorie().'</option>';
        }
        echo '</select>';


if($mode != "detail"){
    echo $submit;
}

// dans tous les cas, on met le bouton annuler
?>
    <a href="?page=listeProduits" class=" crudBtn crudBtnRetour">Annuler</a>
</div>
    </div> 
    </div>

</form>
<img src="'.$produit->getImageProduit().'" alt="imageProduit">';
