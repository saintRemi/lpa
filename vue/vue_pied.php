<?php
	
	if(isset($_GET['button'])) 
	{
		$cat = $_GET['button'];
	}
	else
	{
		$cat="Accueil";
	}
	
/*$nb_min = 1;
$nb_max = 10;
$nombre = mt_rand($nb_min,$nb_max);

	switch($nombre)
	{
		case 1 : $text = "Le site codé en slip chaussette";
		break;
		case 2 : $text = "Luke, en fait c'est moi ton père";
		break;
		case 3 : $text = "Ne préserve pas la couche d'ozone";
		break;
		case 4 : $text = "Bisous bisous";
		break;
		case 5 : $text = "Meilleur qu'un pancake dans la neige";
		break;
		case 6 : $text = "Lpa ou conduire il faut choisir";
		break;
		case 7 : $text = "Reconnu d'inutilité publique";
		break;
		case 8 : $text = "La Lpa nous perdra";
		break;
		case 9 : $text = "Efficace et pas chère, c'est la Lpa que je préfère";
		break;
		case 10 : $text = "Suzette fais moi des crèpes,Suzette fais moi des crèpes ...";
		break;
	}*/

?>
	<footer>
		<p> <?php print $cat;?> - Organisation LPA</p>
	</footer>
</body>
</html>
