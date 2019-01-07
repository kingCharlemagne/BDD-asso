<?php
$selectLog=$bdd->prepare('SELECT pseudo, password,role FROM users WHERE pseudo=:pseudo');
$selectLog->bindValue(':pseudo',$post['pseudo']);
$selectLog->execute();
$user=$selectLog->fetchAll(PDO::FETCH_ASSOC);

