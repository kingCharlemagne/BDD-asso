<?php
require 'bddLog.php';

$updateEtat=$bdd->prepare('UPDATE ateliers SET etat=:etat WHERE id=:id');
$updateEtat->bindValue(':etat',htmlspecialchars($_GET['etat']));
$updateEtat->bindValue(':id',htmlspecialchars($_GET['idEtat']));
if ($updateEtat->execute()){
    header('Location: listAteliers.php');
}