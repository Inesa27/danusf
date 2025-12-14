<?php
session_start();
require 'koneksi.php'; 

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $email = $_POST['email'];
    $password = $_POST['password'];

    $cek = "SELECT * FROM admin WHERE email = '$email'";
    $hasil = mysqli_query($koneksi, $cek);

    if (mysqli_num_rows($hasil) > 0) {
        header("Location: registrasi.php?error=Email sudah digunakan!");
        exit;
    }

    $query_reg = "INSERT INTO registrasi (email, password) VALUES ('$email', '$password')";
    mysqli_query($koneksi, $query_reg);

    $query_admin = "INSERT INTO admin (email, password) VALUES ('$email', '$password')";
    if (mysqli_query($koneksi, $query_admin)) {
-
        $_SESSION['email'] = $email;

        if ($hasil) {
    header("Location: login.php"); 
    exit;
} else {
    echo "Registrasi gagal!";
}
        header("Location: main.php");
        exit;

    } else {
        header("Location: registrasi.php?error=Gagal mendaftar. Coba lagi.");
        exit;
    }
}
?>
<!DOCTYPE html>
<html lang="id">
<head>
<meta charset="UTF-8">
<title>Registrasi </title>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

<style>
body {
    background: #7c3aed;
    font-family: Poppins;
}

.register-box {
    width: 380px;
    background: white;
    padding: 28px;
    border-radius: 16px;
    box-shadow: 0 6px 20px rgba(0,0,0,0.15);
    margin: 80px auto;
}

.btn-purple {
    background: #7c3aed;
    color: white;
    font-weight: 600;
    border-radius: 8px;
}
.btn-purple:hover {
    background: #6d28d9;
}
</style>
</head>
<body>

<?php if(isset($_GET['error'])): ?>
<div class="alert alert-danger text-center">
    <?= htmlspecialchars($_GET['error']); ?>
</div>
<?php endif; ?>

<div class="register-box">
    <h3 class="text-center mb-3" style="color:#7c3aed;">Registrasi </h3>

    <form action="" method="POST">
        <label>Email:</label>
        <input type="email" name="email" required class="form-control mb-3" placeholder="Masukkan email admin">

        <label>Password:</label>
        <input type="password" name="password" required class="form-control mb-4" placeholder="Masukkan password admin">

        <button type="submit" class="btn btn-purple w-100">Daftar</button>
    </form>

    <p class="text-center mt-3">
        Sudah punya akun? <a href="login.php" style="color:#7c3aed;font-weight:600;">Login</a>
    </p>
</div>

</body>
</html>