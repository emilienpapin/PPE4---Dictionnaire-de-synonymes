<?php

include("connexion.php");

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
  ?>
  
	<html>
  <a href="index.html">Retour à l'accueil</a>
  </html>