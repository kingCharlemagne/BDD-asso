<?php
require '../Model/bddLog.php';

if (!empty($_POST) AND isset($_POST)){
    $errors=[];
    $post=[];

    foreach ($_POST as $key=>$value){
        $post[$key]= htmlspecialchars(trim($value));
    }

    //categorie
    if($post['categorie'] === 'null'){
        $errors[]='Champ Catégorie vide, choisir une option';
    }

    //jour
    if($post['jour'] === 'null'){
        $errors[]='Champ Jour vide, choisir une option';
    }

    //lieu
    if(empty($post['atelier']) OR !isset($post['atelier'])){
        $errors[]='Champ lieu vide, saisir une valeur';
    }

    //horaireStart
    if(empty($post['horaireStart']) OR !isset($post['horaireStart'])){
        $errors[]='Champ lieu horaire, saisir une valeur';
    }


    //horaireEnd
    if(empty($post['horaireEnd']) OR !isset($post['horaireEnd'])){
        $errors[]='Champ lieu horaire, saisir une valeur';
    }

    //benevole
    if(empty($post['benevole']) OR !isset($post['benevole'])){
        $errors[]='Champ lieu vide, saisir une valeur';
    }


    if (empty($errors)){
       require '../Model/modalAjout_Insert.php';
    }

    //faire l'affichage des erreurs dans la views

}