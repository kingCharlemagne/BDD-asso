<?php
require 'bddLog.php';

$disabled = "disabled";// à programmer si >= 3 abs plus de disabled

    require '../Model/listApprenantAtelier_Select.php';

//update

if (isset($_GET['id']) AND isset($_GET['idApp']) AND isset($_GET['nbAbs'])){
    switch ($_GET['nbAbs']) {
        case "0":
            $_GET['nbAbs'] = "1";
            break;
        case "1":
            $_GET['nbAbs'] = "2";
            break;
        case "2":
            $_GET['nbAbs'] = "3";
            break;
    }
    require '../Model/listApprenantAtelier_Update.php';
    if ($absUpdate->execute()){
        header("Location:".  $_SERVER['HTTP_REFERER']);
    }
}

//delete
if (isset($_GET['idApp']) AND isset($_GET['idAtl']) AND !empty($_GET['idApp']) AND !empty($_GET['idAtl']) AND is_numeric($_GET['idApp'])AND is_numeric($_GET['idAtl'])){

    require '../Model/listApprenantAtelier_Delete.php';

    if ($listApprenant->execute()){

    }
}

