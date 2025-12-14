<?php 
$servername = "localhost";
$username ="root";
$password = "";
$database = "db_danusstore";

$koneksi = mysqli_connect($servername, $username, $password, $database);

if (!$koneksi) {
    die("Gagal konek database: " . mysqli_connect_error());
} else {
    echo "Koneksi Berhasil";
}
?>