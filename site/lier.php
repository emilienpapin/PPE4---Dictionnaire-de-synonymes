<?php

include("connexion.php");
?>
<html>
	<head>
		<title>Syn4Com - Dictionnaire</title>
		<meta http-equiv="content-type" content="text/html; charset=utf-8" />
		<meta name="description" content="" />
		<meta name="keywords" content="" />
		<!--[if lte IE 8]><script src="js/html5shiv.js"></script><![endif]-->
		<script src="js/jquery.min.js"></script>
		<script src="js/skel.min.js"></script>
		<script src="js/skel-layers.min.js"></script>
		<script src="js/init.js"></script>
		<noscript>
			<link rel="stylesheet" href="css/skel.css" />
			<link rel="stylesheet" href="css/style.css" />
			<link rel="stylesheet" href="css/style-xlarge.css" />
		</noscript>
	</head>
	<body>

		<!-- Header -->
			<header id="header" class="skels-layers-fixed">
				<h1><strong><a href="index.html">Syn4Com</a></strong>     - Emilien Papin</h1>
				<nav id="nav">
					<ul>
					
				
						
						<li><a href="recherche.php">Dictionnaire</a></li>
						<li><a href="inscription.php">Inscription</a></li>
						<li><a href="ajout.php">Ajouter</a></li>
						<li><a href="lier.php">Lier</a></li>
						
					</ul>
				</nav>
			</header>

		

			<!-- Three -->
				<section id="three" class="wrapper style1">
					<div class="container">
						<header class="major special">
						<h2>Lier deux mots : </h2><br>
							
							
						</header>
						</div>
						
						<section id="one" class="wrapper style1">
					<div class="container 75%">
						<div class="row 200%">
							<div class="6u 12u$(medium)">
								<header class="major">
								<?php
									 include("connexion.php");
session_start();
  
  
  
  if 			($_SESSION['role'] == "lieur" )
	{
?>

  <form name="lier" method="post" action="traitement_lier.php">
            Entrez le mot : <input type="text" name="mot"/> <br/>
            Entrez le synonyme : <input type="text" name="syn"/> <br/>
            <input type="submit" name="valider" value="OK"/>
      </form>
	  
	  <?php
	  
	}
	
	else {
		
		
		print 'Vous ne pouvez pas lier deux mots :( ';
	}
									
			?>					
								</header>
							</div>
							<div class="6u$ 12u$(medium)">
					
							</div>
						</div>
					</div>
				</section>
						
							
							
							<!-- Tableau -->
							
</section>
<!-- Fin tableau -->
								
							
						
					
				

			<!-- Four -->
				
		

	</body>
</html>