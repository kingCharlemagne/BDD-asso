<?php
$searchResult = $bdd->prepare('SELECT t1.*,a1.categorie,a1.atelier as at1,a1.jour as j1,a2.atelier as at2,a2.jour as j2,a3.atelier as at3,a3.jour as j3 FROM apprenant as t1 INNER JOIN ateliers as a1 ON t1.first_lesson=a1.id INNER JOIN ateliers as a2 ON t1.second_lesson=a2.id INNER JOIN ateliers as a3 ON t1.last_lesson=a3.id  WHERE '.$categorie.' LIKE "%' . $search . '%"');
$searchResult->execute();
$results = $searchResult->fetchAll();