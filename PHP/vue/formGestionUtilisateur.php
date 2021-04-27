<?php
$mode = $_GET['mode'];
if(isset($_GET['id'])){
    $utilisateur= UtilisateursManager::findById($_GET['id']);
    $idUtilisateur = $utilisateur->getIdUtilisateur();
}else{
    $utilisateur= new Utilisateurs();
}
$listeRole = RolesManager::getList();
switch($mode){
    case "ajouter":
        $sousTitre ='<h5>Ajouter un nouveau utilisateur</h5>';
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
        $sousTitre = '<h5>Détail de l\'utilisateur</h5>';
        $dis = "disabled";
        break;
}

echo $sousTitre;
echo '<form method="post" action="?page=actionUtilisateurs&mode=' . $mode . '" enctype="multipart/form-data">';
if ($mode != "ajouter") {
    echo '<input type="hidden" name="idUtilisateur" value="' . $utilisateur->getIdUtilisateur() . '">';
}

echo '
    <input type="text" name="pseudoUtilisateur" placeholder="Pseudo" value="' . $utilisateur->getPseudoUtilisateur() . '" ' . $dis . '>
    <input type="password" name="mdpUtilisateur" placeholder="Mot de passe" value="'.$utilisateur->getMdpUtilisateur().'" '.$dis.'>
    <input type ="text" name="mailUtilisateur" placeholder="Adresse mail" value="'.$utilisateur->getMailUtilisateur().'" '.$dis.'>
    <input type ="text" name="nomUtilisateur" placeholder="Nom" value="'.$utilisateur->getNomUtilisateur().'" '.$dis.'>
    <input type ="text" name="prenomUtilisateur" placeholder="Prenom" value="'.$utilisateur->getPrenomUtilisateur().'" '.$dis.'>
    <input type ="text" name="adresseUtilisateur" placeholder="Adresse" value="'.$utilisateur->getAdresseUtilisateur().'" '.$dis.'>
    <input type ="text" name="telUtilisateur" placeholder="Numero de telephone" value="'.$utilisateur->getTelUtilisateur().'" '.$dis.'>
    ';

    echo '<select name= "idRole">';
        foreach ($listeRole as $c) {
            if ($_GET["mode"]!="ajouter") {
                $sel="";
                if ($c->getIdRole()==$utilisateur->getIdRole()){
                    $sel="selected";
                }
            }
            echo '<option value ="'.$c->getIdRole().'"'.$sel.$dis.'>'.$c->getNomRole().'</option>';
        }
        echo '</select>';


if($mode != "detail"){
    echo $submit;
}

// dans tous les cas, on met le bouton annuler
?>
    <a href="?page=listeUtilisateurs" class=" crudBtn crudBtnRetour">Annuler</a>
</form>
