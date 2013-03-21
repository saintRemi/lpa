<section>	 
	<article>
	<fieldset>
		<form action="modele/modele_creat.php" method="POST">
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
				Téléphone fixe :
		<input id="fixe" type="text">
		</div>
		<br/>
	<input type ="submit" value="Valider" />
	</form>
	</fieldset>
	</article>
</section>	
