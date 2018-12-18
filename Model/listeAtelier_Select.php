<?php
require '../Model/bddLog.php';

// ALPHA

$lundiAlpha=$bdd->query('SELECT * FROM ateliers WHERE categorie="alpha" AND jour="lundi"');
$lundiAlpha->execute();
$LAdatas = $lundiAlpha->fetchAll();

$mardiAlpha=$bdd->query('SELECT * FROM ateliers WHERE categorie="alpha" AND jour="mardi"');
$mardiAlpha->execute();
$MAdatas = $mardiAlpha->fetchAll();

$mercrediAlpha=$bdd->query('SELECT * FROM ateliers WHERE categorie="alpha" AND jour="mercredi"');
$mercrediAlpha->execute();
$MEAdatas = $mercrediAlpha->fetchAll();

$jeudiAlpha=$bdd->query('SELECT * FROM ateliers WHERE categorie="alpha" AND jour="jeudi"');
$jeudiAlpha->execute();
$JAdatas = $jeudiAlpha->fetchAll();

$vendrediAlpha=$bdd->query('SELECT * FROM ateliers WHERE categorie="alpha" AND jour="vendredi"');
$vendrediAlpha->execute();
$VAdatas = $vendrediAlpha->fetchAll();




//Intermédiaire
$lundiIntermediaire=$bdd->query('SELECT * FROM ateliers WHERE categorie="intermediaire" AND jour="lundi"');
$lundiIntermediaire->execute();
$LIdatas = $lundiIntermediaire->fetchAll();

$mardiIntermediaire=$bdd->query('SELECT * FROM ateliers WHERE categorie="intermediaire" AND jour="mardi"');
$mardiIntermediaire->execute();
$MIdatas = $mardiIntermediaire->fetchAll();

$mercrediIntermediaire=$bdd->query('SELECT * FROM ateliers WHERE categorie="intermediaire" AND jour="mercredi"');
$mercrediIntermediaire->execute();
$MEIdatas = $mercrediIntermediaire->fetchAll();

$jeudiIntermediaire=$bdd->query('SELECT * FROM ateliers WHERE categorie="intermediaire" AND jour="jeudi"');
$jeudiIntermediaire->execute();
$JIdatas = $jeudiIntermediaire->fetchAll();

$vendrediIntermediaire=$bdd->query('SELECT * FROM ateliers WHERE categorie="intermediaire" AND jour="vendredi"');
$vendrediIntermediaire->execute();
$VIdatas = $vendrediIntermediaire->fetchAll();




//Débutant
$lundiDebutant=$bdd->query('SELECT * FROM ateliers WHERE categorie="debutant" AND jour="lundi"');
$lundiDebutant->execute();
$LDdatas = $lundiDebutant->fetchAll();

$mardiDebutant=$bdd->query('SELECT * FROM ateliers WHERE categorie="debutant" AND jour="mardi"');
$mardiDebutant->execute();
$MDdatas = $mardiDebutant->fetchAll();

$mercrediDebutant=$bdd->query('SELECT * FROM ateliers WHERE categorie="debutant" AND jour="mercredi"');
$mercrediDebutant->execute();
$MEDdatas = $mercrediDebutant->fetchAll();

$jeudiDebutant=$bdd->query('SELECT * FROM ateliers WHERE categorie="debutant" AND jour="jeudi"');
$jeudiDebutant->execute();
$JDdatas = $jeudiDebutant->fetchAll();

$vendrediDebutant=$bdd->query('SELECT * FROM ateliers WHERE categorie="debutant" AND jour="vendredi"');
$vendrediDebutant->execute();
$VDdatas = $vendrediDebutant->fetchAll();
