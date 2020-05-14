<?php

try {
  $bdd = new PDO('mysql:host=localhost;dbname=covid;charset=utf8', 'shefla', '357_Pancho');
  $bdd->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_WARNING);
}
catch(Exception $e){
  die('Erreur : '.$e->getMessage());
}
// ajout de données
if ($_SERVER['REQUEST_METHOD'] == 'POST'){
  try {
    $req = $bdd->prepare('INSERT INTO cas (
      id_pays_key, 
      id_cas, 
      new_cas, 
      deces, 
      guerison, 
      date, 
      created_by, 
      created_at, 
      updated_by, 
      updated_at
    ) VALUES (:id_pays, NULL, :new_cas, :deces, :guerison, :date_k, :nom, NOW(), :nom, NOW())');
    $req->bindParam(':id_pays', $_POST['id_pays']);
    $req->bindParam(':new_cas', $_POST['new_cas']);
    $req->bindParam(':deces', $_POST['deces']);
    $req->bindParam(':guerison', $_POST['guerison']);
    $req->bindParam(':date_k', $_POST['date']);
    $req->bindValue(':nom', 'anonymous');
    $ok = $req->execute();
  }
  catch(Exception $e){
    die('Erreur : '.$e->getMessage());
  }
}
// lecture données d'un pays
else {
  try {
    $req = $bdd->prepare('SELECT * FROM cas WHERE id_pays_key = :id');
    $req->bindParam(':id', $_GET['id']);
    $req->execute();
    $data = $req->fetchAll(PDO::FETCH_ASSOC);
    echo json_encode($data);
  }
  catch(Exception $e){
    die('Erreur : '.$e->getMessage());
  }
}