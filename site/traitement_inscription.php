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
									
									<p><b>
			<?php
	 include("connexion.php");
	  if(isset($_POST['valider'])){
            $login=$_POST['login'];
			$mdp=sha1($_POST['mdp']);
			$role=$_POST['role'];
			
			if ($login!='' && $mdp!='da39a3ee5e6b4b0d3255bfef95601890afd80709'){
            
              $connexion->query("
                INSERT INTO utilisateur (login, mdp, role) VALUES ('$login', '$mdp', '$role');
              ");

              echo "Vous êtes désormais inscrit.";
	  }
	  
	  else { 
	  
		  echo "Vous devez remplir tous les champs !";
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

