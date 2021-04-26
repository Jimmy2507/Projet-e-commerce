
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
                    if(isset($_SESSION["LDHA_utilisateur"])){
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
                <a href=""><div>Gestion Article</div></a>
            </div>
        </nav>
        <main class="colonne">
          <div class="espaceH"></div>
          <div>
            <div class="espaceV1"></div>
            <div class="centre colonne">
            
        