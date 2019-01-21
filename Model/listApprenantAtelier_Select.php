<?php

$listApprenant = $bdd->prepare('SELECT id,name,surname,phone,email,address,cp,city,abs FROM apprenant WHERE first_lesson=:idget OR second_lesson= :idget OR last_lesson= :idget');
$listApprenant->bindValue(':idget', strip_tags($_GET['id']));
$listApprenant->execute();
$apprenantList = $listApprenant->fetchAll(PDO::FETCH_ASSOC);

$countApprenant = $bdd->prepare('SELECT COUNT(*) as count FROM apprenant WHERE first_lesson=:idget OR second_lesson= :idget OR last_lesson= :idget');
$countApprenant->bindValue(':idget', strip_tags($_GET['id']));
$countApprenant->execute();
$apprenantCount = $countApprenant->fetch();

$selectAtelier = $bdd->prepare('SELECT id,atelier,jour,horaire_debut,horaire_fin FROM ateliers WHERE id= :idget');
$selectAtelier->bindValue(':idget', strip_tags($_GET['id']));
$selectAtelier->execute();
$atelierSelect = $selectAtelier->fetch();



