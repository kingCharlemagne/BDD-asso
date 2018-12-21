<?php
require 'bddLog.php';

$updateEtat=$bdd->prepare('UPDATE ateliers SET etat=:etat WHERE id=:id');
$updateEtat->bindValue(':etat',htmlspecialchars($_GET['state']));
$updateEtat->bindValue(':id',htmlspecialchars($_GET['idState']));
if ($updateEtat->execute()){
    header('Location: listAteliers.php');
}