<?php
include("includes/header.php");
?>

<link rel="stylesheet" type="text/css" href="css/fiche_produit.css">



<body>
<!-- NAVBAR -->
<?php
include("includes/top_nav.php");
?>
<!-- fin NAVBAR -->

	<div class="container-fluid">

		<div class="row">
    		<div class="col-md-12">
    			<h1>Fiche Produit</h1>
    		</div>
    	</div>

    	<div class="row flex">

    		<div class="col-lg-2 col-md-3 col-sm-3 col-xs-6 ">
          		<div class="nav-gche">
          			<h3 id="titre"> CATEGORIES</h3>
          		</div>
        	</div>
    	

   
    		<div class="col-lg-5 col-md-5 col-sm-9 col-xs-12">
<?php
$getid = htmlspecialchars($_GET['id_article']);
$requser = $bdd->prepare('SELECT * FROM article WHERE id_article = ?');
   $requser->execute(array($getid));
   $donnees = $requser->fetch();
?>

    			<div class="content">
    			<a href="" class="thumbnail">
          			<img class="img-responsive" src="photos/<?php echo $donnees['photo']; ?>"/>
        		</a>
        		</div>
    		</div>

    		<div class="col-lg-5 col-md-4 col-xs-12">
    			<div class="content desc">
	              	<h2><?php echo $donnees['nom_article']; ?></h2>
	              	<h2><?php echo $donnees['prix']; ?> €</h2>
	              	<h2>Description</h2>
	              		<p style='font-size: 20px'><?php echo $donnees['caracteristique']; ?></p>
                  <h5>Stock disponible : <?php echo $donnees['stock']; ?></h5>

<?php

	             	<?php echo"<a class='btn btn-primary' href='requete_panier.php?article=".$donnees["id_article"]."'>Ajoutez au panier</a>";?>
            	</div>
    		</div>


    	</div>


	</div>

<?php
include("includes/footer.php");
?>