<?php

	class DbConnect{

		private static $db;
		
		public static function getDb(){
			return DbConnect::$db;
		}

		public static function init() {
			try{
				self::$db= new PDO ( 'mysql:host=localhost;dbname=NOM_DE_LA_BASE;charset=utf8', 'root', ''); //"localhost" et "root" par défaut
			}
            catch (Exception$erreur){
				exit('Erreur : '.$erreur->getMessage());
			}
		}

	}