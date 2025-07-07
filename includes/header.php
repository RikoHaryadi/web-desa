<?php
$currentPage = basename($_SERVER['PHP_SELF']); // Cek halaman aktif
?>
<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>Website Desa Pelayangan</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" />
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css" rel="stylesheet" />
  <style>
    body {
      font-family: 'Segoe UI', sans-serif;
    }
    .navbar {
      background-color: rgba(0, 0, 0, 0.6);
      z-index: 1000;
    }
    .navbar .nav-link {
      color: white !important;
      font-weight: bold;
    }
    .dropdown-menu {
      background-color: white;
    }
    <?php if ($currentPage == 'index.php'): ?>
    header {
      position: relative;
      background: url('assets/img/jembatan.webp') no-repeat center center/cover;
      height: 100vh;
      color: white;
      text-align: center;
      display: flex;
      flex-direction: column;
      justify-content: center;
    }
    .hero {
      font-size: 2.5rem;
      text-shadow: 2px 2px 5px rgba(0, 0, 0, 0.7);
    }
    .sub-hero {
      font-size: 1.2rem;
      margin-top: 10px;
    }
    <?php endif; ?>
  </style>
</head>
<body>
