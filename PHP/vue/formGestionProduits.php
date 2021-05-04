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
        $sousTitre ='<h2>Ajouter un nouveau produit</h2>';
        $dis ="";
        $submit = '<button>Ajouter</button>';
        break;
    case "modifier":
        $sousTitre = '<h2>Modifier le produit</h2>';
        $dis = "";
        $submit = '<button>Modifier</button>';
        break;
    case "supprimer":
        $sousTitre = '<h2>Supprimer le produit</h2>';
        $dis = "disabled";
        $submit = '<button>Supprimer</button>';
        break;
    case "detail":
        $sousTitre = '<h2>Détail du produit</h2>';
        $dis = "disabled";
        break;
}

echo $sousTitre;
echo '<form method="post" action="?page=actionProduits&mode=' . $mode . '" enctype="multipart/form-data">';

if ($mode != "ajouter") {
    echo '<input type="hidden" name="idProduit" value="' . $produit->getIdProduit() . '">';
}

echo '
<div><label for="nomProduit">Nom : </label></div>
<div><input type="text" name="nomProduit" placeholder="Nom du produit" value="' . $produit->getNomProduit() . '" ' . $dis . '></div>
<div class="petitEspaceH"></div>
<div><label for="prixProduit">Prix : </label></div>
<div><input type="text" name="prixProduit" placeholder="Prix du Produit" value="'.$produit->getPrixProduit().'" '.$dis.'></div>
<div class="petitEspaceH"></div>
<div><label for="stockProduit">Stock : </label></div>
<div><input type ="text" name="stockProduit" placeholder="Stock" value="'.$produit->getStockProduit().'" '.$dis.'></div>
<div class="petitEspaceH"></div>
<div><label for="descProduit">Description : </label></div>
<div><textarea name="descProduit" placeholder="Description du produit" '.$dis.'>'.$produit->getDescProduit().'</textarea></div>
<div class="petitEspaceH"></div>
<div><label for="idCategorie">Catégorie : </label></div>
';
echo '<div><select name= "idCategorie" '.$dis.' >';
    foreach ($listeCategorie as $c) {
        if ($_GET["mode"]!="ajouter") {
            $sel="";
            if ($c->getIdCategorie()==$produit->getIdCategorie()){
                $sel="selected";
            }
        }
        echo '<option value ="'.$c->getIdCategorie().'" '.$sel. '>'.$c->getNomCategorie().'</option>';
    }
    echo '</select></div>
    <div class="petitEspaceH"></div>';

if ($_GET["mode"] == "ajouter" || $_GET["mode"] == "modifier"){
    echo '
    <div><label for="imageProduit">Image : </label>
    <input type="file" name="imageProduit"></div>
    <div class="petitEspaceH"></div>';
}

if($mode <> "ajouter"){
    echo '
    <div class="imageFormProduit"><img src="'.$produit->getImageProduit().'" alt="imageProduit"></div>
    <div class="petitEspaceH"></div>
    ';
}

if($mode != "detail"){
    echo $submit;
}

?>
 <a href="?page=listeProduits" class="Retour">Annuler</a>

</form>
