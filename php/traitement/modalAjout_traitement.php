<?php
require 'inc/bddLog.php';

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

    //remplacent
    if(empty($post['remplacent']) OR !isset($post['remplacent'])){
        $errors[]='Champ lieu vide, saisir une valeur';
    }

    if (empty($errors)){
        $insertAtelier=$bdd->prepare('INSERT INTO ateliers(categorie,jour, atelier, horaire_debut, horaire_fin, benevole, remplacent) VALUES (:categorie, :jour,:atelier,:horaireDebut,:horaireFin,:benevole,:remplacent)');
        $insertAtelier->bindValue(':categorie',$post['categorie']);
        $insertAtelier->bindValue(':jour',$post['jour']);
        $insertAtelier->bindValue(':atelier',$post['atelier']);
        $insertAtelier->bindValue(':horaireDebut',$post['horaireStart']);
        $insertAtelier->bindValue(':horaireFin',$post['horaireEnd']);
        $insertAtelier->bindValue(':benevole',$post['benevole']);
        $insertAtelier->bindValue(':remplacent',$post['remplacent']);
        $insertAtelier->execute();
    }

    //faire l'affichage des erreurs dans la views

}