<?php
require 'bddLog.php';
if (!empty($_GET) AND isset($_GET)) {
    $date=strip_tags(trim($_GET['searchDate']));
}else{
    $date=date('Y');
}
require '../Model/statistic_Select.php';