<?php
$mode = $_GET['mode'];
if(isset($_GET['id'])){
    $produit= ProduitsManager::findById($_GET['id']);
    $idProduit = $produit->getIdProduit();
}else{
    $produit= new Produits();
}
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
        $dis = "";
        $submit = '<button>Supprimer</button>';
        break;
}

echo $sousTitre;
echo '<form id="formulaire" method="post" action="index.php?page=actionProduits&mode=' . $mode . '" enctype="multipart/form-data>';
if ($mode != "ajouter") {
    echo '<input type="hidden" name="idProduit" value="' . $produit->getIdProduit() . '">';
}

echo '
    <input type="text" name="nomProduit" placeholder="Nom du produit" value="' . $produit->getNomProduit() . '" ' . $dis . '>
    <input type="text" name="prixProduit" placeholder="Prix du Produit" value"'.$produit->getPrixProduit().'" '.$dis.'>
    <input type ="text" name="descProduit" placeholder="Description" value"'.$produit->getDescProduit().'"'.$dis.'>
    <input type="text" name="nomProduit" placeholder="Nom du produit" value="' . $produit->getNomProduit() . '" ' . $dis . '>
    ';
        if ($_GET["mode"] == "ajouter" || $_GET["mode"] == "modifier"){
            echo '
            <label for="imageUtilisateur">Image : </label>
            <input type="file" name="imageProduit">';
        }
      echo'  <img src="'.$produit->getImageProduit().'" alt="imageProduit">';

echo $submit;
// dans tous les cas, on met le bouton annuler
?>
    <a href="?page=accueil" class=" crudBtn crudBtnRetour">Annuler</a>
</div>
    </div> 
    </div>

</form>
