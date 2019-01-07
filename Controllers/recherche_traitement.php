<?php
require 'bddLog.php';

if (!empty($_GET) AND isset($_GET)) {

    if (isset($_GET['selectCategorie']) AND isset($_GET['search'])){
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

    print_r($results);

    }

/////////////////////////////////////DELETE apprenant//////////////////////////////////////////////////////
    if (isset($_GET['id']) AND !empty($_GET['id']) AND is_numeric($_GET['id'])){
        require '../Model/rechercheApprenant_delete.php';
        if ($deleteAtelier->execute()) {
            header('Location: recherche.php');
        }
    }
}