<?php
include("includes/header.php");
?>

    <link rel="stylesheet" type="text/css" href="css/panier.css">
    
  </head>

  <body>

<?php
include("includes/top_nav.php");
?>

	<div class="container-fluid">
		<h1>Votre Panier</h1>

		<div class="row">

			<div class="col-md-8 ">
    		<div class="panier">
    			<table class="table table-striped">
   <?php
    if (isset($_SESSION["list"]))
{
  foreach ($_SESSION["list"] as $value){
    print $value . "<br>";
  }
}
?>

    				<thead>
    					<tr>
		            <th scope="col">Produit</th>
		            <th scope="col">Prix</th>
		            <th scope="col">Quantite</th>
		            <th scope="col">Total</th>
		          </tr>
  					</thead>

  					<tbody>
		          <tr>
		            <th scope="row">sac a dos</th>

		            <td></td>
		            <td></td>
		            <td></td>
		          </tr>

		          <tr>
		            <th scope="row">2</th>
		            <td></td>
		            <td></td>
		            <td></td>
		          </tr>
		        </tbody>
					</table>
    		</div>
  		</div>
  		

			<div class="col-md-4 ">
    		<div class="recap">
    			<h2>Total</h2>
    			<table class="table table-bordered" cellspacing="0">
    				<tbody>
		          <tr>
		            <th scope="row">Nb de Produit</th>
		            <td>1</td>
		          </tr>
		          <tr>
		            <th scope="row">Total (tva incluse)</th>
		            <td></td>
		          </tr>

		         </tbody>
		        </table>

    		</div>
  		</div>


		</div>

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
