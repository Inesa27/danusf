<?php
session_start();
if(!isset($_SESSION['login'])){ header("Location: ../auth/login.php"); exit(); }
?>
<!DOCTYPE html>
<html>
<head>
<meta charset='UTF-8'>
<title>Pesanan</title>
<link href='https://fonts.googleapis.com/css2?family=Poppins:wght@400;600;700&display=swap' rel='stylesheet'>
<style>
body{margin:0;font-family:Poppins;background:#f5f3ff;}
.sidebar{width:230px;height:100vh;background:#7c3aed;color:white;position:fixed;padding-top:30px;}
.sidebar a{color:white;padding:14px 22px;display:block;text-decoration:none;}
.sidebar a:hover{background:rgba(255,255,255,.2);}
.sidebar .active{background:rgba(255,255,255,.28);}
.main{margin-left:230px;padding:30px;}
.table-box{background:white;padding:20px;border-radius:14px;box-shadow:0 4px 15px rgba(0,0,0,.1);}
table{width:100%;border-collapse:collapse;}
th,td{padding:10px;border-bottom:1px solid #ddd;}
th{background:#ede9fe;}
.status{padding:6px 10px;border-radius:6px;color:white;background:#7c3aed;}
</style>
</head>
<body>

<div class='sidebar'>
    <h2 style='text-align:center;'>ADMIN</h2>
    <a href='index.php'>Dashboard</a>
    <a href='produk.php'>Kelola Produk</a>
    <a class='active' href='pesanan.php'>Pesanan</a>
    <a href='pengaturan.php'>Pengaturan</a>

    <!-- 🔥 Tombol baru -->
    <a href="../main.php">Kembali ke Website</a>

    <a href='../auth/logout.php'>Logout</a>
</div>

<div class='main'>
    <h1>Daftar Pesanan</h1>
    <div class='table-box'>
        <table>
            <tr><th>ID</th><th>Nama Pemesan</th><th>Produk</th><th>Status</th></tr>
            <tr>
                <td>1</td>
                <td>Anisa</td>
                <td>T-shirt</td>
                <td><span class='status'>Diproses</span></td>
            </tr>
        </table>
    </div>
</div>

</body>
</html>
