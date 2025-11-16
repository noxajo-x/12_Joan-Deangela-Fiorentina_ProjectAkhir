
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Midnight Library - Books</title>
    <link rel="stylesheet" href="show.css?v=<?= time() ?>">
    
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

    <h1>🕮 Midnight Library - Book Collection 🕮</h1>
    <a href="add.php" class="add">+ Add Book</a>

    <?php  
    include 'connect.php';

    $no = 1;
    $data = mysqli_query($connect, "SELECT * FROM book");

    while ($d = mysqli_fetch_array($data)) {
    ?>

    <table border="1">
        <tr>
            <td rowspan="3">
                <?= $no++; ?>
            </td>

            <td class="book-title title-cell">
                <?= $d['title']; ?>
            </td>

            <td>
                <p>Year:</p> <?= $d['year']; ?>
            </td>

            <td rowspan="3" class="actions">
                <a href="update.php?id=<?= $d['id']; ?>">Update</a>
                <a href="delete.php?id=<?= $d['id']; ?>">Delete</a>
            </td>
            
        </tr>

        <tr>
            <td class="book-author author-cell">
                <p>Author:</p> <?= $d['author']; ?>
            </td>
            <td>
                <p>Genre:</p> <?= $d['genre']; ?>
            </td>
        </tr>

        <tr>
            <td>
                <img src="<?= $d['cover']; ?>" class="cover-img">
            </td>
            <td>
                <p>Synopsis:</p> <?= nl2br($d['synopsis']); ?>
            </td>
        </tr>

    </table>

    <br>

    <?php } ?>
    <footer class="footer">
        <p>© 2025 Midnight Library. All rights reserved.</p>
    </footer>
</body>
</html>
