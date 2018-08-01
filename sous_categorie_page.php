<?php
include("includes/header.php");
?>


<link rel="stylesheet" type="text/css" href="css/categorie_page.css">



<body>
<!-- NAVBAR -->
<?php
include("includes/top_nav.php");
?>
<!-- fin NAVBAR -->
  
  
<div class="container-fluid">
    
<div class="row">
    <div class="col-md-12">
        
        <!-- bandeau image -->

<?php
$getid = htmlspecialchars($_GET['id_categorie']);

   $requser = $bdd->prepare('SELECT * FROM categorie WHERE id_categorie = ?');
   $requser->execute(array($getid));
   $donnees = $requser->fetch();

?>
    <img class="img-responsive" src="pictures/<?php echo $donnees['header_categorie']; ?>"/>

        <!-- fin bandeau image-->
        
        <!-- description catégorie -->
        <div class="sstitre">
                   <br><br>
        		<p>Vous trouverez ici tous ce dont vous aurez besoin pour des deplacements rapide mais toujours dans de bonnes conditions! </p>
                </div>
        <!-- fin description-->
    </div>
    </div>
    <div class="row flex">
<!-- nav bar gche -->

        <div class="col-md-2 col-sm-3">
          <div class="nav-gche">
          <h3 id="titre"> CATEGORIES</h3>
          <?php

$messages = $bdd->query('SELECT * FROM sous_categorie WHERE id_categorie = '.$_GET['id_categorie'].' ');
                  
                  while($donnees = $messages->fetch()){
                  ?>
        
          <li>
            <ul><?php echo "<a href='sous_categorie_page.php?id_sous_categorie=".$donnees["id_sous_categorie"]."&id_categorie=".$donnees["id_categorie"]."'>".$donnees["nom_sous_categorie"]."</a>";?></ul>
           
          </li>
          <?php 
               } 
                
                ?>
         
          </div>
        </div>
<!-- fin .col-md-2 -->
          
        
    

        	
<div class="col-md-10 col-sm-9">
        	<div class="row flex">
<!-- Articles -->
                <?php
    $getidsous = htmlspecialchars($_GET['id_sous_categorie']);
$categorie = $bdd->query('SELECT * FROM article INNER JOIN sous_categorie ON sous_categorie.id_sous_categorie = article.id_sous_categorie WHERE article.id_sous_categorie = '.$_GET['id_sous_categorie'].' ');
                  
                  while($donnees = $categorie->fetch()){
                  ?>

      <div class="col-lg-4 col-sm-6">
        <?php echo"<a class='thumbnail' href='fiche_produit.php?id_article=".$donnees["id_article"]."'>";?> 
          <img src="photos/<?php echo $donnees['photo']; ?>" >
          <h4><?php echo $donnees['nom_article']; ?></h4>
          <h4><?php echo $donnees['prix']; ?> €</h4>
        </a>
      </div>
<?php } ?>


      
     <!-- fin Articles -->
                
 </div>
    </div>


        	</div>
    
    </div>


<?php
include("includes/footer.php");
?>