<?php
require('includes/connexion.php');


	$getid = htmlspecialchars($_GET['article']);
	$requser = $bdd->prepare('SELECT * FROM article WHERE id_article = ?');
	$requser->execute(array($getid));
   $donnees = $requser->fetch();

require('panier.php');

?>