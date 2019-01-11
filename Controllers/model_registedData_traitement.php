<?php
$dateNow=date('Ymd');

$dateExpiration= $data['create_at'];
$dateExpiration = new DateTime( $dateExpiration );
$dExpiration = $dateExpiration->format('md');

$dateY = $dateExpiration->format('Y');
$dateY=$dateY+1;
$dExpiration=$dateY.$dExpiration;

if ($dateNow>=$dExpiration){
    $colorClass="border-danger";
    $cotisationStatus="expiré";
}else{
    $colorClass="border-success";
    $cotisationStatus="valide";
}

