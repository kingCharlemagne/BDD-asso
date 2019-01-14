<?php
$reinstatement=$bdd->prepare('UPDATE apprenant SET address= :address, cp= :cp, city= :city, phone= :phone, email= :email, create_at= :newDate WHERE id=:id');
$reinstatement->bindValue(':address',strip_tags($_POST['address']));
$reinstatement->bindValue(':cp',strip_tags($_POST['cp']));
$reinstatement->bindValue(':city',strip_tags($_POST['city']));
$reinstatement->bindValue(':phone',strip_tags($_POST['phone']));
$reinstatement->bindValue(':email',strip_tags($_POST['email']));
$reinstatement->bindValue('newDate',date('Y-m-d'));
$reinstatement->bindValue(':id',strip_tags($_GET['id']));
