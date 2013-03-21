<?php include('connexion/connexion.php'); ?>

<section>
		<article>
		<h1>Animal concerné par le client</h1>
		<form method="POST" action="index.php">
		<fieldset>
			Réf animal
			<input name="refAnimal" type="num">
			<br/>
			Médaille d'entrée n°
			<input name="medaille_entree" type="text">
			<br/>
			Type d'entrée
			<select name="type_entree">
				<option value="0">-- choisissez --</option>
				<option value="4">Trouvé</option>
				<option value="5">Abandon</option>
				<option value="6">Retour Adoption</option>
				<option value="7">Confié provisoirement</option>
				<option value="8">Saisie</option>
				<option value="16">Perdu</option>
				<option value="17">Trouvé(Gardé)</option>
				<option value="18">Immatricule Volontaire</option>
				<option value="19">Portée à Eutha</option>
				<option value="20">Enquête</option>
				<option value="21">Depot de piege</option>
				<option value="22">Portée TR</option>
				<option value="23">Portée AB</option>
				<option value="24">Ab suite enquête</option>
				<option value="25">Prêt d'un panier</option>
				<option value="26">Piegeage chat</option>
			</select>
			<br/>
			N° client entrée
			<input name="numClientEntree" type="text"><br/>
			<div id="droite">
			<?php
			date_default_timezone_set('Europe/Paris');	
			$today_day = date("d/m/Y");
			$now=time();
			$today_hour=date("H:i",$now);
			?>
			Date
			<input name="date_entree" type="date" value ="<?php echo $today_day; ?>"> <br/>
			Heure
			<input name="heure_entree" type="time" value="<?php echo $today_hour; ?>"><br/> 
			Sortie prévue le
			<input name="date_sortie_prevu" type="text" autocomplete="off" placeholder="JJ-MM-AAAA">
			<br/>
			Accueilli par
			<select name="accueillant">
				<option value="0">-- choisissez --</option>	
				<option value="DUBRUL Jennifer">DUBRUL Jennifer</option>
				<option value="HIBON Emmanuelle">HIBON Emmanuelle</option>
				<option value="Le veterinaire du refuge">Le veterinaire du refuge</option>
				<option value="SI YOUCEF DOROTHEE">SI YOUCEF DOROTHEE</option>
				<option value="MARINE Prevots">MARINE Prevots</option>
				<option value="PACKET Philippe">PACKET Philippe</option>
				<option value="Sebastien">Sebastien</option>
			</select>
			<br/>
			</div>	
		</fieldset>
		<br/>
		<fieldset>
		Code espèce
		<select name="code_espece">
			<option value="0">-- choisissez --</option>
			<option value="1">Chien</option>
			<option value="2">Chat</option>
			<option value="3">Chiot</option>
			<option value="4">Chaton</option>
			<option value="5">Autre</option>
		</select><br/>
		
		
		Race
		<select name="race">
			<option value="0">-- choisissez --</option>
		<?php 
		$listRace = $bdd->query("SELECT refRace,race FROM races");
		while($data=$listRace->fetch())
		{?>
			<option value="<?php print($data[0]) ?>"><?php print($data[1]) ?></option>
		<?php	
		}?>

						
		</select>
		
		<br/>
		Sexe
		<select name="libelle_sexe">
			<option value="0">-- choisissez --</option>
			<option value="Mâle">Mâle</option>
			<option value="Femelle">Femelle</option>
		</select><br/>
		Stéril/Castré
		<select name="steril">
			<option value="0">-- choisissez --</option>
			<option value="non">Non</option>
			<option value="oui">Oui</option>
			<option value="non">Oui Alex</option>
			<option value="oui">Oui Autre Véto</option>
			<option value="non">Oui Véto Refuge</option>
		</select>
		Le
		<input name="date_sterilisation" type="text">

		
		<div id="droite">
		Collier
		<select name="collier">
			<option value="0">-- choisissez --</option>
			<option value="1">Métal LPA</option>
			<option value="2">Colson LPA</option>
			<option value="3">Cuir Naturel</option>
			<option value="4">Cuir Rouge</option>
			<option value="5">Cuir Vert</option>
			<option value="6">Nylon Fantaisie</option>
			<option value="7">Avec Tube Adresse</option>
			<option value="8">Avec Médaille LPA</option>
			<option value="9">Anti-Puces</option>
			<option value="10">A Lui</option>
			<option value="11">Harnais</option>
			<option value="12">Métallique</option>
		</select>
		<br/>
		N° de tatouage
		<input name="numero_tatouage" type="text"><br/>
		Emplacement Tatouage
		<select name="emplacement_tatouage">
			<option value="0">-- choisissez --</option>
			<option value="O.D.">O.D.</option>
			<option value="C.D.">C.D.</option>
			<option value="O.G.">O.G.</option>
			<option value="C.G.">C.G.</option>
		</select><br/>
		Puce Electronique
		<input name="numero_puce_electronique" type="text"><br/>
		</p>
		</div>
		</fieldset>
		<br/>
		<fieldset>		
		Vaccin 1
		<select name="vaccin1">
			<option value="0">-- choisissez --</option>
			<option value="1">CHPPi2 + Bb/Pi2</option>
			<option value="2">CHPPi2</option>
			<option value="3">Bb/Pi2</option>
			<option value="4">TC</option>
			<option value="5">HCP</option>
			<option value="6">FéligenCRP</option>
			<option value="7">CHPPi2</option>
			<option value="8">CHL</option>
			<option value="9">CHPL</option>
			<option value="10">CHPLR</option>
			<option value="11">CHPPiLR</option>
			<option value="12">Rage</option>
			<option value="13">Tetrafel(Typh-Cory-Chlamyd)</option>
			<option value="14">FelV(Leucose)</option>
			<option value="15">CHPPi2 L + Bb/Pi2</option>
			<option value="16">CHPPi2 L</option>
			<option value="17">CHPPi2 LR</option>
			<option value="18">CHPPi/L</option>
			<option value="19">CHPPi2 + Nobivac KC</option>
			<option value="20">CHP + Bb/Pi2</option>
			<option value="21">Nobivac KC</option>
		</select>
		Du
		<input name="du1" type="text" autocomplete="off" placeholder="JJ-MM-AAAA">
		<br/>
		Rappel le
		<input name="rappelLe1" type="text" autocomplete="off" placeholder="JJ-MM-AAAA">
		<br/>
		Vaccin 1 Rappel
		<select name="rappel_vaccin1">
			<option value="0">-- choisissez --</option>
			<option value="1">CHPPi2 + Bb/Pi2</option>
			<option value="2">CHPPi2</option>
			<option value="3">Bb/Pi2</option>
			<option value="4">TC</option>
			<option value="5">HCP</option>
			<option value="6">FéligenCRP</option>
			<option value="7">CHPPi2</option>
			<option value="8">CHL</option>
			<option value="9">CHPL</option>
			<option value="10">CHPLR</option>
			<option value="11">CHPPiLR</option>
			<option value="12">Rage</option>
			<option value="13">Tetrafel(Typh-Cory-Chlamyd)</option>
			<option value="14">FelV(Leucose)</option>
			<option value="15">CHPPi2 L + Bb/Pi2</option>
			<option value="16">CHPPi2 L</option>
			<option value="17">CHPPi2 LR</option>
			<option value="18">CHPPi/L</option>
			<option value="19">CHPPi2 + Nobivac KC</option>
			<option value="20">CHP + Bb/Pi2</option>
			<option value="21">Nobivac KC</option>
		</select>
		<br/>
		Fait le
		<input name="faitLe1" type="text" autocomplete="off" placeholder="JJ-MM-AAAA">
		<div id="droite">
		Vaccin 2
		<select name="vaccin2">
			<option value="0">-- choisissez --</option>
			<option value="1">CHPPi2 + Bb/Pi2</option>
			<option value="2">CHPPi2</option>
			<option value="3">Bb/Pi2</option>
			<option value="4">TC</option>
			<option value="5">HCP</option>
			<option value="6">FéligenCRP</option>
			<option value="7">CHPPi2</option>
			<option value="8">CHL</option>
			<option value="9">CHPL</option>
			<option value="10">CHPLR</option>
			<option value="11">CHPPiLR</option>
			<option value="12">Rage</option>
			<option value="13">Tetrafel(Typh-Cory-Chlamyd)</option>
			<option value="14">FelV(Leucose)</option>
			<option value="15">CHPPi2 L + Bb/Pi2</option>
			<option value="16">CHPPi2 L</option>
			<option value="17">CHPPi2 LR</option>
			<option value="18">CHPPi/L</option>
			<option value="19">CHPPi2 + Nobivac KC</option>
			<option value="20">CHP + Bb/Pi2</option>
			<option value="21">Nobivac KC</option>
		</select>
		Du
		<input name="du2" type="text" autocomplete="off" placeholder="JJ-MM-AAAA">
		<br/>
		Rappel le
		<input name="rappelLe2" type="text" autocomplete="off" placeholder="JJ-MM-AAAA">
		<br/>
		Vaccin 2 Rappel
		<select name="rappel_vaccin2">
			<option value="0">-- choisissez --</option>
			<option value="1">CHPPi2 + Bb/Pi2</option>
			<option value="2">CHPPi2</option>
			<option value="3">Bb/Pi2</option>
			<option value="4">TC</option>
			<option value="5">HCP</option>
			<option value="6">FéligenCRP</option>
			<option value="7">CHPPi2</option>
			<option value="8">CHL</option>
			<option value="9">CHPL</option>
			<option value="10">CHPLR</option>
			<option value="11">CHPPiLR</option>
			<option value="12">Rage</option>
			<option value="13">Tetrafel(Typh-Cory-Chlamyd)</option>
			<option value="14">FelV(Leucose)</option>
			<option value="15">CHPPi2 L + Bb/Pi2</option>
			<option value="16">CHPPi2 L</option>
			<option value="17">CHPPi2 LR</option>
			<option value="18">CHPPi/L</option>
			<option value="19">CHPPi2 + Nobivac KC</option>
			<option value="20">CHP + Bb/Pi2</option>
			<option value="21">Nobivac KC</option>
		</select>
		<br/>
		Fait le
		<input name="faitLe2" type="text" autocomplete="off" placeholder="JJ-MM-AAAA">
		</div>
		</fieldset>
		<br>
		<fieldset>
		Nom de l'animal
		<input name="nom_animal" type="text">
		<br/>
		Date de naissance si connue
		<input name="dateNaissAnimal" type="text" autocomplete="off" placeholder="JJ-MM-AAAA"><br/>
		Sinon, âge approximatif :<br/>
		<input name="age_approximatif_annees" type="text">Ans
		<input name="age_approximatif_mois" type="text">Mois
		<br/>
		Couleur principale
		<select name="couleur_principale">
			<option value="0">-- choisissez --</option>
		<?php 
		$listCouleurPrincipale = $bdd->query("SELECT refCouleur,couleurPrincipale FROM couleurPrincipale");
		while($data=$listCouleurPrincipale->fetch())
		{?>
			<option value="<?php print($data[0]) ?>"><?php print($data[1]) ?></option>
		<?php	
		}?>

						
		</select><br/>
		Couleur secondaire ou signe part.
		<select name="couleur_secondaire">
			<option value="0">-- choisissez --</option>
		<?php 
		$listCouleurSecondaire = $bdd->query("SELECT refCouleurDeux,couleurSecondaire FROM couleurSecondaire");
		while($data=$listCouleurSecondaire->fetch())
		{?>
			<option value="<?php print($data[0]) ?>"><?php print($data[1]) ?></option>
		<?php	
		}?>

						
		</select>
		<br/>
		Motif de l'abandon, du dépôt, ou du lieu de trouvaille
		<input name="motif_abandon_depot_lieu" type="text" style="width:350px; height:20px;">
		<br/>
		Observation :
		<input name="observation" type="text" style="width:585px; height:20px;">
		<br/>
		
		<div id="droite2">
		Taille de l'animal
		<select name="taille_animal">
			<option value="0">-- choisissez --</option>
			<option value="petite">Petite</option>
			<option value="moyenne">Moyenne</option>
			<option value="grande">Grande</option>
		</select><br/>
		Port des oreilles
		<select name="oreilles">
			<option value="0">-- choisissez --</option>
			<option value="tombantes">tombantes</option>
			<option value="droites">droites</option>
			<option value="mi-droites">mi-droites</option>
			<option value="droite cassée">droite cassée</option>
			<option value="gauche cassée">gauche cassée</option>
		</select><br/>
		Type de poils
		<select name="type_poil_animal">
			<option value="0">-- choisissez --</option>
			<option value="courts">Courts</option>
			<option value="mi-longs">Mi-longs</option>
			<option value="longs">Longs</option>
			<option value="frises">Frisés</option>
			
		</select>	
		<br/>
		Taille de la queue
		<select name="taille_queue_animal">
			<option value="0">-- choisissez --</option>
			<option value="longue">Longue</option>
			<option value="coupee">Coupée</option>
			<option value="mi-longue">Mi-longue</option>
			<option value="inexistante">Inexistante</option>
			<option value="cassee">Cassée</option>
		</select><br/>
		Etat de l'animal
		<select name="etat_animal">
			<option value="0">-- choisissez --</option>
			<option value="bon">Bon</option>
			<option value="moyen">Moyen</option>
			<option value="mauvais">Mauvais</option>
			<option value="tres mauvais">Tres mauvais</option>
			<option value="blesse">Blesse</option>
			<option value="a toiletter">A toiletter</option>
			<option value="mort">Mort</option>
		</select><br/> 
		</div>
		</fieldset>
		<br/>
		<fieldset>
		Mordeur
		<select name="mordeur">
			<option value="0">-- choisissez --</option>
			<option value="non">Non</option>
			<option value="oui">Oui</option>
		<INPUT type="checkbox" name="choix" value="1">Contrôle Sanitaire LPA		
		</select>
		<br/>
		Coordonnée de la personne mordue ou griffée :
		<input name="coordonnee" type="text" style="width:380px; height:20px;">
		<br/>
		RéfDplct 
		<select name="refdplct">
			<option value="0">-- choisissez --</option>
			<option value="2">Nuit</option>
			<option value="3">Ferie</option>
			<option value="4">Capture</option>
			<option value="5">Jour</option>
			<option value="6">Animal Apporte</option>
			<option value="7">Cadavre Autoroute</option>
			<option value="8">Vivant Autoroute</option>
			<option value="9">Même DPLCT</option>
		</select>
		<br/>
		Supplément
		<input name="supplement" type="text"><br/>
		Conventionné
		<select name="conventionne">
			<option value="0">-- choisissez --</option>
			<option value="non">Non</option>
			<option value="oui">Oui</option>	
		</select>
		Tarif
		<input name="tarif" type="text"><br/>
		TVA à 19.60%
		<input name="tva" type="text"><br/>
		Total à payer TTC
		<input name="totttc" type="text"><br/>
		<div id="droite3">
		Ville
		<select name="ville">
			<option value="0">-- choisissez --</option>
		<?php 
		$listVille = $bdd->query("SELECT refVille,ville FROM villes");
		while($data=$listVille->fetch())
		{?>
			<option value="<?php print($data[0]) ?>"><?php print($data[1]) ?></option>
		<?php	
		}?> 

						
		</select><br/>
		Code Postal
		<input name="codepostal" type="text"><br/>
		Kms parcourus
		<input name="km" type="text"><br/>
		TOTAL HT
		<input name="totht" type="text"><br/>
		Coeff
		<input name="coef" type="text"><br/>
		</div>
		</fieldset>
		<br/>
		<input type="submit" value="Ajouter un animal" name="bouton"/>	
		</form>
		</article>
		 
	</section>
