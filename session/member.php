<?php 
session_start();
if($_SESSION['login'] != true){
    header('Location: /session/login.php');
    exit();
}

$say = "Hello " . $_SESSION['username'];
?>

<html>
    <head>Dashboard</head>
    <body>
        <h1><?= $say; ?></h1>
        <br><br>
        <a href="/session/logout.php">Logout</a>
    </body>
</html>