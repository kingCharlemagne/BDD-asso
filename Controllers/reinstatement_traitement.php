<?php

require 'bddLog.php';

if (isset($_GET['id']) AND !empty($_GET['id']) AND is_numeric($_GET['id'])){
    require '../Model/reinstatement_Select.php';
}

if (isset($_POST) AND isset($_GET['id']) AND !empty($_POST)AND !empty($_GET['id']) AND is_numeric($_GET['id'])){

    require '../Model/reinstatement_Update.php';
    if ($reinstatement->execute()){
        header('Location: recherche.php');
    }
}