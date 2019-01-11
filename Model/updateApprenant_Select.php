<?php
$selectApprenant=$bdd->prepare('SELECT name, surname FROM apprenant WHERE id=:id');
$selectApprenant->bindValue(':id',strip_tags($_GET['id']));
$selectApprenant->execute();
$apprenantSelects=$selectApprenant->fetchAll();