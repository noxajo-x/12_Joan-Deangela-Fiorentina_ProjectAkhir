<?php
// koneksi database
include 'connect.php';

// menangkap data id yang di kirim dari url
$id = $_GET['id'];

// menghapus data dari database
mysqli_query($connect, "delete from book where id='$id'");

// mengalihkan halaman kembali ke index.php
header("location:show.php");

?>