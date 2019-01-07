<?php
$inscriptionSecondStep=$bdd->prepare('UPDATE apprenant SET first_lesson = :firstLesson,second_lesson = :secondLesson,last_lesson = :lastLesson,receipt_numbers = :nRecu,type_payment = :paiement,price = :montant, create_at=:date WHERE id = :id');
$inscriptionSecondStep->bindValue(':firstLesson',htmlspecialchars($_POST['lessonOne']));
$inscriptionSecondStep->bindValue(':secondLesson',htmlspecialchars($_POST['lessonTwo']));
$inscriptionSecondStep->bindValue(':lastLesson',htmlspecialchars($_POST['lessonThree']));
$inscriptionSecondStep->bindValue(':nRecu',htmlspecialchars($_POST['receved']));
$inscriptionSecondStep->bindValue(':paiement',htmlspecialchars($_POST['payment_type']));
$inscriptionSecondStep->bindValue(':montant',htmlspecialchars($_POST['money']));
$inscriptionSecondStep->bindValue(':date',date('Y-m-d'));
$inscriptionSecondStep->bindValue(':id',$_SESSION['id_student']);