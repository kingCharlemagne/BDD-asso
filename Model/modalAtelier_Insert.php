<?php
$insertAtelier=$bdd->prepare('INSERT INTO ateliers(categorie,jour, atelier, horaire_debut, horaire_fin, benevole, remplacent) VALUES (:categorie, :jour,:atelier,:horaireDebut,:horaireFin,:benevole,:remplacent)');
$insertAtelier->bindValue(':categorie',$post['categorie']);
$insertAtelier->bindValue(':jour',$post['jour']);
$insertAtelier->bindValue(':atelier',$post['atelier']);
$insertAtelier->bindValue(':horaireDebut',$post['horaireStart']);
$insertAtelier->bindValue(':horaireFin',$post['horaireEnd']);
$insertAtelier->bindValue(':benevole',$post['benevole']);
$insertAtelier->bindValue(':remplacent',$post['remplacent']);
$insertAtelier->execute();