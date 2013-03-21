

<?php
include('connexion/connexion.php'); 

/* if (isset($_REQUEST['no']))
{
	$requete="INSERT INTO client VALUES (num =".$_REQUEST['no']." ,civilite =".$_REQUEST['civilite'].", nom=".$_REQUEST['nom']." , prenom=".$_REQUEST['prenom']." , adresse=".$_REQUEST['adresse']." , codepostal=".$_REQUEST['CP']." , tel-fixe=".$_REQUEST['fixe']." , tel-port=".$_REQUEST['portable'].")"; // requête
}
  mysql_query($requete,$connection); // envoi de la requête
 */


print("test");
$reponse = $bdd->query('SELECT * FROM Adresses '); 
echo '<ul>';
/* while ( */
$donnees = $reponse->fetch();
print($donnees[1]);

/*{
    echo '<li>' . $donnees['NomA'] '</li>';
}
echo '</ul>'; */

?>





