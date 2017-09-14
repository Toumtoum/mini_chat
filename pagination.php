<?php
session_start();
$_SESSION['pseudo'] = $_POST['pseudo'];
 ?>
<?php

try{
  $bdd = new PDO('mysql:host=localhost;dbname=test;charset=utf8', 'root' , 'qX7-xM4-z6z-vPb',array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
}
catch (Exception $e)
{
  die ('Erreur : ' .$e->getMessage());
}
$retoutTotal = $bdd -> query('SELECT COUNT(*) AS total FROM minichat');
$donnees = $retoutTotal -> fetch();
$total = $donnees['total'];
