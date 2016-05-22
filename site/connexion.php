<?php

try {

  $connexion = new PDO('mysql:host=X.X.X.X; dbname=x.x', 'x.x', 'x');

}

catch (Exception $exception) {

  die ('Erreur : ' . $exception->getMessage());
}




?>
