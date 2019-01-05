<?php
//////////////////////////////////Select//////////////////////////////////////////////////////////////
if (isset($_GET['id']) AND !empty($_GET['id']) AND is_numeric($_GET['id'])){
    require '../Model/updateAtelier_Select.php';
}
//////////////////////////////////Update//////////////////////////////////////////////////////////////
if (isset($_POST) AND !empty($_POST) AND isset($_GET['id']) AND !empty($_GET['id'])){
    $post=[];
    foreach ($_POST as $key=>$value){
        $post[$key]= htmlspecialchars(trim($value));
    }
    require '../Model/updateAtelier_Update.php';
    if ($updateAtelier->execute()){
        header('Location: listAteliers.php');
    }
}
