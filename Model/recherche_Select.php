<?php
$searchResult = $bdd->query('SELECT * FROM apprenant WHERE '.$categorie.' LIKE "%' . $search . '%"');
$searchResult->execute();
$results = $searchResult->fetchAll();