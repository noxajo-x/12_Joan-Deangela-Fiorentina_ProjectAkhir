<?php
include 'connect.php';

// Cek apakah form disubmit
if(isset($_POST['update'])){
    $id       = $_POST['id'];
    $title    = mysqli_real_escape_string($connect, $_POST['title']);
    $author   = $_POST['author'];
    $cover    = mysqli_real_escape_string($connect, $_POST['cover']); 
    $year     = $_POST['year'];
    $genre    = $_POST['genre'];
    $synopsis = mysqli_real_escape_string($connect, $_POST['synopsis']);

    mysqli_query($connect, "UPDATE book SET 
        title='$title',
        author='$author',
        cover='$cover',
        year='$year',
        genre='$genre',
        synopsis='$synopsis'
        WHERE id='$id'
    ");

    header("Location: show.php");
    exit;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Edit Book</title>
    <link rel="stylesheet" href="update.css?v=<?= time() ?>">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Alumni+Sans+Pinstripe:ital@0;1&family=Doto:wght@100..900&family=Fleur+De+Leah&family=Jersey+10&family=Jua&family=Martian+Mono:wght@100..800&family=Mukta+Malar:wght@200;300;400;500;600;700;800&family=Nanum+Myeongjo&family=Nunito:ital,wght@0,200..1000;1,200..1000&family=Rubik:ital,wght@0,300..900;1,300..900&family=Ruda:wght@400..900&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Alumni+Sans+Pinstripe:ital@0;1&family=Doto:wght@100..900&family=Fleur+De+Leah&family=Jersey+10&family=Jua&family=Lovers+Quarrel&family=Martian+Mono:wght@100..800&family=Mukta+Malar:wght@200;300;400;500;600;700;800&family=Nanum+Myeongjo&family=Nunito:ital,wght@0,200..1000;1,200..1000&family=Rubik:ital,wght@0,300..900;1,300..900&family=Ruda:wght@400..900&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Alumni+Sans+Pinstripe:ital@0;1&family=Doto:wght@100..900&family=Fleur+De+Leah&family=Jersey+10&family=Jua&family=Lovers+Quarrel&family=Martian+Mono:wght@100..800&family=Mukta+Malar:wght@200;300;400;500;600;700;800&family=Nanum+Myeongjo&family=Nunito:ital,wght@0,200..1000;1,200..1000&family=Pinyon+Script&family=Rubik:ital,wght@0,300..900;1,300..900&family=Ruda:wght@400..900&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Alumni+Sans+Pinstripe:ital@0;1&family=Doto:wght@100..900&family=Fleur+De+Leah&family=Imperial+Script&family=Jersey+10&family=Jua&family=Lovers+Quarrel&family=Martian+Mono:wght@100..800&family=Mukta+Malar:wght@200;300;400;500;600;700;800&family=Nanum+Myeongjo&family=Nunito:ital,wght@0,200..1000;1,200..1000&family=Pinyon+Script&family=Rubik:ital,wght@0,300..900;1,300..900&family=Ruda:wght@400..900&display=swap" rel="stylesheet">

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

    <h2>Edit Book</h2>
    <a href="show.php" class="back">BACK</a>
    <br><br>

    <?php
    include 'connect.php';

    // Ambil ID dari link
    $id = $_GET['id'];

    // Query data buku berdasarkan ID
    $data = mysqli_query($connect, "SELECT * FROM book WHERE id='$id'");
    $d = mysqli_fetch_array($data);
    ?>

    <form method="POST">
        <table>
            <tr>
                <td>Title</td>
                <td>
                    <input type="hidden" name="id" value="<?php echo $d['id']; ?>">
                    <input type="text" name="title" value="<?php echo $d['title']; ?>">
                </td>
            </tr>

            <tr>
                <td>Author</td>
                <td><input type="text" name="author" value="<?php echo $d['author']; ?>"></td>
            </tr>

            <tr>
                <td>Cover URL</td>
                <td><input type="text" name="cover" value="<?php echo $d['cover']; ?>"></td>
            </tr>

            <tr>
                <td>Year</td>
                <td><input type="number" name="year" value="<?php echo $d['year']; ?>"></td>
            </tr>

            <tr>
                <td>Genre</td>
                <td><input type="text" name="genre" value="<?php echo $d['genre']; ?>"></td>
            </tr>

            <tr>
                <td>Synopsis</td>
                <td>
                    <textarea name="synopsis" rows="4" cols="30"><?php echo $d['synopsis']; ?></textarea>
                </td>
            </tr>

            <tr>
                <td colspan="2"><input type="submit" name="update" value="UPDATE"></td>
            </tr>
        </table>
    </form>
    <footer class="footer">
        <p>© 2025 Midnight Library. All rights reserved.</p>
    </footer>
</body>
</html>