<?php
$searchResult = $bdd->query('SELECT * FROM apprenant INNER JOIN ateliers ON apprenant.first_lesson = ateliers.id  WHERE '.$categorie.' LIKE "%' . $search . '%"');
$searchResult->execute();
$results = $searchResult->fetchAll();