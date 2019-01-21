<?php

$absUpdate = $bdd->prepare('UPDATE apprenant SET  abs=:nbAbs WHERE id=:idGet');
$absUpdate->bindValue(':nbAbs', strip_tags($_GET['nbAbs']));
$absUpdate->bindValue(':idGet', strip_tags($_GET['idApp']));
