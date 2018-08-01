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
  		<?php echo $donnees['nom_article']; ?>

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

<?php
include("includes/footer.php");
?>
