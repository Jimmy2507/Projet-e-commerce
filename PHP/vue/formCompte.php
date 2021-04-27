<?php
    if(!isset($_SESSION['LDHA_utilisateur'])){
        header("location:?page=formConnexion");
    }
    $utilisateur = $_SESSION["LDHA_utilisateur"];
$dis="disabled";
echo'<div class="sousBlock colonne">
        <h2>Detail du compte</h2>
        <label for="pseudoUtilisateur">Pseudo :</label>
        <input type="text" name="pseudoUtilisateur" placeholder="Pseudo" value="'.$utilisateur->getPseudoUtilisateur().'" ' . $dis . '>
        <label for="mdpUtilisateur">Mot de passe :</label>
        <input type="password" name="mdpUtilisateur" placeholder="Mot de passe" value="'.$utilisateur->getMdpUtilisateur().'" '.$dis.'>
        <label for="mailUtilisateur">Adresse mail :</label>
        <input type ="text" name="mailUtilisateur" placeholder="Adresse mail" value="'.$utilisateur->getMailUtilisateur().'" '.$dis.'>
        <label for="nomUtilisateur">Nom :</label>
        <input type ="text" name="nomUtilisateur" placeholder="Nom" value="'.$utilisateur->getNomUtilisateur().'" '.$dis.'>
        <label for="prenomUtilisateur">Prenom :</label>
        <input type ="text" name="prenomUtilisateur" placeholder="Prenom" value="'.$utilisateur->getPrenomUtilisateur().'" '.$dis.'>
        <label for="adresseUtilisateur">Adresse :</label>
        <input type ="text" name="adresseUtilisateur" placeholder="Adresse" value="'.$utilisateur->getAdresseUtilisateur().'" '.$dis.'>
        <label for="telUtilisateur">Numero de téléphone :</label>
        <input type ="text" name="telUtilisateur" placeholder="Numero de telephone" value="'.$utilisateur->getTelUtilisateur().'" '.$dis.'>
    </div>';
    ?>
<div class=" Block colonne">
    <h2>Changer le mot de passe</h2>
    <form action="?page=actionChangementMdp"method="post">
    <div class="sousBlock colonne">    
        <input type="password" placeholder="Ancien mot de passe" name="ancienMdp" required>
        <input type="password" placeholder="Nouveau mot de passe" name="mdpUtilisateur" required>
        <input type="password" placeholder="Confirmé" name="confirmation" required>
    </div> 
    <button class="Boutton">Valider</button>  
    </form>

    <a href="?page=default" class="Retour" >Retour</a>
</div>