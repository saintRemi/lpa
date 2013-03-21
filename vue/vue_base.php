<?php

if(isset($_GET['button'])) 
{
	$cat = $_GET['button'];
}
else
{
	$cat="Accueil";
}

?>
<! DOCTYPE HTML >
<html>
<head>
	<link rel="stylesheet" href="css/style.css" type="text/css" >
	<title><?php print $cat?></title>
</head>
<body>
	<header>
		<h1> Bienvenue sur la page d'accueil du nouvel outil de gestion de la LPA </h1>
	</header>
	<nav>
		<form method="GET" action="index.php">
		<ul>
			<li><input type="submit" value="Accueil" name="button"/></li>
			<li><input type="submit" value="Entree d'un animal" name="button"/></li>
			<li><input type="submit" value="Creation d'un client" name="button"/></li>
			<li><input type="submit" value="Sortie d'un animal" name="button"/></li>
			<li><input type="submit" value="Chiots, chatons" name="button"/></li>
			<li><input type="submit" value="Déclaration de perte" name="button"/></li>
			
		</ul>
		</form>
	</nav>
<!-- class="bouton_menu"-->
