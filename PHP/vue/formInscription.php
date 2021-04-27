<div class="Block colonne">
    <h2>Création de compte </h2>
    <h3>VOS IDENTIFIANTS :</h3>
    <form action="index.php?page=actionInscription" method="POST">
        <div class="sousBlock colonne">
            <input type="text" name ="pseudoUtilisateur" placeholder="Pseudo" require>
            <input type="password" name ="mdpUtilisateur" placeholder="Mot de passe" require>
            <div class="trait"></div>
            <h3>Vos informations personnelles :</h3>
            <input type="text" name ="prenomUtilisateur" placeholder="Prénom" require>
            <input type="text" name ="nomUtilisateur" placeholder="Nom de famille" require>
            <input type="text" name ="mailUtilisateur" placeholder="Adresse mail" require>
            <input type="text" name ="adresseUtilisateur" placeholder="Adresse" require>
            <input type="text" name ="telUtilisateur" placeholder="Numero de téléphone" require>
        </div>
        <button class="Boutton" type="submit">VALIDER</button>
        
    </form>
</div>