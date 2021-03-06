<?php

    include "./PHP/outils.php";

    spl_autoload_register("chargerClasse");

    $mode=(isset($_GET['mode']))?$_GET['mode']:"";
    $routes=[
            'default'=>['PHP/vue/','accueil','Accueil'],
            'accueil'=>['PHP/vue/','accueil','Accueil'],
            'compte'=>['PHP/vue/','compte','Mon compte'],
            'produit'=>['PHP/vue/','produit','Nom de l\'article'],
            '404'=>['PHP/vue/','404','Erreur 404'],
            'nousContacte'=>['PHP/vue/','nousContacte','Contact'],
            //Listes
            'listeProduits'=>['PHP/vue/','listeProduits','Liste des produits'],
            'listeCategories'=>['PHP/vue/','listeCategories','Liste des produits'],
            'listeUtilisateurs'=>['PHP/vue/','listeUtilisateurs','Liste des Utilisateur'],
            'catalogue'=>['PHP/vue/','catalogueProduits','Catalogue des produits'],
            'panier'=>['PHP/vue/','panier','Votre panier'],

            //Formulaires
            'formInscription'=>['PHP/vue/','formInscription','Inscription'],
            'formConnexion'=>['PHP/vue/','formConnexion','Connexion'],
            'formGestionProduits'=>['PHP/vue/','formGestionProduits','Gestion des produits'],
            'formGestionCategorie'=>['PHP/vue/','formGestionCategorie','Gestion des categories'],
            'formGestionUtilisateur'=>['PHP/vue/','formGestionUtilisateur','Gestion des utilisateurs'],
            'formCompte'=>['PHP/vue/','formCompte','Mon compte'],
            //Action
            'actionInscription'=>['PHP/vue/','actionInscription','xx'],
            'actionConnexion'=>['PHP/vue/','actionConnexion','xx'],
            'actionDeconnexion'=>['PHP/vue/','actionDeconnexion','xx'],
            'actionProduits'=>['PHP/vue/','actionProduits','xx'],
            'actionCategorie'=>['PHP/vue/','actionCategorie','xx'],
            'actionUtilisateurs'=>['PHP/vue/','actionUtilisateurs','xx'],
            'actionPaniers'=>['PHP/vue/','actionPaniers','xx'],
            'actionChangementMdp'=>['PHP/vue/','actionChangementMdp','xx'],
    ];    

    Parametres::init();
    DbConnect::init();
    session_start();
    if (isset($_GET['page'])){
        if(isset($routes[$_GET['page']])){
            chargerPage($routes[$_GET['page']]);
        }else{
            chargerPage($routes["404"]);

        }
    }else{
        chargerPage($routes["default"]);
    }

