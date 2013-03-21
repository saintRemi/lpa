<?php

//echo 'toto dans vue accueil';
include('connexion/connexion.php'); 
echo("</br>");
echo("</br>");

print("<section>
	<article>
		<p>Voici les vaccins du jour :</p>");

try
{

	//$reponse = $bdd->query("SELECT refAnimal,refVaccinUn,refVaccinDeux,refVaccinUnRappel,refVaccinDeuxRappel FROM  animal WHERE dateVaccinUn = CURDATE() or dateVaccinDeux = CURDATE() or dateDeRappelUn = CURDATE() or dateDeRappelDeux = CURDATE()");
	//$reponse = $bdd->query("SELECT refVaccinUn FROM  animal WHERE dateVaccinUn = CURDATE()");
	$reponse = $bdd->query("SELECT refAnimal,vaccin 
				FROM  animal,vaccins 
				WHERE (vaccins.refVaccin = animal.RefVaccinUn OR vaccins.refVaccin = animal.RefVaccinDeux OR vaccins.refVaccin = animal.RefVaccinUnRappel OR  vaccins.refVaccin = animal.RefVaccinDeuxRappel)
				AND (dateVaccinUn = CURDATE() OR dateVaccinDeux = CURDATE() OR dateDeRappelUn = CURDATE() OR dateDeRappelDeux = CURDATE())");
	
}
catch(Exception $e)
{
	print("<p>catch erreur</p>");
	die('Erreur : '.$e->getMessage());
} 

while($donnees=$reponse->fetch())
{
	//echo "L animal de reference {$donnees['refAnimal']} doit effectuer le vaccin numero {$donnees['refVaccinUn']}";

	echo "L animal de reference {$donnees['refAnimal']} doit effectuer le vaccin {$donnees['vaccin']}";
	echo ("<br/>");
}



?>

 
	<article>
		<p>Voici les fils a retirer pour la journée :</p>
	</article>
</section> 

