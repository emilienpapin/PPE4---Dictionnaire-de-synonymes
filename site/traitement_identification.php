<?php
	include('connexion.php');
	if(isset($_POST['login']) and isset($_POST['mdp']) )
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
			print("Ca va bien !");
		}
		else
		{
			print("Pas de résulat !");
		}
	}
	else
	{
		print("Ca va pas !");
	}
	
	
?>

<html>
<a href="indexx.php"> accueil</a>