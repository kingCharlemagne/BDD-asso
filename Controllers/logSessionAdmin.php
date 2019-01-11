<?php
if (isset($_SESSION['PseudoUser']) AND ($_SESSION['role'] == 'ROLE_ADMIN')) {
} else {
    header('location:../index.php');
}