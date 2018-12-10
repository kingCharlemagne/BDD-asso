<?php
require 'inc/bddLog.php';

if (!empty($_GET) AND isset($_GET)) {
    $get=[];

    // Nettoyage des inputs
    foreach ($_GET as $key=>$value){
        $get[$key]= htmlspecialchars(trim($value));
    }

    if ($_GET['selectCategorie']==="0"){
        $categorie="name";
    }elseif ($_GET['selectCategorie']==="1"){
        $categorie="surname";
    }
    elseif ($_GET['selectCategorie']==="2"){
        $categorie="id";
    }
    elseif ($_GET['selectCategorie']==="3"){
        $categorie="born";
    }
    elseif ($_GET['selectCategorie']==="4"){
        $categorie="phone";
    }

    $search=$_GET['search'];


    $search = $bdd->query('SELECT * FROM apprenant WHERE '.$categorie.' LIKE "%' . $search . '%"');
    $search->execute();
    $results = $search->fetchAll();


}