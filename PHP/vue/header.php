<body class="colonne">
    
        <header>
            <div class="espaceV1"></div>
            <div class="centre">
                <div class="colonne">
                    <a href="?page=default"><div class="logo">LD<span style="color:#0096c8;">HA</span></div>
                    <div class="texteLogo">HIGH-TECH EXPERIENCE</div></a>
                </div>
                <div class="espaceV1"></div>
                <div class="recherche">
                    <form method="GET">
                        <input type="search" name="recherche" placeholder="Recherche de produit" />
                        <button class="boutonRecherche" type="submit"><i class="fas fa-search"></i></button>
                    </form>
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
            <div>
                <div class="espaceV1"></div>
                <div class="centre">
                    <div class="menuProduits bleu"><a href="">Tous nos produits</a>
                        <div class="sousMenu colonne">
                            <?php
                                $tab=CategoriesManager::getList();
                                foreach($tab as $categorie){
                                    echo '<a href="?page=catalogue&id='.$categorie->getIdCategorie().'">'.$categorie->getNomCategorie().'</a>';
                                }
                            ?>
                        </div>
                    </div>
                    <?php
                        if(isset($_SESSION["LDHA_utilisateur"])){
                            if($_SESSION["LDHA_utilisateur"]->getIdRole()==1){
                                echo '<div><a href="?page=listeProduits">Produits</a></div>
                                <div><a href="?page=listeCategories">Catégories</a></div>
                                <div><a href="?page=listeUtilisateurs">Utilisateurs</a></div>';
                            }
                        }
                        
                            echo'<div><a href="?page=nousContacte">Nous contacter</a></div>';
                        
                        if(isset($_SESSION['LDHA_utilisateur'])){
                            echo'<div><a href="?page=formCompte">Mon compte</a></div>
                            <div><a href="?page=panier">Panier</a></div>';
                        }
                    ?>
                </div><div class="espaceV1"></div>
            </div>
        </nav>
        <main class="colonne">
          <div class="espaceH"></div>
          <div>
            <div class="espaceV1"></div>
            <div class="centre colonne">
