<?php

require 'bddLog.php';
$updateAtelier=$bdd->prepare('UPDATE ateliers SET horaire_debut=:hd,horaire_fin=:hf,benevole=:benevole,remplacent=:remplacent WHERE id=:id');
$updateAtelier->bindValue(':hd',$post['horaireStart']);
$updateAtelier->bindValue(':hf',$post['horaireEnd']);
$updateAtelier->bindValue(':benevole',$post['benevole']);
$updateAtelier->bindValue(':remplacent',$post['remplacent']);
$updateAtelier->bindValue(':id',htmlspecialchars($_GET['id']));
