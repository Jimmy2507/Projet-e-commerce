<?php
$uti = UtilisateursManager::findByPseudo($_POST['pseudoUtilisateur']);
if ($uti != false)
{
    if (crypter($_POST['mdpUtilisateur']) == $uti->getMdpUtilisateur())
    {
        $_SESSION['LDHA_utilisateur']=$uti;
        header("location:?page=default");
    }
    else
    {
        echo 'le mot de passe est incorrect';
        header("refresh:1;url=?page=connexion");
    }
}else
{
    echo "Le pseudo n'existe pas";
    header("refresh:1;url=?page=connexion");
}