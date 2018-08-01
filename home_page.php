<?php
include("includes/header.php");

?>
    
    <link rel="stylesheet" type="text/css" href="css/home_page.css">
    
  </head>

  <body>

<?php
include("includes/top_nav.php");
?>

    <div class="jumbotron">
      
    </div>

  <h1>MY TRAVEL STUFF en Quelques Mots...</h1>
    <div class="intro">
      <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
    </div>

  <h1>CATEGORIES</h1>

  <div class="container-fluid">

    <div class="row-flex">

<?php
          $categorie = $bdd->query('SELECT * from categorie');
               while($donnees = $categorie->fetch()){
                   ?>

      <div class="col-lg-4 col-sm-6">
        <?php echo"<a class='thumbnail' href='categorie_page.php?id_categorie=".$donnees["id_categorie"]."'>";?>
          <img id="cat" src="pictures/<?php echo $donnees['image_categorie']; ?>"/>
        </a>
      </div>
<?php 
    } 
                
?>
  
  </div>
</div>

<?php
include("includes/footer.php");
?>