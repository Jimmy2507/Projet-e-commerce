<?php
$uti = UtilisateursManager::findByPseudo($_POST['pseudoUtilisateur']);
if ($uti != false)
{
    if (crypter($_POST['mdpUtilisateur']) == $uti->getMdpUtilisateur())
    {
        echo 'connexion reussie';
        $_SESSION['LDHA_Utilisateur']=$uti;
        header("refresh:1;url=index.php?page=pageCo");
    }
    else
    {
        echo 'le mot de passe est incorrect';
        header("refresh:1;url=index.php?page=connexion");
    }
}else
{
    echo "Le pseudo n'existe pas";
    header("refresh:1;url=index.php?page=connexion");
}