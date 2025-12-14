<?php 
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}
?>

<nav class="navbar navbar-expand-lg bg-white shadow-sm fixed-top" style="padding:14px 0;">
    <div class="container d-flex align-items-center">

        <!-- ICON GARIS TIGA (MUNCUL HANYA JIKA LOGIN) -->
        <?php if(isset($_SESSION['login']) && $_SESSION['login'] === true): ?>
            <a href="dashboard/index.php" 
               style="font-size:26px; margin-right:16px; color:#7c3aed; text-decoration:none;">
               &#9776;
            </a>
        <?php endif; ?>

        <!-- BRAND -->
        <a class="navbar-brand fw-bold" style="color:#7c3aed;">
            Danus Formatif Store
        </a>

        <!-- Toggle HP -->
        <button class="navbar-toggler" data-bs-toggle="collapse" data-bs-target="#navMenu">
            <span class="navbar-toggler-icon"></span>
        </button>

        <!-- MENU -->
        <div class="collapse navbar-collapse" id="navMenu">
            <ul class="navbar-nav ms-auto fw-semibold">

                <li class="nav-item"><a class="nav-link" href="#home">Home</a></li>
                <li class="nav-item"><a class="nav-link" href="#produk">Produk</a></li>
                <li class="nav-item"><a class="nav-link" href="#galeri">Galeri</a></li>
                <li class="nav-item"><a class="nav-link" href="#tentang">Tentang</a></li>
                <li class="nav-item"><a class="nav-link" href="#kontak">Kontak</a></li>

                <!-- LOGIN / LOGOUT -->
                <?php if(isset($_SESSION['login']) && $_SESSION['login'] === true): ?>

                    <li class="nav-item">
                        <a class="nav-link text-danger" href="auth/logout.php">Logout</a>
                    </li>

                <?php else: ?>

                    <li class="nav-item">
                        <a class="nav-link" href="auth/login.php">Login</a>
                    </li>

                <?php endif; ?>

            </ul>
        </div>

    </div>
</nav>
