<?php
session_start();
if(!isset($_SESSION['login'])){ header("Location: ../auth/login.php"); exit(); }
?>
<!DOCTYPE html>
<html>
<head>
<meta charset='UTF-8'>
<title>Pengaturan</title>
<link href='https://fonts.googleapis.com/css2?family=Poppins:wght@400;600;700&display=swap' rel='stylesheet'>
<style>
body{margin:0;font-family:Poppins;background:#f5f3ff;}
.sidebar{width:230px;height:100vh;background:#7c3aed;color:white;position:fixed;padding-top:30px;}
.sidebar a{color:white;padding:14px 22px;display:block;text-decoration:none;}
.sidebar a:hover{background:rgba(255,255,255,.2);}
.sidebar .active{background:rgba(255,255,255,.28);}
.main{margin-left:230px;padding:30px;}
.box{background:white;padding:20px;border-radius:14px;width:450px;box-shadow:0 4px 15px rgba(0,0,0,.1);}
label{font-weight:600;margin-top:10px;}
input{width:100%;padding:10px;border:1px solid #ddd;border-radius:8px;margin-bottom:12px;}
.btn-save{padding:10px 16px;background:#7c3aed;color:white;border-radius:8px;font-weight:600;}
</style>
</head>
<body>

<div class='sidebar'>
    <h2 style='text-align:center;'>ADMIN</h2>
    <a href='index.php'>Dashboard</a>
    <a href='produk.php'>Kelola Produk</a>
    <a href='pesanan.php'>Pesanan</a>
    <a class='active' href='pengaturan.php'>Pengaturan</a>

    <!-- 🔥 Tombol baru: Kembali ke Website -->
    <a href="../main.php">Kembali ke Website</a>

    <a href='../auth/logout.php'>Logout</a>
</div>

<div class='main'>
    <h1>Pengaturan Admin</h1>
    <div class='box'>
        <label>Nama Admin</label><input type='text' value='Admin Danus'>
        <label>Email Admin</label><input type='email' value='inesaaisahwa01@gmail.com'>
        <label>Password Baru</label><input type='password' placeholder='Isi jika ingin mengganti'>
        <button class='btn-save'>Simpan</button>
    </div>
</div>

</body>
</html>
