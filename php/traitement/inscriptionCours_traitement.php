<?php
require 'inc/bddLog.php';

//Select
$selectAlpha=$bdd->query('SELECT id, categorie, jour , atelier, horaire_debut, horaire_fin FROM ateliers WHERE categorie="alpha" ORDER BY id_jour,horaire_debut');
$selectAlpha->execute();
$alphaDatas=$selectAlpha->fetchAll();

$selectIntermediaire=$bdd->query('SELECT id, categorie, jour , atelier, horaire_debut, horaire_fin FROM ateliers WHERE categorie="intermediaire" ORDER BY id_jour,horaire_debut');
$selectIntermediaire->execute();
$intermediaireDatas=$selectIntermediaire->fetchAll();

$selectDebutant=$bdd->query('SELECT id, categorie, jour , atelier, horaire_debut, horaire_fin FROM ateliers WHERE categorie="debutant" ORDER BY id_jour,horaire_debut');
$selectDebutant->execute();
$debutantDatas=$selectDebutant->fetchAll();

//Insert
if (!empty($_POST) AND isset($_POST)){
    $errors=[];

    if(empty($_POST['lessonOne']) OR !isset($_POST['lessonOne'])){
        $errors[]='Champ Première atelier vide';
    }
    if(empty($_POST['lessonTwo']) OR !isset($_POST['lessonTwo'])){
        $errors[]='Champ Second atelier vide';
    }
    if(empty($_POST['lessonThree']) OR !isset($_POST['lessonOne'])){
        $errors[]='Champ Troisième atelier vide';
    }

    if (empty($errors)){
        $insertLesson=$bdd->prepare('INSERT INTO ateliers_apprenant (id_apprenant, first_lesson, second_lesson, last_lesson) VALUES (:idApprenant, :firstLesson, :secondLesson, :lastLesson)');
        $insertLesson->bindValue(':idApprenant',$_SESSION['id_student']);
        $insertLesson->bindValue(':firstLesson',strip_tags($_POST['lessonOne']));
        $insertLesson->bindValue(':secondLesson',strip_tags($_POST['lessonTwo']));
        $insertLesson->bindValue(':lastLesson',strip_tags($_POST['lessonThree']));
        if ($insertLesson->execute()){
            header('Location: index.php');
        }
    }

}