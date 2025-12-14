<?php 
session_start();
require_once "koneksi.php";

if (!isset($_SESSION['email'])) {
    header("Location: login.php");
    exit;
}
?>

<?php
include "header.php";
include "navbar.php";

include "hero.php";
include "produk.php";
include "galeri.php";
include "tentang.php";
include "kontak.php";

include "footer.php";
?>

