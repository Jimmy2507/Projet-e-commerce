<?php
$_POST["idRole"] = 1;
//var_dump($_POST);
    //recherche si le pseudo existe deja
    $uti = UtilisateursManager::findByPseudo($_POST['pseudoUtilisateur']);
    if ($uti == false)
    {
        $u = new Utilisateurs($_POST);
        //encodage du mot de passe
        UtilisateursManager::add($u);
    }else{
        echo "Le pseudo existe deja";
    }
