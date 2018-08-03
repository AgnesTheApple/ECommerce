<?php
include("includes/header.php");
?>

 <link rel="stylesheet" type="text/css" href="css/inscription.css">
    
  </head>

  <body>

<?php
include("includes/top_nav.php");
?>

	
	<div class="container-fluid"> 
		<h1>INSCRIPTION</h1>

		<form id="formulaire" action="requete_inscription.php" method ="POST" name="inscription" novalidate autocomplete="off">
			<div class="row">
  			<div class="col-xs-6">
    			 <input type="text" class="form-control input-lg" placeholder="Prenom" name="prenom" required ng-minlength="2" ng-maxlength="15">
        </div>
  		
  		
  			<div class="col-xs-6">
    			 <input type="text" class="form-control input-lg" placeholder="Nom" name="nom" required ng-minlength="2" ng-maxlength="15">
        </div>
  		</div>

  		<div class="row"> 
        <div class="col-xs-6">
          <input type="text" class="form-control input-lg" name="age" placeholder="Age" required>
        </div>
     	</div> 

      <div class="row"> 
        <div class="col-xs-6">
          <input type="password" class="form-control input-lg" name="mot_de_passe" placeholder="Mot de passe" required>
        </div>
      </div>

     	<div class="row"> 
       	<div class="col-xs-12">
          <input type="text" class="form-control input-lg" name="adresse_postale" id="Adresse" placeholder="Adresse">
        </div>
    	</div> 

      <div class="row">
        <div class="col-xs-6">
          <input type="text" class="form-control input-lg" name="adresse_mail" placeholder="E-mail" required>
        </div>
      </div>

      <div class="row"> 
      	<div class="col-xs-6">
      		<!-- <label for="ville">Choisissez Votre Ville</label> -->
       		<select class="form-control input-lg" name='id_ville'>
             <?php
                
               /* try
{
  $bdd = new PDO('mysql:host=localhost;dbname=ecommerce;charset=utf8', 'root', '');
}
catch (Exception $e)
{
        die('Erreur : ' . $e->getMessage());
}*/
                
               $categorie = $bdd->query('SELECT * from ville ');
               while($donnees = $categorie->fetch()){
                   ?>
                <option value="<?php echo $donnees['id_ville'];?>">
                    <?php 
                    echo $donnees['nom_ville']; 
                    ?>
                </option>
                <?php 
               } 
                
                ?>
          </select>
        </div>
      </div>

 			<button type="submit" class="btn btn-primary btn-lg">Inscription</button>

  	</form>
	</div>
		

<div class="footer">

  
   <p><a href="https://github.com/AgnesTheApple" target="_blank">Mentions Legales / CGU et CGV</a></p>
    <p><a href="https://github.com/AgnesTheApple" target="_blank">Equipe et Contact</a></p>

    <p id="copy"><i class="far fa-copyright"></i>My Travel Stuff</p>
</div>
    
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
<script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
<script type="text/javascript" src="script.js"></script>  

</body>
</html>