<?php
// Area PHP - Backend
session_start();
include 'connect.php';

if(isset($_POST['login'])){
    $username = $_POST['username'];
    $password = $_POST['password'];

    $query  = "select * from user where username='$username'";
    $result = mysqli_query($connect, $query);
    $user   = mysqli_fetch_assoc($result);

    if($user && password_verify($password, $user['password'])){
        $_SESSION['username'] = $user['username'];
        $_SESSION['name'] = $user['name'];
        header("Location: show.php");
        exit;
    } else {
        echo "<script>alert('Username atau Password salah');</script>";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel = "stylesheet" href="login.css?v=<?= time()?>">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Alumni+Sans+Pinstripe:ital@0;1&family=Dancing+Script&family=Doto:wght@100..900&family=Fleur+De+Leah&family=Imperial+Script&family=Italianno&family=Jersey+10&family=Jua&family=League+Script&family=Lovers+Quarrel&family=Martian+Mono:wght@100..800&family=Mukta+Malar:wght@200;300;400;500;600;700;800&family=Nanum+Myeongjo&family=Nunito:ital,wght@0,200..1000;1,200..1000&family=Pinyon+Script&family=Quintessential&family=Rouge+Script&family=Rubik:ital,wght@0,300..900;1,300..900&family=Ruda:wght@400..900&family=WindSong:wght@400;500&display=swap" rel="stylesheet">

</head>
<body>
    <nav class="navbar">
        <div class="nav-left">
            <h2>Midnight Library</h2>
        </div>

        <div class="nav-center">
            <a href="index.php">
                <img src="logo.png" alt="Library Logo" class="nav-logo">
            </a>
        </div>

        <div class="nav-right">
            <a href="about.php">About Us</a>
            <a href="login.php">Login</a>
            <a href="register.php">Register</a>
        </div>
    </nav>
    
    <h1>Login</h1>
    <form method="POST">
        <fieldset>
            <table>
            <tr>
                <td><input type="text" name="username" placeholder="Username" ></td>
            </tr>
            <tr>
                <td><input type="password" name="password" placeholder="Password"></td>
            </tr>
            <tr>
                <td><input type="submit" name="login" value="Login"></td>
            </tr>
            <tr>
                <td> ⋆˚☆˖°⋆｡° ✮˖ ࣪ ⊹⋆.˚⋆˚☆˖°⋆｡° ✮˖ ࣪ ⊹⋆.˚ <td>
            </tr>
            <tr>
                <td>Not part of our story yet?</td>
            </tr>
            <tr>
                <td><a href="register.php">Register here</a></td>
            </tr>
            <tr>
                <td>And let the magic find you</td>
            </tr>
            </table>
        </fieldset>
    </form>

    <footer class="footer">
        <p>© 2025 Midnight Library. All rights reserved.</p>
    </footer>
</body>
</html>