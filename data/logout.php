<?php
session_start();

unset($_SESSION['loggedIn']);


header('location: ../index.php');
?>

