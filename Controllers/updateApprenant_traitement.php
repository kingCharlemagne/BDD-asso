<?php
require 'bddLog.php';
//////////////////////////////////Select//////////////////////////////////////////////////////////////
if (isset($_GET['id']) AND !empty($_GET['id']) AND is_numeric($_GET['id'])) {
    require '../Model/inscriptionCours_Select.php';
    require '../Model/updateApprenant_Select.php';
}
//////////////////////////////////Update//////////////////////////////////////////////////////////////
if (!empty($_POST) AND isset($_POST) and isset($_GET['id']) AND !empty($_GET['id']) AND is_numeric($_GET['id'])) {
    $post = [];
    $errors = [];

    if (empty($_POST['lessonOne']) OR !isset($_POST['lessonOne']) OR $_POST['lessonOne'] === "Sélectionner") {
        $errors[] = 'Champ Première atelier vide';
    }
    if (empty($_POST['lessonTwo']) OR !isset($_POST['lessonTwo']) OR $_POST['lessonOne'] === "Sélectionner") {
        $errors[] = 'Champ Second atelier vide';
    }
    if (empty($_POST['lessonThree']) OR !isset($_POST['lessonOne']) OR $_POST['lessonOne'] === "Sélectionner") {
        $errors[] = 'Champ Troisième atelier vide';
    }

    if (empty($errors)) {

        foreach ($_POST as $key => $value) {
            $post[$key] = strip_tags(trim($value));
        }

        require '../Model/updateApprenant_Update.php';
        if ($updateApprenant->execute()) {
            header('Location: recherche.php');
        }

    }
}