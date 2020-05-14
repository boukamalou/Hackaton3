<?php

try
{
	$bdd = new PDO('mysql:host=localhost;dbname=covid;charset=utf8', 'stagiaire', 'stagiairealaji');
}
catch(Exception $e)
{
        die('Erreur : '.$e->getMessage());
}


$reponse = $bdd->prepare("INSERT INTO * FROM cas WHERE id_cas = '$recherche' ");
$req->bindParam(':new_cas', PDO::PARAM_INT);
$req->bindParam(':deces', PDO::PARAM_INT);
$req->bindParam(':guerison', PDO::PARAM_INT);
$req->bindParam(':date_k', PDO::PARAM_STR);
$result = $reponse->execute();
$donnees = $result->fetchAll();


