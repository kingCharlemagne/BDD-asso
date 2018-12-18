<?php
require '../Model/bddLog.php';

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

    require '../Model/recherche_Select.php';


}