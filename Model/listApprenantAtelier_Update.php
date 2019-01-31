<?php

$deleteAtelier = $bdd->prepare('UPDATE apprenant SET '.$get['table'].' = 0 WHERE id=:idApp ');
$deleteAtelier->bindValue(':idApp', $get['idApp']);


