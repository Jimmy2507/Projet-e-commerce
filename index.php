<?php

    include "./PHP/outils.php";

    spl_autoload_register("chargerClasse");

    $mode=(isset($_GET['mode']))?$_GET['mode']:"";
    $routes=[
            'default'=>['PHP/vue/','accueil','Accueil'],
            'compte'=>['PHP/vue/','compte','Mon compte'],
            'produit'=>['PHP/vue/','produit','Nom de l\'article'],
            '404'=>['PHP/vue/','404','Erreur 404'],

            //Listes


            //Formulaires
            'formInscription'=>['PHP/vue/','formInscription','Inscription'],
            'formConnexion'=>['PHP/vue/','formConnexion','Connexion'],

            //Action
            'actionInscription'=>['PHP/vue/','actionInscription','xx'],
            'actionConnexion'=>['PHP/vue/','actionConnexion','xx'],
    ];    

    if (isset($_GET['page'])){
        if(isset($routes[$_GET['page']])){
            chargerPage($routes[$_GET['page']]);
        }else{
            chargerPage($routes["404"]);

        }
    }else{
        chargerPage($routes["default"]);
    }

    Parametres::init();
    DbConnect::init();
    // session_start();