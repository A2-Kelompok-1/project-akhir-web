<?php

require '../koneksi.php';
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Glamour Shop</title>
    <link rel="stylesheet" href="../style.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
    <nav id="navbar" class="navbar navbar-expand-lg navbar-dark bg-pink">
        <a href="index.php" id="logo2" class="navbar-brand"><i class="bi bi-gem"></i> Glamour <span>Shop</span></a>
        <button class="navbar-toggler ml-auto" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item active">
                    <a id="nav-user" class="nav-link" href="index.php">Beranda</a>
                </li>
                <li class="nav-item">
                    <a id="nav-user" class="nav-link" href="about.php">Tentang Kami</a>
                </li>
                <li class="nav-item">
                    <a id="nav-user" class="nav-link" href="barang.php">Produk</a>
                </li>
                <li class="nav-item">
                    <a id="nav-user" class="nav-link" href="pemesanan.php">Pesanan</a>
                </li>
                <li class="nav-item">
                    <a id="nav-user" class="nav-link" href="#">Logout</a>
                </li>
            </ul>
        </div>
    </nav>
    <!-- Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.3/dist/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>