<?php
require '../Model/bddLog.php';

$date=date('Y');
echo $date;
/////////////////////////////////////////////Inscription [ a vérifier]//////////////////////////////////////////////////////////
$contInscription=$bdd->query('SELECT COUNT(date(\'Y\')) as r FROM apprenant WHERE create_at');
//$contInscription->execute();
//$contInscriptionDatas=$contInscription->fetchAll();

//////////////////////////////////////////////////Sex//////////////////////////////////////////////////////
$contSex=$bdd->query('SELECT sex,COUNT(*) as count FROM apprenant WHERE create_at = '. date('Y').' ');
$contSex->execute();
$contSexDatas=$contSex->fetchAll();

print_r($contSexDatas);

//////////////////////////////////////////////////City//////////////////////////////////////////////////////
$contCity=$bdd->query('SELECT city,COUNT(id) as count FROM apprenant GROUP BY city');
$contCity->execute();
$contCityDatas=$contCity->fetchAll();

///////////////////////////////////////////////////Status/////////////////////////////////////////////////////
$contStatus=$bdd->query('SELECT status,COUNT(id) as count FROM apprenant GROUP BY status');
$contStatus->execute();
$contStatusDatas=$contStatus->fetchAll();

//////////////////////////////////////////////Nationality//////////////////////////////////////////////////////////
$contNationality=$bdd->query('SELECT nationality,COUNT(id) as count FROM apprenant GROUP BY nationality');
$contNationality->execute();
$contNationalityDatas=$contNationality->fetchAll();

//////////////////////////////////////////////Arrived//////////////////////////////////////////////////////////
$contArrived=$bdd->query('SELECT arrived,COUNT(id) as count FROM apprenant GROUP BY arrived');
$contArrived->execute();
$contArrivedDatas=$contArrived->fetchAll();

//////////////////////////////////////////////Language//////////////////////////////////////////////////////////
$contLanguage=$bdd->query('SELECT firstlanguage,COUNT(id) as count FROM apprenant GROUP BY firstlanguage');
$contLanguage->execute();
$contLanguageDatas=$contLanguage->fetchAll();
