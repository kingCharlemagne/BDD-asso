<?php
$selectApprenant=$bdd->prepare('SELECT  FROM apprenant WHERE id=:id');
$selectApprenant->bindValue(':id',htmlspecialchars($_GET['id']));
$selectApprenant->execute();
$apprenantSelects=$selectApprenant->fetchAll();