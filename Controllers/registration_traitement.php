<?php
require 'bddLog.php';
if (!empty($_POST) AND isset($_POST)){
    $post = [];
    $errors = [];

    foreach($_POST as $key=>$value){
        $post[$key] = trim(strip_tags($value));
    }

   require'../Model/registration_Select.php';

    if(count($pseudoIsset) > 0){
        $errors[] = "Le pseudo existe déja";
    }

    if(!isset($post['pseudo']) OR mb_strlen($post['pseudo']) < 4 OR mb_strlen($post['pseudo']) > 10){
        $errors[] = 'Le pseudo doit faire entre 4 et 10 caractères';
    }

    if(!isset($post['password']) OR mb_strlen($post['password']) < 4 OR mb_strlen($post['password']) > 10){
        $errors[] = 'Champ mot de passe invalide, le mot de passe doit faire entre 4 et 10 caractères';
    }

    if (!isset($post['confPassword']) OR $post['password'] !== $post['confPassword']){
        $errors[] = 'Champ confirmer le mot de passe invalide, le mot de passe doit être identique au premier';
    }

    if (empty($errors)){
        require '../Model/registration_Insert.php';
        if ($insertUser->execute()){
            header('Location: accueil.php');
        }
    }

}