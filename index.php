<?php
//include("modele/modele_creat.php"); 
include("vue/vue_base.php");

if (isset($_GET['button']))
{
print("$get");	
	$choix = $_GET['button'];
	switch($choix)
	{
		case "Accueil" : 
			//echo 'toto';
			include("controleur/controle_accueil.php");
		break;
		case "Entree d'un animal" : include("controleur/controle_entree.php");
		break;
		case "Creation d'un client" : include("controleur/controle_creat.php");
		break;
		case "Sortie d'un animal" : include("controleur/controle_sortie.php");
		break;
		case "Chiots, chatons" : include("controleur/controle_chiots_chatons.php");
		break;
		case "Déclaration de perte" : include("controleur/controle_declaration_perte.php");
		break;
	}
}
else 
{
	if (isset($_POST["bouton"]))
	{
		//print("$post");
		$choix = $_POST['bouton'];
		switch($choix)
		{
			case "Ajouter un animal" :
				include("controleur/controle_accueil.php"); 
				
			break;
		
		}
	
	}
	else
	{
			include("controleur/controle_accueil.php");
	}
}

include("vue/vue_pied.php");

?>
