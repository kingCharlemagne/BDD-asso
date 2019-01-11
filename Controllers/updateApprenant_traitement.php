<?php
require 'bddLog.php';
//////////////////////////////////Select//////////////////////////////////////////////////////////////
if (isset($_GET['id']) AND !empty($_GET['id']) AND is_numeric($_GET['id'])){
    require '../Model/inscriptionCours_Select.php';
    require '../Model/updateApprenant_Select.php';
}
//////////////////////////////////Update//////////////////////////////////////////////////////////////
if (!empty($_POST) AND isset($_POST) and isset($_GET['id']) AND !empty($_GET['id']) AND is_numeric($_GET['id'])){
    $post=[];
    foreach ($_POST as $key=>$value){
        $post[$key]= strip_tags(trim($value));
    }

    var_dump($post);
    var_dump($_GET['id']);
    require '../Model/updateApprenant_Update.php';
    if ($updateApprenant->execute()){
        header('Location: recherche.php');
    }
}