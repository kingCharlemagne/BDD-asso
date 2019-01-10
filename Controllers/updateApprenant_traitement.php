<?php
require 'bddLog.php';
//////////////////////////////////Select//////////////////////////////////////////////////////////////
if (isset($_GET['id']) AND !empty($_GET['id']) AND is_numeric($_GET['id'])){
    require '../Model/updateApprenant_Select.php';
}
//////////////////////////////////Update//////////////////////////////////////////////////////////////
if (isset($_POST) AND !empty($_POST) AND isset($_GET['id']) AND !empty($_GET['id'])AND is_numeric($_GET['id'])){
    $post=[];
    foreach ($_POST as $key=>$value){
        $post[$key]= htmlspecialchars(trim($value));
    }
    require '../Model/updateApprenant_Update.php';
    if ($updateAtelier->execute()){
        header('Location: recherche.php');
    }
}