<?php
session_start();

if($_SESSION['status'] != "login"){
	header("Location: login.php?pesan=belum_login"); 
    exit();
} 
?>

<!DOCTYPE html>
<html lang="id">
<head>
<meta charset="UTF-8">
<title>Dashboard Depan</title>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet">

<style>
body {
    font-family: Poppins, sans-serif;
    background: linear-gradient(180deg, rgba(124,58,237,0.6), rgba(124,58,237,0.4)),
                url('https://www.thetechedvocate.org/wp-content/uploads/2023/05/merchandise.webp')
                center/cover no-repeat;
    height: 100vh;
    display: flex;
    justify-content: center;
    align-items: center;
}
.box {
    background: rgba(255,255,255,0.85);
    padding: 40px;
    border-radius: 16px;
    text-align: center;
    width: 420px;
}
.btn-purple {
    background: #7c3aed;
    color: white;
    border-radius: 12px;
    padding: 12px 20px;
    font-weight: 600;
}
</style>
</head>

<body>

<div class="box">
    <h2 class="fw-bold" style="color:#7c3aed;">Danus Formatif Store</h2>
    <p class="mt-2">Silakan login untuk masuk ke halaman utama.</p>

    <a href="auth/login.php" class="btn btn-purple mt-3 w-100">Masuk</a>
    <?php
session_start();

if($_SESSION['status'] != "login"){
	header("Location: login.php?pesan=belum_login");
    exit();
}

?>
<!DOCTYPE html>
<html>
<head>
	<title>Dashboard Utama</title>
</head>
<body>

	<h1>HALAMAN UTAMA / DASHBOARD</h1>
	<h2>Selamat Datang, <?php echo $_SESSION['username']; ?>!</h2>
	<p>Anda berhasil masuk ke sistem.</p>
    <div class="container">
        <h1 class="text-success">SELAMAT! ANDA BERHASIL MASUK</h1>
        <h2>Selamat Datang, <?php echo $_SESSION['username']; ?>!</h2>
        <p>Ini adalah halaman utama (Dashboard) setelah login berhasil.</p>
    
    <br>
    
    <a href="logout.php" LOGOUT</a>
</div>

</body>
</html>
