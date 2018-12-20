<?php
require 'bddLog.php';
$selectAtelier=$bdd->prepare('SELECT atelier , horaire_debut , horaire_fin ,  benevole, remplacent FROM ateliers WHERE id=:id');
$selectAtelier->bindValue(':id',htmlspecialchars($_GET['id']));
$selectAtelier->execute();
$atelierSelects=$selectAtelier->fetchAll();