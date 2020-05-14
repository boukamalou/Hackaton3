<?php

// ajout de données
if ($_SERVER['REQUEST_METHOD'] == 'POST'){
  echo '<pre>'.print_r($_POST, true).'</pre>';
}
else {

}
/*
INSERT INTO `cas` (
  `id_pays_key`, 
  `id_cas`, 
  `new_cas`, 
  `deces`, 
  `guerison`, 
  `date`, 
  `created_by`, 
  `created_at`, 
  `updated_by`, 
  `updated_at`
) VALUES ('1', '2', '3', '4', '5', '2020-05-14', 'Jo', '2020-05-14', 'Jo', '2020-05-14'); 
*/