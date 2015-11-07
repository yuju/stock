<?php

require "../config.php";

if ( isset($_POST["nom"]) && isset($_POST["type"]) && isset($_POST["description"])) {
	$nom 		 = $_POST["nom"];
	$type 		 = $_POST["type"];
	$description = $_POST["description"];

	$query_cmd = "INSERT INTO produit (nom, type, description) values ('$nom','$type','$description')";
	$bdd->exec($query_cmd);
}
header("LOCATION:../index.php");
echo "Le nouveau produit est enrigistré";