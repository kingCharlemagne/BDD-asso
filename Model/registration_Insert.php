<?php
$insertUser=$bdd->prepare('INSERT INTO users( pseudo,password,role) VALUES (:pseudo,:password,:role)');
$insertUser->bindValue(':pseudo',$post['pseudo']);
$insertUser->bindValue(':password',password_hash($post['password'], PASSWORD_DEFAULT));
$insertUser->bindValue(':role','user');
$insertUser->execute();