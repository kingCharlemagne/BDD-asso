<?php
$selectAlpha=$bdd->query('SELECT id, categorie, jour , atelier, horaire_debut, horaire_fin FROM ateliers WHERE categorie="alpha" ORDER BY id_jour,horaire_debut');
$selectAlpha->execute();
$alphaDatas=$selectAlpha->fetchAll();

$selectIntermediaire=$bdd->query('SELECT id, categorie, jour , atelier, horaire_debut, horaire_fin FROM ateliers WHERE categorie="intermediaire" ORDER BY id_jour,horaire_debut');
$selectIntermediaire->execute();
$intermediaireDatas=$selectIntermediaire->fetchAll();

$selectDebutant=$bdd->query('SELECT id, categorie, jour , atelier, horaire_debut, horaire_fin FROM ateliers WHERE categorie="debutant" ORDER BY id_jour,horaire_debut');
$selectDebutant->execute();
$debutantDatas=$selectDebutant->fetchAll();