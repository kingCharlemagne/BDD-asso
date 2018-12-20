<?php
require 'bddLog.php';

$deleteAtelier=$bdd->prepare('DELETE FROM ateliers WHERE id=:id');
$deleteAtelier->bindValue('id',htmlspecialchars($_GET['id']));
if ($deleteAtelier->execute()){
    header('Location: listAteliers.php');
}
