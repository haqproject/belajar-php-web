<?php 
session_start();

if($_SESSION['login'] == true){
    header('Location: /session/member.php');
    exit();
}

$error = "";
if($_SERVER['REQUEST_METHOD'] == "POST"){
    if($_POST['username'] == "naufal" && $_POST['password'] == "naufal"){
        //sukses
        $_SESSION['login'] = true;
        $_SESSION['username'] = "naufal";
        header('Location: /session/member.php');
        exit();

    }else{
        //gagal
        $error = "Username/Password Salah";
    }
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>
<body>
    <?php if($error != ""){?>
        <h3 style="color:red;"><?= $error; ?></h3>
    <?php } ?>
    <h1>Login</h1>
    <form action="/session/login.php" method="post">
        <label for="">
            Username:
            <input type="text" name="username" id="">
        </label>
        <br><br>
        <label for="">
            Password:
            <input type="password" name="password" id="">
        </label>
        <br><br>
         <input type="submit" value="login">
    </form>
</body>
</html>