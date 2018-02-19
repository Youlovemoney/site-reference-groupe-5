<?php
try {
  $user = 'root';
  $password = 'shadow';
  $con= new PDO('mysql:host=localhost;dbname=references', $user, $password);
  $con->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);  
  } catch(PDOException $e) {
      echo 'ERROR: ' . $e->getMessage();
} 
?>

