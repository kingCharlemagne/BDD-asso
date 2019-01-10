<?php
$searchResult = $bdd->query('SELECT * FROM apprenant,ateliers WHERE apprenant.first_lesson= ateliers.id  AND '.$categorie.' LIKE "%' . $search . '%"');
$searchResult->execute();
$results = $searchResult->fetchAll();