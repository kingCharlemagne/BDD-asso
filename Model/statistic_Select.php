<?php
require 'bddLog.php';

/////////////////////////////////////////////Inscription [ a vérifier]//////////////////////////////////////////////////////////
$contInscription=$bdd->query('SELECT COUNT(id) as r FROM apprenant WHERE create_at');
//$contInscription->execute();
//$contInscriptionDatas=$contInscription->fetchAll();

//////////////////////////////////////////////////Sex//////////////////////////////////////////////////////
$contSex=$bdd->query('SELECT sex,COUNT(id) as count FROM apprenant WHERE create_at  LIKE "%' . $date . '%"  GROUP BY sex');
$contSex->execute();
$contSexDatas=$contSex->fetchAll();

print_r($contSexDatas);

//////////////////////////////////////////////////City//////////////////////////////////////////////////////
$contCity=$bdd->query('SELECT city,COUNT(id) as count FROM apprenant WHERE create_at  LIKE "%' . $date . '%" GROUP BY city');
$contCity->execute();
$contCityDatas=$contCity->fetchAll();

///////////////////////////////////////////////////Status/////////////////////////////////////////////////////
$contStatus=$bdd->query('SELECT status,COUNT(id) as count FROM apprenant WHERE create_at  LIKE "%' . $date . '%" GROUP BY status');
$contStatus->execute();
$contStatusDatas=$contStatus->fetchAll();

//////////////////////////////////////////////Nationality//////////////////////////////////////////////////////////
$contNationality=$bdd->query('SELECT nationality,COUNT(id) as count FROM apprenant WHERE create_at  LIKE "%' . $date . '%" GROUP BY nationality');
$contNationality->execute();
$contNationalityDatas=$contNationality->fetchAll();

//////////////////////////////////////////////Arrived//////////////////////////////////////////////////////////
$contArrived=$bdd->query('SELECT arrived,COUNT(id) as count FROM apprenant WHERE create_at  LIKE "%' . $date . '%" GROUP BY arrived');
$contArrived->execute();
$contArrivedDatas=$contArrived->fetchAll();

//////////////////////////////////////////////Language//////////////////////////////////////////////////////////
$contLanguage=$bdd->query('SELECT firstlanguage,COUNT(id) as count FROM apprenant WHERE create_at  LIKE "%' . $date . '%" GROUP BY firstlanguage');
$contLanguage->execute();
$contLanguageDatas=$contLanguage->fetchAll();
