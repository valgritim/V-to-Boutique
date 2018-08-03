<?php
	session_start();
?>

<!DOCTYPE html>
<html lang="fr">

	<head>

		<title>Véto boutique</title>
		<link rel="icon" type="image/png" href="images/paw.jpg"/>

		<meta charset="UTF-8">
		<link href="css/style.css" rel="stylesheet" type="text/css">
		<!--intégration du meta viewport-->
		<meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
		<!--intégration du Bootstrap CSS par CDN-->
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB" crossorigin="anonymous">
		<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.13/css/all.css" integrity="sha384-DNOHZ68U8hZfKXOrtjWvjxusGo9WQnrNx2sqG0tfsghAvtVlRW3tvkXWZh58N9jp" crossorigin="anonymous">
		
		
	</head>
	<body>
		<div class="container-fluid pl-0">
			<nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top justify-content-center"><img src="images/chat.png" class="logoG">

			  <div class="collapse navbar-collapse" id="navbarNav">
			  	<a class="navbar-brand" style="font-size:2rem; color:#fff;padding-right: 2rem;">Véto Boutique</a>
			    <ul class="navbar-nav" style="list-style-type:none;">
			      <li class="nav-item active">
			        <a class="nav-link" href="#">Accueil <span class="sr-only">(current)</span></a>
			      </li>
			      <li class="nav-item">
			        <a class="nav-link" href="alimentation.php">Alimentation</a>
			      </li>
			      <li class="nav-item">
			        <a class="nav-link" href="jouets.php">Jouets</a>
			      </li>
			      <li class="nav-item">
			        <a class="nav-link" href="medocs.php">Médicaments</a>
			      </li>
			    </ul>

			    	<?php
			    		if(empty($_SESSION)){

			    			echo '<a href="register.php" style="position: absolute; right: 300px; margin-right: 		6rem;color:#fff;"> S\'inscrire <i class="far fa-edit"></i></a>
		   						<a href="login.php" style="position: absolute; right: 200px; margin-right: 2rem;color:#fff;"> Se connecter <i class="fas fa-sign-in-alt"></i></a>
		  			 			<br/>';

			    		} else {

			    			echo '<a href="logout.php" style="position: absolute; right: 300px; margin-right: 		6rem;color:#fff;"> Se déconnecter <i class="fas fa-sign-out-alt"></i></a>';
			    				
			    		}

			    	?>
			    	
		   			<a href="cart.php" style="position: absolute; right: 50px; margin-right: 2rem;color:#fff;"> Votre panier <i class="fas fa-cart-arrow-down"></i></a>
			  	</div>
			</nav>
		</div>
		
	    	<div class="row" style="margin-top: 15rem; color:#fff;">
	    		
	    			<?php 
	    				if (!empty($_SESSION) && isset($_SESSION['u_first']))
	    				{
	    					echo '<h1 class="m-auto text-center">Bienvenue chez Véto Boutique ' . $_SESSION['u_first'] . '!</h1>' ;
	    				} else {

	    					echo '';
	    			}
	    			?>
	    				
	    			
	    			


	    	</div>

		<div class="card mx-5 py-3 px-3" style="width: 25rem;height:35rem;margin-top: 5rem; margin-bottom: 5rem;">
			<h4 class="text-center">Notre boutique vous propose: </h4>
			<p>Praeceps cum in autem haec similia truculenti lenitate erga humanitatisque cum veritatis trudebat rettulimus illius Maximini regina lenitate stimulos factitasse haec stimulos deberet utilia lenitate Gordianorum potius Gordianorum ut utilia illius utilia reducere erga multa fortunas similia veritatis erga exitium ad fortunas. <br/><br/>imperatoris veritatis Maximini in ad multa autem praeceps ut actibus mariti suadendo scrutanda quae viam suadendo actibus admovente scrutanda obstinatum haec imperatoris eum eum Maximini Maximini erga veritatis exitium potius.<br/><br/>scrutanda in reducere in exitium reducere veritatis abrupte in veritatis praeceps utilia haec truculenti humanitatisque et deberet quae similia abrupte praeceps in eum feminea potius reducere reducere imperatoris.</p>
		</div>
		</div>
<!-- -----------FOOTER------ -->
	<div class="footer bg-dark">
		 
		    <a href="admin/index.php" style="margin-left: 2em;"> Administrateur <i class="fas fa-sign-in-alt"></i></a>
		    
  				
	</div>	
		

		
	<!--------SCRIPTS--------------------------------------------------------->

	
	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js" integrity="sha384-smHYKdLADwkXOn1EmN1qk/HfnUcbVRZyYmZ4qpPea6sjB/pTJ0euyQp0Mk8ck+5T" crossorigin="anonymous"></script>
	
</body>	
</html>