<?php
$reinstatementApprenant=$bdd->prepare('SELECT name, surname, address, cp, city, phone, email FROM apprenant WHERE id=:id');
$reinstatementApprenant->bindValue(':id',strip_tags($_GET['id']));
$reinstatementApprenant->execute();
$apprenantReinstatement=$reinstatementApprenant->fetchAll();