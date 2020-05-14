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

$reponse = $bdd->prepare("SELECT new_cas, deces, guerison FROM cas WHERE id_cas = '$recherche'");
$req->bindParam(':new_cas', PDO::PARAM_INT);
$req->bindParam(':deces', PDO::PARAM_INT);
$req->bindParam(':guerison', PDO::PARAM_INT);
$result = $reponse->execute();
$donnees = $result->fetchAll();


echo $donnees['new_cas'] . '<br />';
echo $donnees['deces'] . '<br />';
echo $donnees['guerison'] . '<br />';



