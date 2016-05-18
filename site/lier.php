<?php
  include("connexion.php");
  
   session_start ();
  
  if 			($_SESSION['role'] == "lieur" )
	{
?>

<html>
  <head><title>Ajouter un mot</title></head>
    <body>
      <form name="lier" method="post" action="lier.php">
            Entrez le mot : <input type="text" name="mot"/> <br/>
            Entrez le synonyme : <input type="text" name="syn"/> <br/>
            <input type="submit" name="valider" value="OK"/>
      </form>
    </body>
</html>

<?php
  if(isset($_POST['valider'])){
            $mot=$_POST['mot'];
            $syn=$_POST['syn'];

//vérification de l'existence du premier mot
            $verificationMot=$connexion->query("
            SELECT libelle
            FROM mot
            WHERE libelle='$mot'
            ");
            $countMot=$verificationMot->rowCount();

//vérification du deuxième mot
            $verificationSyn=$connexion->query("
            SELECT libelle
            FROM mot
            WHERE libelle='$syn'
            ");
            $countSyn=$verificationSyn->rowCount();

//si les mots existent dans la bdd
            if ($countMot==1 && $countSyn==1){
//vérifier qu'ils ne sont pas déjà liés
//??? code ???//vérification "déjà lié" : selectionner idmot et idsyn des deux mots saisis (A FAIRE)
// lier... -> selectionner id , l'assigner dans une variable et faire un insert

              $requete1=$connexion->query("
              SELECT id
              FROM mot
              WHERE libelle='$mot';
              ");

				while ($recupIDmot = $requete1->fetch(PDO::FETCH_ASSOC))
{
    $idMot = $recupIDmot['id'];
}
            
              
              

              $requete2=$connexion->query("
              SELECT id
              FROM mot
              WHERE libelle='$syn';
              ");
             
		while ($recupIDsyn = $requete2->fetch(PDO::FETCH_ASSOC))
{
    $idSyn = $recupIDsyn['id'];
}
           
              

              $connexion->query("
                INSERT INTO synonyme (idMot, idSyn) values ('$idMot', '$idSyn');
              ");

              $connexion->query("
                INSERT INTO synonyme (idMot, idSyn) values ('$idSyn', '$idMot');
              ");



              echo "Les mots sont désormais définis comme étant synonymes.";

            }


// si les mots n'existent pas dans la bdd
            else {
              echo "Au moins un des mots n'existe pas. Ajouter des mots ?";
            }
  }
  
  
  
  
	} 
	else {
              

              echo "merde";
            }
?>
