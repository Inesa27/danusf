<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Danus Formatif Store — Kelompok 9</title>

  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" />

  <!-- Google Font -->
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600;700&display=swap" rel="stylesheet" />

  <style>

    /* ✅ Smooth Scrolling */
    html {
      scroll-behavior: smooth;
    }

    :root {
      --ungu-utama: #7c3aed;
      --ungu-muda: #ede9fe;
      --bg: #f8f5ff;
      --card-shadow: 0 12px 30px rgba(16,24,40,0.06);
      --glass: rgba(255,255,255,0.94);
    }

    /* Basic */
    * { box-sizing: border-box; }
    body {
      font-family: "Poppins", sans-serif;
      background: var(--bg);
      color: #222;
      margin: 0;
      -webkit-font-smoothing:antialiased;
      -moz-osx-font-smoothing:grayscale;
    }
    .container { max-width: 1140px; }

    /* NAVBAR */
    .navbar {
      background: var(--glass);
      backdrop-filter: blur(6px);
      box-shadow: 0 8px 30px rgba(124,58,237,0.06);
    }
    .navbar-brand { color: var(--ungu-utama); font-weight: 700; }
    .nav-link { color: #444 !important; font-weight: 600; transition: color .2s ease; }
    .nav-link:hover, .nav-link.active { color: var(--ungu-utama) !important; }

    /* HERO */
    .hero {
      padding: 140px 20px;
      text-align: center;
      background: linear-gradient(180deg, rgba(124,58,237,0.55), rgba(124,58,237,0.38)),
                  url('https://www.thetechedvocate.org/wp-content/uploads/2023/05/merchandise.webp') center/cover no-repeat;
      color: #fff;
    }
    .hero h1 { font-size: 3rem; margin-bottom: .4rem; line-height:1.05; }
    .hero p { opacity: .95; font-size: 1.05rem; max-width:860px; margin:0 auto; }

    .btn-cta {
      background: #fff;
      color: var(--ungu-utama);
      border-radius: 40px;
      padding: 12px 28px;
      border: none;
      font-weight: 700;
      transition: transform .15s ease, box-shadow .15s ease;
    }
    .btn-cta:hover { background: var(--ungu-muda); transform: translateY(-4px); box-shadow: 0 10px 30px rgba(124,58,237,0.12); }

    /* PRODUK SECTION */
    .produk-section { padding: 60px 20px; }
    .produk-section h2 { letter-spacing: -0.2px; }

    .card-produk {
      border-radius: 16px;
      overflow: hidden;
      border: none;
      background: #fff;
      box-shadow: var(--card-shadow);
      transition: transform .32s cubic-bezier(.2,.9,.2,1), box-shadow .32s ease;
      will-change: transform;
    }
    .card-produk:hover {
      transform: translateY(-8px);
      box-shadow: 0 20px 50px rgba(16,24,40,0.12);
    }

    .card-produk .thumb {
      height: 220px;
      width: 100%;
      object-fit: cover;
      transition: transform .45s cubic-bezier(.2,.9,.2,1);
      display: block;
    }
    .card-produk:hover .thumb { transform: scale(1.06); }

    .produk-body { padding: 18px; }
    .price { color: #6b7280; font-weight: 700; margin:0; }
    .badge-new {
      background: linear-gradient(90deg,#a78bfa,#7c3aed);
      color: #fff;
      padding: 6px 10px;
      border-radius: 999px;
      font-size: .8rem;
      display: inline-block;
    }

    .small-thumb {
      width: 70px;
      height: 70px;
      object-fit: cover;
      border-radius: 8px;
      border: 2px solid #fff;
      box-shadow: 0 6px 18px rgba(124,58,237,0.12);
    }

    .btn-outline-secondary {
      border-radius: 10px;
      transition: transform .12s ease, box-shadow .12s ease;
    }
    .btn-outline-secondary:hover { transform: translateY(-3px); box-shadow: 0 8px 26px rgba(16,24,40,0.08); }
    .btn-primary {
      border-radius: 10px;
      font-weight: 700;
      transition: transform .12s ease, box-shadow .12s ease;
    }
    .btn-primary:hover { transform: translateY(-3px); box-shadow: 0 10px 30px rgba(124,58,237,0.12); }

    .btn-success {
      border-radius: 10px;
      font-weight: 700;
      transition: box-shadow .12s ease, transform .12s ease;
    }
    .btn-success:hover { box-shadow: 0 10px 30px rgba(34,197,94,0.16); transform: translateY(-3px); }

    .modal-content {
      background: linear-gradient(180deg,#1a1a1a,#262626);
      border-radius: 12px;
      color: #fff;
      overflow: hidden;
    }
    .modal-content h4 { color: #fff; margin-bottom: 8px; }
    .modal-content p { color: #e6e6e6; margin-bottom: 12px; }

    .modal-img {
      width: 100%;
      height: 420px;
      object-fit: cover;
      border-radius: 8px;
      display: block;
    }

    .carousel-fade .carousel-item {
      transition: opacity .8s ease;
    }

    .galeri { padding: 60px 20px; }
    .galeri img {
      width: 100%;
      border-radius: 12px;
      box-shadow: 0 8px 30px rgba(16,24,40,0.06);
      transition: transform .35s cubic-bezier(.2,.9,.2,1), box-shadow .35s ease;
      display: block;
    }
    .galeri img:hover {
      transform: scale(1.06);
      box-shadow: 0 18px 60px rgba(0,0,0,0.28);
    }

    .tentang {
      background: var(--ungu-muda);
      padding: 60px 20px;
      border-radius: 12px;
    }
    .team-illustration {
      max-width: 520px;
      width: 100%;
      margin: auto;
      display:block;
      border-radius: 18px;
    }

    .how-to {
      background: #fff;
      padding: 28px;
      border-radius: 12px;
      box-shadow: 0 8px 30px rgba(16,24,40,0.04);
    }

    footer {
      background: var(--ungu-utama);
      color: #fff;
      padding: 28px;
      text-align: center;
      margin-top: 30px;
    }

    [data-animate] {
      opacity: 0;
      transform: translateY(18px);
      transition: all .6s ease-out;
    }
    [data-animate].visible {
      opacity: 1;
      transform: none;
    }

    h5 { margin-bottom: 6px; }
    .text-muted { color: #7b8088 !important; }

    @media(max-width: 992px) {
      .card-produk .thumb { height: 200px; }
    }
    @media(max-width: 768px) {
      .hero { padding: 80px 20px; }
      .hero h1 { font-size: 1.8rem; }
      .card-produk .thumb { height: 180px; }
      .modal-img { height: 260px; }
    }
  </style>
</head>
<body>
