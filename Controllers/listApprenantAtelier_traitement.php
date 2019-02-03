<?php
require 'bddLog.php';


if (isset($_GET)) {
    require '../Model/listApprenantAtelier_Select.php';

    function lessonPosition($a1, $a2, $a3)
    {
        if ($_GET['id'] === $a1) {
            return 'first_lesson';
        } elseif ($_GET['id'] === $a2) {
            return 'second_lesson';
        } elseif ($_GET['id'] === $a3) {
            return 'last_lesson';
        }
    }

    function issetMail($val)
    {
        if (empty($val)) {
            return "Email absent";
        } else {
            return $val;
        }
    }

    function issetPhone($val)
    {
        if (empty($val)) {
            return "Téléphone absent";
        } else {
            return $val;
        }
    }

    //Update
    if (isset($_GET['idApp']) AND isset($_GET['table'])) {
        $get = [];
        foreach ($_GET as $key => $value) {
            $get[$key] = strip_tags(trim($value));
        }
        require '../Model/listApprenantAtelier_Update.php';
        if ($deleteAtelier->execute()) {
            header("location:" . $_SERVER['HTTP_REFERER']);
        }
    }

}



//delete


