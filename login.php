<?php
session_start();

// Tidak ada redirect otomatis di sini
// Halaman login harus tetap muncul meskipun user sudah login sebelumnya
?>
<!DOCTYPE html>
<html lang="id">
<head>
<meta charset="UTF-8">
<title>Login</title>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

<style>
body {
    background: #7c3aed;
    font-family: Poppins;
}

.login-box {
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

.alert {
    margin-bottom: 15px;
    padding: 10px 14px;
    border-radius: 8px;
}
</style>

</head>
<body>

<?php if(isset($_GET['error'])): ?>
<div class="alert alert-danger text-center">
    <?= htmlspecialchars($_GET['error']); ?>
</div>
<?php endif; ?>

<div class="login-box">
    <h3 class="text-center mb-3" style="color:#7c3aed;">Login</h3>

    <form action="proses_login.php" method="POST">
        <label>Email:</label>
        <input type="email" name="email" required class="form-control mb-3" placeholder="Masukkan email admin">

        <label>Password:</label>
        <input type="password" name="password" required class="form-control mb-4" placeholder="Masukkan password">

        <button type="submit" class="btn btn-purple w-100">Masuk</button>
    </form>
</div>

</body>
</html>
