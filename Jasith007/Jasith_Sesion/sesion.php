<?php
session_start();
$login = 'Jasith';

$_SESSION['admin'] = $login;

if (isset($_SESSION['admin'])) {
    header('location:index.php');
}

    // echo '<br>';
    // var_dump($_SESSION);