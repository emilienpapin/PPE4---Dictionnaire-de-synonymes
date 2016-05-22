<?php

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
					
							
							
						</header>
						</div>
						
						<section id="one" class="wrapper style1">
					<div class="container 75%">
						<div class="row 200%">
							<div class="6u 12u$(medium)">
								<header class="major">
									
			<?php
	include('connexion.php');
if(empty($_POST['login']) || empty($_POST['mdp']) )
	{
		print("Echec de l'authentification !");
	}
	else
	{
		$login = $_POST['login'];
		//$mdp = $_POST['mdp'];
		$mdp = sha1($_POST['mdp']);
		$resultat = $connexion->query('SELECT role FROM utilisateur WHERE login = "'.$login.'" AND mdp = "'.$mdp.'";');
		if($resultat){
			$ligne = $resultat->fetch();
			session_start();
			$_SESSION['login'] = $login;
			$_SESSION['role'] = $ligne['role'];
			print("Vous êtes désormais connecté.");
		}
		else
		{
			print("");
		}
		
	}
	
	
?>
		</b></p>
								</header>
							</div>
							
						</div>
					</div>
				</section>
						
					
							
						
					
				

			<!-- Four -->
				

		

	</body>
</html>
