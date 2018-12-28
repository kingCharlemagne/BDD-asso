<?php
$issetPseudo=$bdd->prepare('SELECT id FROM users WHERE pseudo = :pseudo');
$issetPseudo->bindValue(':pseudo',$post['pseudo']);
$issetPseudo->execute();
$pseudoIsset = $issetPseudo->fetchAll(PDO::FETCH_ASSOC);