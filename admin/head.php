<?php

//koneksi ke database
require '../koneksi.php';

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin</title>
    <link rel="stylesheet" href="../style.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.4/css/jquery.dataTables.min.css">
    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script src="https://cdn.datatables.net/1.13.4/js/jquery.dataTables.min.js"></script>
</head>
<body>
    <header class="navbar bg-light border-bottom fixed-top">
        <div class="container">
            <div class="container-right">
                <a href="index.php" id="logo" class="navbar-brand"><i class="bi bi-gem"></i> Glamour <span>Shop</span></a>
            </div>
            <div class="container-left">
                <a id="nav" href="view.php" class="navbar-brand"><i class="bi bi-folder2-open"></i></i> Data Produk</a>
                <a id="nav" href="#belum" class="navbar-brand">Logout <i class="bi bi-box-arrow-right"></i></a>
            </div>
        </div>
    </header>
</body>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11.1.4"></script>
</html>