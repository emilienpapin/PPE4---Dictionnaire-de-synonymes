<?php
  include("connexion.php");

  
  session_start ();
  
  if 			($_SESSION['role'] == "ajouteur" )
	{
?>

<html>
  <head><title>Ajouter un mot</title></head>
    <body>
      <form name="ajouter" method="post" action="ajout.php">
            Entrez le mot : <input type="text" name="mot"/> <br/>
            <input type="submit" name="valider" value="OK"/>
      </form>
    </body>
</html>

<?php
  if(isset($_POST['valider'])){
            $mot=$_POST['mot'];

            $verification=$connexion->query("
            SELECT libelle
            FROM mot
            WHERE libelle='$mot'
            ");

            $count=$verification->rowCount();

            if ($count==1){
              echo "Le mot existe déjà";
            }
            else {
              $connexion->query("
                INSERT INTO mot VALUES ('', '$mot');
              ");

              echo "Le mot a été ajouté";
            }
  }
  
  
	}
	
 else {
              

              echo "merde";
            }
?>
