<?php

try {

  $connexion=new PDO('mysql:host=X.X.X.X; dbname=x.X', 'X.X', 'X');

}

catch (Exception $exception) {

  die ('Erreur : ' . $exception->getMessage());
}




?>
