<?php
$mode = $_GET['mode'];
if(isset($_GET['id'])){
    $categorie= CategoriesManager::findById($_GET['id']);
    $idCategorie = $categorie->getIdCategorie();
}else{
    $categorie= new Categories();
}
$listeCategorie = CategoriesManager::getList();
switch($mode){
    case "ajouter":
        $sousTitre ='<h5>Ajouter une nouvelle categorie</h5>';
        $dis ="";
        $submit = '<button>Ajouter</button>';
        break;
    case "modifier":
        $sousTitre = '<h5>Modifier une  categorie</h5>';
        $dis = "";
        $submit = '<button>Modifier</button>';
        break;
    case "supprimer":
        $sousTitre = '<h5>Supprimer une  categorie</h5>';
        $dis = "disabled";
        $submit = '<button>Supprimer</button>';
        break;
}

echo $sousTitre;
echo '<form method="post" action="?page=actionCategorie&mode=' . $mode . '" enctype="multipart/form-data">';
if ($mode != "ajouter") {
    echo '<input type="hidden" name="idCategorie" value="' . $categorie->getIdCategorie() . '">';
}

echo '
    <input type="text" name="nomCategorie" placeholder="Nom de la categorie" value="' . $categorie->getNomCategorie() . '" ' . $dis . '> ';

if($mode != "detail"){
    echo $submit;
}
// dans tous les cas, on met le bouton annuler
?>
    <a href="?page=listeCategories" class=" crudBtn crudBtnRetour">Annuler</a>
</form>
