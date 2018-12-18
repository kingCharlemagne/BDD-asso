<?php
$insertPayment=$bdd->prepare('INSERT INTO paiement (n_recu, moyen_paiement, montant) VALUES (:nRecu, :paiement, :montant)');
$insertPayment->bindValue(':nRecu',strip_tags($_POST['receved']));
$insertPayment->bindValue(':paiement',strip_tags($_POST['payment_type']));
$insertPayment->bindValue(':montant',strip_tags($_POST['money']));
$insertPayment->execute();
$id_payment= $bdd->lastInsertId();

$insertLesson=$bdd->prepare('INSERT INTO ateliers_apprenant (id_apprenant, first_lesson, second_lesson, last_lesson,id_paiement) VALUES (:idApprenant, :firstLesson, :secondLesson, :lastLesson, :idPaiement)');
$insertLesson->bindValue(':idApprenant',$_SESSION['id_student']);
$insertLesson->bindValue(':firstLesson',strip_tags($_POST['lessonOne']));
$insertLesson->bindValue(':secondLesson',strip_tags($_POST['lessonTwo']));
$insertLesson->bindValue(':lastLesson',strip_tags($_POST['lessonThree']));
$insertLesson->bindValue(':idPaiement',$id_payment);