<?php

date_default_timezone_set('Europe/Paris');
include('connexion/connexion.php');

$refAnimal=$_POST["refAnimal"];
$numClientEntree=$_POST["numClientEntree"];
$type_entree=$_POST['type_entree'];
$code_espece=$_POST['code_espece'];
$sexe=$_POST['libelle_sexe'];
$collier=$_POST['collier'];
$num_tatouage=$_POST['numero_tatouage'];
$steril=$_POST['steril'];
$puceElect=$_POST['numero_puce_electronique'];
$vaccin1=$_POST['vaccin1'];
$rappel_vaccin1=$_POST['rappel_vaccin1'];
$vaccin2=$_POST['vaccin2'];
$rappel_vaccin2=$_POST['rappel_vaccin2'];
$nom_animal=$_POST['nom_animal'];
$motif=$_POST['motif_abandon_depot_lieu'];
$observation=$_POST['observation'];
$taille_queue=$_POST['taille_queue_animal'];
$mordeur=$_POST['mordeur'];
$accueil=$_POST['accueillant'];
$emplacement_tatouage=$_POST['emplacement_tatouage'];
$oreille=$_POST['oreilles'];
$taille=$_POST['taille_animal'];
$poils=$_POST['type_poil_animal'];
$etat=$_POST['etat_animal'];
$controleSanit=$_POST['choix'];
$conv=$_POST['conventionne'];
$race=$_POST['race'];
$ville=$_POST['ville'];
$couleurPrincipale=$_POST['couleur_principale'];
$couleurSecondaire=$_POST['couleur_secondaire'];
$dateNaissanceAnimal=strtotime($_POST['dateNaissAnimal']);
$dateNaissanceAnimal=date('Y-m-d',$dateNaissanceAnimal);
$dateSter=strtotime($_POST['date_sterilisation']);
$dateSter=date('Y-m-d',$dateSter);
$dateDu1=strtotime($_POST['du1']);
$dateDu1=date('Y-m-d',$dateDu1);
$dateRappelLe1=strtotime($_POST['rappelLe1']);
$dateRappelLe1=date('Y-m-d',$dateRappelLe1);
$dateFaitLe1=strtotime($_POST['faitLe1']);
$dateFaitLe1=date('Y-m-d',$dateFaitLe1);
$dateDu2=strtotime($_POST['du2']);
$dateDu2=date('Y-m-d',$dateDu2);
$dateRappelLe2=strtotime($_POST['rappelLe2']);
$dateRappelLe2=date('Y-m-d',$dateRappelLe2);
$dateFaitLe2=strtotime($_POST['faitLe2']);
$dateFaitLe2=date('Y-m-d',$dateFaitLe2);
$age1=$_POST['age_approximatif_annees'];
$age2=$_POST['age_approximatif_mois'];
$dateSortie=strtotime($_POST['date_sortie_prevu']);
$dateSortie=date('Y-m-d',$dateSortie);
//$heureSortie=strtotime($_POST['heure_sortie_prevu']);
//$heureSortie=date('Y-m-d',$heureSortie);
$coordonnee=$_POST['coordonnee'];

if(!$controleSanit) 
{
	$controleSanit=0;
}


try
{
	print("test");
	$requete="INSERT INTO animal(refAnimal,numClientEntree,numTypeEntree,codeEspece,sexe,refCollier,tatouage,steriliseeCastre,puceElect,refVaccinUn,refVaccinUnRappel,refVaccinDeux,refVaccinDeuxRappel,nom,motifEntree,observation,queue,mordeurGriffeur,accueil,emplacementTatouage,oreilles,taille,poils,etatAnimal,contSanitLPA,conventionne,refRace,refVille,refCouleur,refCouleurBis,dateEntree,heureEntree,dateNaissance,dateSter,dateVaccinUn,dateDeRappelUn,rappelUnFaitLe,dateVaccinDeux,dateDeRappelDeux,rappelDeuxFaitLe,ageUn,ageDeux,dateSortiePrevue,personneMordue) VALUES($refAnimal,$numClientEntree,$type_entree,$code_espece,'$sexe',$collier,'$num_tatouage','$steril','$puceElect',$vaccin1,$rappel_vaccin1,$vaccin2,$rappel_vaccin2,'$nom_animal','$motif','$observation','$taille_queue','$mordeur','$accueil','$emplacement_tatouage','$oreille','$taille','$poils','$etat',$controleSanit,'$conv',$race,$ville,$couleurPrincipale,$couleurSecondaire,curdate(),now(),'$dateNaissanceAnimal','$dateSter','$dateDu1','$dateRappelLe1','$dateFaitLe1','$dateDu2','$dateRappelLe2','$dateFaitLe2',$age1,$age2,'$dateSortie',$coordonnee)";
	print($requete);
	$nb=$bdd->exec($requete);
	print($nb);
	print("aprés test $nb ligne inserée");
		
}
catch(Exception $e)
{
	print("<p>catch erreur</p>");
	die('Erreur : '.$e->getMessage());
}


?>












