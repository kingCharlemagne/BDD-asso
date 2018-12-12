<?php
require 'inc/bddLog.php';

$contInscription=$bdd->query('SELECT COUNT(id), YEAR(create_at) FROM apprenant');
$contInscription->execute();
$contInscriptionDatas=$contInscription->fetchAll();

foreach ($contInscriptionDatas as $data){
    echo $data[''];
    echo $data['COUNT(id)'];
    print_r($data);
}
