<?php
//var_dump($_POST);
if ($_POST['mdp'] == $_POST['confirmation'])
{
    $uti = UtilisateursManager::findByPseudo($_POST['pseudoUtilisateur']);
    if ($uti == false)
    {
        $u = new Utilisateurs($_POST);
        //encodage du mot de passe
        $u->setMdpUtilisateur(crypter($u->getMdpUtilisateur()));
        UtilisateursManager::add($u);
    }else{
        echo "Le pseudo existe deja";
    }
}else{
    echo "la confirmation ne correspond pas au mot de passe";
}