<?php
  include("connexion.php");
?>

<html>
    <head><title>Ajouter in mot</title></head>
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
            $connexion->query("
              INSERT INTO mot VALUES ('', '$mot');
            ");

  }
?>


</html>
</body>
