<?php
session_start();
if(!isset($_SESSION['login'])){ header("Location: ../auth/login.php"); exit(); }
?>
<!DOCTYPE html>
<html lang='id'>
<head>
<meta charset='UTF-8'>
<title>Dashboard Admin</title>
<script src='https://cdn.jsdelivr.net/npm/chart.js'></script>
<link href='https://fonts.googleapis.com/css2?family=Poppins:wght@400;600;700&display=swap' rel='stylesheet'>
<style>
body{margin:0;font-family:Poppins;background:#f5f3ff;}
.sidebar{width:230px;height:100vh;background:#7c3aed;color:white;position:fixed;padding-top:30px;}
.sidebar h2{text-align:center;font-weight:700;}
.sidebar a{display:block;padding:14px 22px;color:white;text-decoration:none;}
.sidebar a:hover{background:rgba(255,255,255,.2);}
.sidebar .active{background:rgba(255,255,255,.28);}
.main{margin-left:230px;padding:30px;}
.cards{display:flex;gap:20px;}
.card{background:white;flex:1;padding:20px;text-align:center;border-radius:14px;box-shadow:0 4px 15px rgba(0,0,0,.1);}
.card p{font-size:32px;font-weight:700;color:#7c3aed;}
.table-box{background:white;padding:20px;border-radius:14px;margin-top:25px;box-shadow:0 4px 15px rgba(0,0,0,.1);}
</style>
</head>
<body>

<div class="box">
    <h2 class="fw-bold" style="color:#7c3aed;">Danus Formatif Store</h2>
    <p class="mt-2">Silakan login untuk masuk ke halaman utama.</p>

    <a href="login.php" class="btn btn-purple mt-3 w-100">Masuk</a>

<div class='sidebar'>
    <h2>ADMIN</h2>
    <a class='active' href='index.php'>Dashboard</a>
    <a href='produk.php'>Kelola Produk</a>
    <a href='pesanan.php'>Pesanan</a>
    <a href='pengaturan.php'>Pengaturan</a>

    <a href="../main.php">Kembali ke Website</a>

    <a href='../auth/logout.php'>Logout</a>
</div>


<div class='main'>
    <h1>Dashboard Admin</h1>
    <p style='margin-top:-6px;color:#555;'>Selamat datang, admin!</p>

    <div class='cards'>
        <div class='card'><h3>Total Produk</h3><p>15</p></div>
        <div class='card'><h3>Total Pesanan</h3><p>29</p></div>
        <div class='card'><h3>User Terdaftar</h3><p>102</p></div>
    </div>

    <div class='table-box'>
        <h3>Grafik Penjualan</h3>
        <canvas id='chartPenjualan'></canvas>
    </div>

<script>
new Chart(document.getElementById("chartPenjualan"), {
    type:"line",
    data:{
        labels:["Jan","Feb","Mar","Apr","Mei","Jun"],
        datasets:[{
            label:"Penjualan",
            data:[10,20,18,28,22,40],
            borderColor:"#7c3aed",
            backgroundColor:"#c4b5fd",
            tension:0.35,
            borderWidth:3
        }]
    },
    options:{scales:{y:{beginAtZero:true}}}
});
</script>

</div>
</body>
</html>
