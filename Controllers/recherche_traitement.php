<?php
require 'bddLog.php';

if (!empty($_GET) AND isset($_GET)) {

    if (isset($_GET['selectCategorie']) AND isset($_GET['search'])){

    if ($_GET['selectCategorie']==="0"){
        $categorie="name";
    }elseif ($_GET['selectCategorie']==="1"){
        $categorie="surname";
    }
    elseif ($_GET['selectCategorie']==="2"){
        $categorie="t1.id";
    }
    elseif ($_GET['selectCategorie']==="3"){
        $categorie="born";
    }
    elseif ($_GET['selectCategorie']==="4"){
        $categorie="phone";
    }
    elseif ($_GET['selectCategorie']==="5"){
        $categorie="create_at";
    }

    $search=$_GET['search'];
    require '../Model/recherche_Select.php';

    }

/////////////////////////////////////DELETE apprenant//////////////////////////////////////////////////////
    if (isset($_GET['id']) AND !empty($_GET['id']) AND is_numeric($_GET['id'])){
        require '../Model/rechercheApprenant_delete.php';
        if ($deleteAtelier->execute()) {
            header('Location: recherche.php');
        }
    }
}
