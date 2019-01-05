<?php
$insertAtelier=$bdd->prepare('INSERT INTO ateliers(categorie,id_jour,jour, atelier, horaire_debut, horaire_fin, benevole, remplacent) VALUES (:categorie, :idJour, :jour,:atelier,:horaireDebut,:horaireFin,:benevole,:remplacent)');
$insertAtelier->bindValue(':categorie',$post['categorie']);
$insertAtelier->bindValue(':idJour',$id_jour);
$insertAtelier->bindValue(':jour',$post['jour']);
$insertAtelier->bindValue(':atelier',$post['atelier']);
$insertAtelier->bindValue(':horaireDebut',$post['horaireStart']);
$insertAtelier->bindValue(':horaireFin',$post['horaireEnd']);
$insertAtelier->bindValue(':benevole',$post['benevole']);
$insertAtelier->bindValue(':remplacent',$post['remplacent']);
$insertAtelier->execute();