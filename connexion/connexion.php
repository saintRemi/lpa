<?php
try
{
    $bdd = new PDO('mysql:host=localhost;dbname=LPARoubaix', 'root', 'azerty59'); 
}
catch(Exception $e)
{
        die('Erreur : '.$e->getMessage());
}

//print("<p> connexin dans connexion.php ".$bdd);

//$con=mysql_connect("localhost","root","azerty59") or die("error connexion");


?>
