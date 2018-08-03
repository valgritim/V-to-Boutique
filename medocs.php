<!DOCTYPE html>
<html lang="fr">

	<head>
		<title>Véto boutique</title>
		<link rel="icon" type="image/png" href="images/paw.jpg"/>
		<meta charset="UTF-8">
		<link href="css/medoc.css" rel="stylesheet" type="text/css">
		<!--intégration du meta viewport-->
		<meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
		<!--intégration du Bootstrap CSS par CDN-->
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB" crossorigin="anonymous">
		<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.13/css/all.css" integrity="sha384-DNOHZ68U8hZfKXOrtjWvjxusGo9WQnrNx2sqG0tfsghAvtVlRW3tvkXWZh58N9jp" crossorigin="anonymous">
		<link href="https://fonts.googleapis.com/css?family=Vast+Shadow" rel="stylesheet"> 
		
	</head>
	<body>
		<div class="container-fluid pl-0">
			<nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top justify-content-center"><img src="images/chat.png" class="logoG">
			  
			  <div class="collapse navbar-collapse" id="navbarNav">
			  	<a class="navbar-brand" style="font-size:2rem; color:#fff;padding-right: 2rem;">Véto Boutique</a>
			    <ul class="navbar-nav" style="list-style-type:none;">
			      <li class="nav-item active">
			        <a class="nav-link" href="index.php">Accueil <span class="sr-only">(current)</span></a>
			      </li>
			      <li class="nav-item">
			        <a class="nav-link" href="alimentation.php">Alimentation</a>
			      </li>
			      <li class="nav-item">
			        <a class="nav-link" href="jouets.php">Jouets</a>
			      </li>
			      <li class="nav-item">
			        <a class="nav-link disabled" href="medocs.php">Médicaments</a>
			      </li>
			    </ul>
			    	<a href="user/register.php" style="position: absolute; right: 300px; margin-right: 6rem;color:#fff;"> S'inscrire <i class="far fa-edit"></i></a>
		   			<a href="user/login.php" style="position: absolute; right: 200px; margin-right: 2rem;color:#fff;"> Se connecter <i class="fas fa-sign-in-alt"></i></a>
		  			 <br/>
		   			<a href="user/login.php" style="position: absolute; right: 50px; margin-right: 2rem;color:#fff;"> Votre panier <i class="fas fa-cart-arrow-down"></i></a>
			  	</div>
			</nav>
		</div>
		<div class="container">
	    	<div class="row" style="margin-top: 15rem; color:#fff;">

	    		<?php


	    		require 'classes/Produit.php';
	    		print_r (Produit::getProduitByCategory("médicament"));


	    		?>

	    	</div>
    	</div>
		<!-- -----------FOOTER------ -->
	<div class="footer bg-dark">
		 
		    <a href="admin/verifLogin.php" style="margin-left: 2em;"> Administrateur <i class="fas fa-sign-in-alt"></i></a>
		    
  				
	</div>	
		

		
	<!--------SCRIPTS--------------------------------------------------------->

	
	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js" integrity="sha384-smHYKdLADwkXOn1EmN1qk/HfnUcbVRZyYmZ4qpPea6sjB/pTJ0euyQp0Mk8ck+5T" crossorigin="anonymous"></script>
	
</body>	
</html>