<?php

$dataApprenant = $bdd->prepare('SELECT t1.*,a1.categorie,a1.atelier as at1,a1.jour as j1,a1.horaire_debut as hs1,a1.horaire_fin as he1, a1.adresse_atelier as adr1,a2.atelier as at2,a2.jour as j2,a2.horaire_debut as hs2,a2.horaire_fin as he2, a2.adresse_atelier as adr2,a3.atelier as at3,a3.jour as j3,a3.horaire_debut as hs3,a3.horaire_fin as he3, a3.adresse_atelier as adr3   FROM apprenant as t1 INNER JOIN ateliers as a1 ON t1.first_lesson=a1.id INNER JOIN ateliers as a2 ON t1.second_lesson=a2.id INNER JOIN ateliers as a3 ON t1.last_lesson=a3.id  WHERE t1.id = :idget');
$dataApprenant->bindValue(':idget', strip_tags($_GET['id']));
$dataApprenant->execute();
$apprenantData = $dataApprenant->fetchAll(PDO::FETCH_ASSOC);