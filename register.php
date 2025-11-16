<?php
include 'connect.php';
// Cek apakah form telah dibuat
if(isset($_POST['register'])){
    // Ambil data dari form
    $name = $_POST['name']; // Menangkap nama lengkap dari form
    $username = $_POST['username'];
    $password = password_hash($_POST['password'], PASSWORD_DEFAULT); //Enskripsi password
    $age = $_POST['age'];
    $email = $_POST['email'];


    //Simpan data ke database
    $query = "insert into user (name, username, password, age, email) values ('$name', '$username', '$password', '$age', '$email')";
    // Eksekusi query
    $result = mysqli_query($connect, $query);

    // Cek apakah query berhasil
    if($result){
        // redirect ke halaman login setelah registrasi sukses
        echo "<script>alert('Registrasi Anda Telah Berhasil');
        window.location='login.php';</script>";
    } else{
        //  Tampilkan pesan eror jika registrasi gagal
        echo "Gagal registrasi";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel = "stylesheet" href="register.css?v=<?= time()?>">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Alumni+Sans+Pinstripe:ital@0;1&family=Doto:wght@100..900&family=Fleur+De+Leah&family=Imperial+Script&family=Jersey+10&family=Jua&family=Lovers+Quarrel&family=Martian+Mono:wght@100..800&family=Mukta+Malar:wght@200;300;400;500;600;700;800&family=Nanum+Myeongjo&family=Nunito:ital,wght@0,200..1000;1,200..1000&family=Pinyon+Script&family=Rubik:ital,wght@0,300..900;1,300..900&family=Ruda:wght@400..900&display=swap" rel="stylesheet">
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
    
    <h1>Registration</h1>
    <form method="POST">
        <fieldset>
            <table>
                <tr>
                    <td>
                        <label for="Full Name">Name</label> 
                    </td>
                    <td>:</td>
                    <td>
                        <input type="text" name="name">
                    </td>
                </tr>
                <tr>
                    <td>
                        <label for="Username">Username</label>
                    </td>
                    <td>:</td>
                    <td>
                        <input type="text" name="username">
                    </td>
                </tr>
                <tr>
                    <td>
                        <label for="Password">Password</label>
                    </td>
                    <td>:</td>
                    <td>
                        <input type="password" name="password">
                    </td>
                </tr>
                <tr>
                    <td>
                        <label for="Age">Age</label>
                    </td>
                    <td>:</td>
                    <td>
                        <input type="number" name="age">
                    </td>
                </tr>
                <tr>
                    <td>
                        <label for="Email">Email</label>
                    </td>
                    <td>:</td>
                    <td>
                        <input type="email" id="email" name="email" required>
                    </td>
                </tr>

                <tr>
                    <td colspan="5" style="text-align:center;"><input type="submit" name="register" value="Daftar"></td>
                </tr>

            </table>

            <div class="star">⋆˚☆˖°⋆｡° ✮˖ ࣪ ⊹⋆.˚⋆˚☆˖°⋆｡° ✮˖ ࣪ ⊹⋆.˚</div>

            <p class="link">Begin your journey — <a href="login.php">Login</a></p>
            
        </fieldset>
    </form>

    <footer class="footer">
        <p>© 2025 Midnight Library. All rights reserved.</p>
    </footer>
</body>
</html>