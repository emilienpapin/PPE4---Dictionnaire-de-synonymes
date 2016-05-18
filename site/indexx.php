<?php
  include("connexion.php");
?>

<html>

    <head><title>Rechercher synonymes :</title></head>
    <body>
	<a href="ajout.php"> ajout</a>
	<a href="lier.php"> alier</a>
      <form name="recherche" method="post" action="index.php">
            Entrez le mot : <input type="text" name="mot"/> <br/>
            <input type="submit" name="valider" value="OK"/>
        </form>
      </body>
</html>

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
