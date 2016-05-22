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
						<h2>Rechercher des synonymes</h2><br>
							
							
						</header>
						</div>
						
						<section id="one" class="wrapper style1">
					<div class="container 75%">
						<div class="row 200%">
							<div class="6u 12u$(medium)">
								<header class="major">
									
									<p><b>
			<form name="recherche" method="post" action="recherche.php">
            Entrez le mot : <input type="text" name="mot"/> <br/>
            <input type="submit" name="valider" value="OK"/>
        </form>
		</b></p>
								</header>
							</div>
							<div class="6u$ 12u$(medium)">
							<?php
  if(isset($_POST['valider'])){
            $mot=$_POST['mot'];
          
		  
		    $requete1=$connexion->query("
			SELECT id
			FROM mot
			WHERE libelle='$mot';
            ");
while ($LidMot = $requete1->fetch(PDO::FETCH_ASSOC))
{
    $idMot = $LidMot['id'];
}
			
			$requete2=$connexion->query("
			SELECT idSyn
			FROM synonyme
			WHERE idMot=$idMot;
			");
			
while ($LidSyn = $requete2->fetch(PDO::FETCH_ASSOC))
{
    $idSyn=$LidSyn['idSyn']; 
   
  $synonymes=$connexion->query("SELECT libelle FROM mot WHERE id=$idSyn;");
  
  while ($synonyme = $synonymes->fetch(PDO::FETCH_ASSOC))
{
  echo $synonyme['libelle']; ?><html><br></html><?php
}			
}		
		
		
		
		
  }
  
  
  
?>
							</div>
						</div>
					</div>
				</section>
						
							
							
							<!-- Tableau -->
							
</section>
<!-- Fin tableau -->
								
							
						
					
				

			<!-- Four -->
				<section id="four" class="wrapper style3 special">
					<div class="container">
						<!-- <header class="major">
							<h2></h2>
							<p></p>
						</header> -->
						<ul class="actions">
							<li><a href="#" class="button special big">Haut de page</a></li>
						</ul>
					</div>
				</section>

		

	</body>
</html>