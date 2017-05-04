<?php
  try {
      $bdd = new PDO ('mysql:host=localhost;dbname=JORDAN','samsql', 'samphp08');
  }
  catch (PDOException $e) {
      die('Error: '.$e->getMessage());
  }
?>
