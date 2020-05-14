<?php

$recherche = $_POST['id_cas'];

        $db = new PDO('mysql:host=localhost;dbname=covid','stagiaire','stagiairealaji');

            $sql = "SELECT * FROM cas WHERE id_cas = '$recherche' ";
            $req = $db->prepare($sql);
            $result = $req->execute(); 
            echo $result; 
            



?>