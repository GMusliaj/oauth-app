<?php
session_start();
require_once '../inc/DatabaseController.php';

$username = $_POST['username'];
$password = $_POST['password'];

$db = new DatabaseController();

if ($db->userExists($username, $password) == 1)
        $_SESSION['username']=$username;
    header("Location:index.php");
?>
