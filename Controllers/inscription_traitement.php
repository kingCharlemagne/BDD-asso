<?php
require '../Model/bddLog.php';



if (!empty($_POST) AND isset($_POST)){
    $post=[];
    $errors=[];

    // Nettoyage des inputs
    foreach ($_POST as $key=>$value){
        $post[$key]= htmlspecialchars(trim($value));
    }

    //Condition des inputs

    //genre
    if(empty($post['genre']) OR !isset($post['genre'])){
        $errors[]='Champ Sexe vide';
    }

    //name
    if(empty($post['name']) OR !isset($post['name'])){
        $errors['name']='Champ Nom vide';
    }

    //surname
    if(empty($post['surname']) OR !isset($post['surname'])){
        $errors[]='Champ Prénom vide';
    }


    //cp
    if(empty($post['cp']) OR !isset($post['cp'])){
        $errors[]='Champ Code Postal vide';
    }elseif (!is_numeric($post['cp']) OR strlen($post['cp']) != 5){
        $errors[]='Champ Code Postal invalide, saisir un code postal valide';
    }

    //city
    if(empty($post['city']) OR !isset($post['city'])){
        $errors[]='Champ Ville vide';
    }

    //bornDate
    if(empty($post['bornDate']) OR !isset($post['bornDate'])){
        $errors[]='Champ Date de naissance vide';
    }

    //tel
    if (isset($post['tel']) AND !empty($post['tel'])){
        if (!is_numeric($post['tel']) OR strlen($post['tel'])<4 OR strlen($post['tel'])>20){
            $errors[]='Champ Téléphone invalide, saisir un numéros de téléphone valide';
        }
    }

    //email
    if (isset($post['mail']) AND !empty($post['mail']) AND !filter_var($post['mail'], FILTER_VALIDATE_EMAIL)){
            $errors[]='Champ Adresse E-mail invalide, saisir un E-mail valide';
    }

    //familySituation
    if(empty($post['familySituation']) OR !isset($post['familySituation'])){
        $errors[]='Champ Situation matrimoniale vide';
    }

    //numbChild
    if (!is_numeric($post['numbChild'])){
        $errors[]='Champ nombre d\'enfants invalide, saisir un nombre';
    }

    //status
    if($post['status'] === "Sélectionner"){
        $errors[]='Champ Status vide';
    }

    //nativeContry
    if(empty($post['nativeCountry']) OR !isset($post['nativeCountry'])){
        $errors[]='Champ Pays d\'origine vide';
    }

    //nationality
    if(empty($post['nationality']) OR !isset($post['nationality'])){
        $errors[]='Champ Nationalité vide';
    }



    //arrived
    if(empty($post['arrived']) OR !isset($post['arrived'])){
        $errors[]='Champ Date d\'arrivée en France vide';
    }

    //maternalLanguage
    if(empty($post['maternalLanguage']) OR !isset($post['maternalLanguage'])){
        $errors[]='Champ Langue maternelle vide';
    }

    //Pas d'erreurs
    if (empty($errors)){
        require '../Model/inscription_Insert.php';
        if ($inscriptionFirstStep->execute()){
            $_SESSION['id_student']= $bdd->lastInsertId();
            header('Location: inscriptionCours.php');
        }else{
            $errors[]="Une erreur est survenue l'or de l'enregistrement des données, ressayer où contacter le webmaster" ;
        }

    }

}