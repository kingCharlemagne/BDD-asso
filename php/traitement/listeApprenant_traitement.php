<?php
require 'inc/bddLog.php';

$selectApp=$bdd->query('SELECT * FROM apprenant');
$selectApp->execute();
$selecDatas=$selectApp->fetchAll();