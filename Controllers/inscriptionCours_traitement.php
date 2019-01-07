<?php
require 'bddLog.php';
//Select
require '../Model/inscriptionCours_Select.php';

//Insert
if (!empty($_POST) AND isset($_POST)){
    $errors=[];
    if(empty($_POST['lessonOne']) OR !isset($_POST['lessonOne']) OR $_POST['lessonOne']==="Sélectionner"){
        $errors[]='Champ Première atelier vide';
    }
    if(empty($_POST['lessonTwo']) OR !isset($_POST['lessonTwo']) OR $_POST['lessonOne']==="Sélectionner"){
        $errors[]='Champ Second atelier vide';
    }
    if(empty($_POST['lessonThree']) OR !isset($_POST['lessonOne']) OR $_POST['lessonOne']==="Sélectionner"){
        $errors[]='Champ Troisième atelier vide';
    }

    if(empty($_POST['payment_type']) OR !isset($_POST['payment_type'])){
        $errors[]='Champ Paiement vide';
    }

    if(empty($_POST['money']) OR !isset($_POST['money'])){
        $errors[]='Champ Montant vide';
    }

    if(empty($_POST['receved']) OR !isset($_POST['receved'])){
        $errors[]='Champ N°de Reçu vide';
    }elseif (!is_numeric($_POST['receved'])){
        $errors[]='Champ N°de Reçu vide invalide, saisir N°de Reçu vide valide';
    }



    if (empty($errors)){
        require '../Model/inscriptionCours_Update.php';
        if ($inscriptionSecondStep->execute()){
            header('Location: accueil.php');
        }
    }

}