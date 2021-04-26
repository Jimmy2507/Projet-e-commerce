<!DOCTYPE html>
<html lang="fr">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="firefox" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <script src="https://kit.fontawesome.com/ebc16e5ffd.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="CSS/style.css" type="text/css" />
    <title><?=$titre?></title>
  </head>

<body class="colonne">
    
        <header>
            <div class="espaceV1"></div>
            <div class="centre">
                <div class="colonne">
                    <a href="?page=accueil"><div class="logo">LD<span style="color:#0096c8;">HA</span></div>
                    <div class="texteLogo">HIGH-TECH EXPERIENCE</div></a>
                </div>
                <div class="espaceV1"></div>
                <?php
                    if(isset($_SESSION["utilisateur"])){
                    echo "<a href='?page=actionDeconnexion'><div class='icones'><i class='fas fa-key'></i>Déconnexion</div></a>";
                    }else{
                    echo "<a href='?page=formConnexion'><div class='icones'><i class='fas fa-key'></i>Connexion</div></a>";
                    }
                ?>
            </div>
            <div class="espaceV1"></div>
        </header>
        <nav>
            <div class="centre">
                <a href=""><div>Tous nos produits</div></a>
                <a href=""><div>Blbl</div></a>
            </div>
        </nav>
        <main class="colonne">
          <div class="espaceH"></div>
          <div>
            <div class="espaceV1"></div>
            <div class="centre colonne">
            
        