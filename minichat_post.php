<?php

try{
  $bdd = new PDO('mysql:host=localhost;dbname=test;charset=utf8', 'root' , 'qX7-xM4-z6z-vPb',array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
}
catch (Exception $e)
{
  die ('Erreur : ' .$e->getMessage());
}

$addBdd = $bdd->prepare('INSERT INTO minichat (pseudo,message) Values(:pseudo , :message)');
if(!empty($_POST['pseudo']) && !empty($_POST['message'])){
  $addBdd->execute(array(
  'pseudo'=> $_POST['pseudo'],
  'message'=> $_POST['message'],
  ));
}

  $addBdd->closeCursor();
  header('Location:index.php');exit;
?>
