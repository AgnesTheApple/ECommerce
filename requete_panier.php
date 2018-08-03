<?php
session_start();
/*session_destroy();*/
require('includes/connexion.php');


if (isset($_GET["ajouter"]))
{
  if (!isset($_SESSION["list"]))
  {
    $_SESSION["list"] = array();
  }
  array_push($_SESSION["list"], $_GET["ajouter"]);
}
//compter elements dans panier
$panier_count = 0;
if (isset($_SESSION["list"]))
{
  $panier_count = sizeof($_SESSION["list"]);
}


header("Location: panier.php?id_article=".$_SESSION['list']);
?>

	