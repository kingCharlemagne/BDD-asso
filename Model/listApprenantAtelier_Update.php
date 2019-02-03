<?php

$deleteAtelier = $bdd->prepare('UPDATE apprenant SET '.$get['table'].' = 65 WHERE id=:idApp ');
$deleteAtelier->bindValue(':idApp', $get['idApp']);


