<?php

    function chargerClasse($classe){
        if (file_exists("PHP/controleur/" . $classe . ".class.php")){
            require "PHP/controleur/" . $classe . ".class.php";
        }
        if (file_exists("PHP/modele/" . $classe . ".class.php")){
            require "PHP/modele/" . $classe . ".class.php";
        }
    }
    spl_autoload_register("chargerClasse");

    DbConnect::init();