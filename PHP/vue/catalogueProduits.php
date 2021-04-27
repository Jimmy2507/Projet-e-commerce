<?php

$listeProduits = ProduitsManager::findByCategorie($_GET["id"]);
var_dump($listeProduits);