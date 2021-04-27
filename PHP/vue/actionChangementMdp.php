<?php

$utilisateur = $_SESSION["LDHA_utilisateur"];
UtilisateursManager::findByPseudo($utilisateur->getPseudoUtilisateur());

if (crypter($_POST["ancienMdp"]) == $utilisateur->getMdpUtilisateur()){
    if($_POST["mdpUtilisateur"] == $_POST["confirmation"]){
        UtilisateursManager::updateMdp($utilisateur,crypter($_POST["mdpUtilisateur"]));
        echo "<h2>Mot de passe modifié !</h2>";
        header("refresh:3;url=?page=formCompte");
    }else{
        echo "<h2>Les mots de passes ne correspondent pas.</h2>";
        header("refresh:3;url=?page=formCompte");
    }
}
else{
    echo "<h2>L'ancien mot de passe ne correspond pas.</h2>";
    header("refresh:3;url=?page=formCompte");
}