<?php
try
{
	$bdd = new PDO('mysql:host=localhost;dbname=stock', 'root', '');
}
catch (Exception $e)
{
	die('Erreur : ' . $e->getMessage());
}
?>