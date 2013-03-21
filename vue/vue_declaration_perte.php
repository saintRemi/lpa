<html>
<body>
	<section>
	<article>
	<h1>Déclaration de perte d'un animal</h1>
	<fieldset>
	Recherche d'un client qui a deja perdu un animal 
	<select name="client">
			<option value=""></option>
			<option value=""></option>
	</select>
	</fieldset>
	<br/>
	<fieldset>
	N°client 
	<input id="num" type="text" name="no"/>
	<br/>
	Civilité
	<select name="civilite">
		<option value="">Mlle</option>
		<option value="">Mme</option>
		<option value="">Mr</option>
	</select><br/>
	Nom
	<input id="nom" type="text"/><br/>
	Prénom
	<input id="prenom" type="text"><br/>

	<div id="droite">
	Adresse
	<input id="adresse" type="text"></textarea><br/>

	Ville
	<select name="ville">
	</select><br/>
	Code Postal
	<input id="CP" type="text"><br/>
	Téléphone portable :
	<input id="portable" type="text"><br/>
	ou :
	<input id="portableBis" type="text">
	</div>
	<br/>
	</fieldset>
	<br/>
	<fieldset>
	Ref de l'animal
	<input id="ref" type="text"/><br/>
	Type d'entrée
	<select name="type_entree">
			<option value=""></option>
			<option value=""></option>
	</select>
	<br/>
	N° Perdeur
	<input id="numPerdeur" type="text"/><br/>
	Déclaré le
	<input id="declaration" type="date"/><br/>
	Acceuilli par
	<select name="acceuil">
			<option value=""></option>
			<option value=""></option>
	</select>
	<br/>
	<div id="droite12">
	Médaille Matricule N°
	<input id="num_medaille" type="text"/><br/>
	<br/>
	<br/>
	à
	<input id="date" type="date"/><br/>
	</div>
	</fieldset>
	<br/>
	<fieldset>
	Perdu le
	<input id="date_perdu" type="date"/><br/>
	Code espèce
	<select name="code_espece">
			<option value=""></option>
			<option value=""></option>
	</select>
	<br/>
	Sexe
	<select name="sexe">
			<option value=""></option>
			<option value=""></option>
	</select>
	<br/>
	Collier
	<select name="collier">
			<option value=""></option>
			<option value=""></option>
	</select>
	<br/>
	N° de tatouage
	<input id="num_tatouage" type="text"/><br/>
	Nom
	<input id="nom" type="text"/><br/>
	Age approximatif
	<input id="age" type="text"/>
	An(s)
	<br/>
	Taille de l'animal
	<select name="taille">
			<option value=""></option>
			<option value=""></option>
	</select>
	<br/>
	Type de poils
	<select name="typePoils">
			<option value=""></option>
			<option value=""></option>
	</select>
	<br/>
	Etat de l'animal
	<select name="etatAnimal">
			<option value=""></option>
			<option value=""></option>
	</select>
	<br/>	
	Couleur principale
	<select name="couleurPrinci">
			<option value=""></option>
			<option value=""></option>
	</select>
	<br/>
	Don ou somme versée
	<input id="don" type="don" style="width:130px; height:20px;"/>
	<br/>
	DéclaréRetrouvé
	<select name="declareRetrouve">
			<option value=""></option>
			<option value=""></option>
	</select>
	<br/>
	<div id="droite13">
	Lieu de perte
	<input id="lieu" type="text" style="width:200px; height:20px;"  /><br/>
	Race
	<select name="race">
			<option value=""></option>
			<option value=""></option>
	</select>
	<br/>
	Stéril/castré
	<select name="steril">
			<option value=""></option>
			<option value=""></option>
	</select>
	<br/>
	PuceElect
	<input id="puce" type="text"/><br/>
	Emplacement du tatouage
	<select name="emplacementTatou">
			<option value=""></option>
			<option value=""></option>
	</select>
	<br/>
	<br/>
	<input id="mois" type="text"/>Mois<br/>
	Port des oreilles
	<select name="portDesOreilles">
			<option value=""></option>
			<option value=""></option>
	</select>
	<br/>
	Taille de la queue
	<select name="tailleQueue">
			<option value=""></option>
			<option value=""></option>
	</select>
	<br/>
	<br/>
	Couleur secondaire
	<select name="couleurSecondaire">
			<option value=""></option>
			<option value=""></option>
	</select>
	<br/>
	Observations :
	<input id="observation" type="text"/>
	<br/>	
	</div>
	</fieldset>
	<br/>
	<fieldset>
	Animaux déja perdus par ce client
	<br/>
	<input type="submit" value="Fiche précédente" name="button"/><br/>
	<input type="submit" value="Nouvelle fiche" name="button"/><br/>
	
	<div id="droite14"> 
	<input type="submit" value="Fiche suivante" name="button"/><br/>
	<input type="submit" value="Trouve ?" name="button"/><br/>
	</div>
	</fieldset>
	</article>
</section>
</body>
</html>
