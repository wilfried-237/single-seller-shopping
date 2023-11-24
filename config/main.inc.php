<?php
$dns="mysql:host=localhost;dbname=single_seller_shopping";
$login="root";
$pass="";

try{
	$cnx = new PDO($dns,$login,$pass);
}
catch(PDOException $e){
	die('Erreur :'. $e->getMessage() );
}
