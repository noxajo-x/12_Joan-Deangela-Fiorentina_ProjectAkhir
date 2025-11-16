<?php
include "connect.php";
session_start();

if (isset($_POST['enchant'])) {
    $title    = mysqli_real_escape_string($connect, $_POST['title']);
    $author   = $_POST['author'];
    $cover    = mysqli_real_escape_string($connect, $_POST['cover']); 
    $year     = $_POST['year'];
    $genre    = $_POST['genre'];
    $synopsis = mysqli_real_escape_string($connect, $_POST['synopsis']);

    $query = "INSERT INTO book(title, author, cover, year, genre, synopsis) 
              VALUES ('$title', '$author', '$cover', '$year', '$genre', '$synopsis')";
    
    mysqli_query($connect, $query);
    header("Location: show.php");
    exit;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Book</title>
    <link rel = "stylesheet" href="add.css?v=<?= time()?>">
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
            <img src="logo.png" alt="Library Logo" class="nav-logo">
        </div>

        <div class="nav-right">
            <a href="index.php">Logout</a>
        </div>
    </nav>

    <h3>Enchant the Library with a New Book</h3>
    <a href="show.php">Wander Through the Shelves</a>
    
    <form method="POST">
        <table>
            <tr>
                <td>Title</td>
                <td><input type="text" name="title" required></td>
            </tr>
            <tr>
                <td>Author</td>
                <td><input type="text" name="author" required></td>
            </tr>
            <tr>
                <td>Cover (URL)</td>
                <td><input type="text" name="cover"></td>
            </tr>
            <tr>
                <td>Year</td>
                <td><input type="number" name="year" required min="1000" max="2500"></td>
            </tr>
            <tr>
                <td>Genre</td>
                <td><input type="text" name="genre" required></td>
            </tr>
            <tr>
                <td>Synopsis</td>
                <td><textarea name="synopsis" required></textarea></td>
            </tr>
            <tr>
                <td colspan="2"><input type="submit" name="enchant" value="ENCHANT"></td>
            </tr>
        </table>
    </form>

    <footer class="footer">
        <p>© 2025 Midnight Library. All rights reserved.</p>
    </footer>
</body>
</html>
