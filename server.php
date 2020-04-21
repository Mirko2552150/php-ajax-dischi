<?php

  include 'data.php'; // file dove abbiamo un ns database
  header('Content-Type: application/json'); // ci permette di visualizzare meglio il conntenuto JSON
  echo json_encode($albums); // trasformiamo

 ?>
