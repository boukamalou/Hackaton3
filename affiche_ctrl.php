<?php

$recherche = $_POST['id_cas'];

try
{
	$bdd = new PDO('mysql:host=localhost;dbname=covid;charset=utf8', 'stagiaire', 'stagiairealaji');
}
catch(Exception $e)
{
        die('Erreur : '.$e->getMessage());
}

$reponse = $bdd->query("SELECT new_cas, deces, guerison FROM cas WHERE id_cas = '$recherche'");
while ($donnees = $reponse->fetch())
{
    echo $donnees['new_cas'] . '<br />';
    echo $donnees['deces'] . '<br />';
    echo $donnees['guerison'] . '<br />';
}
$reponse->closeCursor();


?>