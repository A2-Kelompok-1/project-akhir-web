<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Glamour Shop</title>
    <link rel="stylesheet" href="style.css">
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
                <li class="nav-item">
                    <a id="nav-user" class="nav-link" href="#about">Tentang Kami</a>
                </li>
                <li class="nav-item">
                    <a id="nav-user" class="nav-link" href="#produk">Produk</a>
                </li>
                <li class="nav-item">
                    <a id="nav-user" class="nav-link" href="#petunjuk">Petunjuk</a>
                </li>
                <li class="nav-item">
                    <a id="nav-user" class="nav-link" href="login.php">Pesan</a>
                </li>
            </ul>
        </div>
    </nav>

    <section>
        <div id="about" class="awal">
            <p class="h3 text-center">Tentang Kami</p>
            <p class="tentang">Glamour Shop adalah sebuah toko yang menyediakan berbagai macam aksesoris berkualitas 
            tinggi untuk meningkatkan gaya dan keindahan Anda. Dengan fokus pada tren terkini dan kebutuhan fashion, 
            kami menawarkan beragam pilihan produk aksesoris yang elegan dan modis.</p>
        </div>

        <div id="produk" class="awal">
            <p class="h3 text-center">Aksesoris Best Seller</p>
            <p class="tentang text-center">Berikut beberapa aksesoris best seller di Glamour Shop</p>

            <div class="gambar_produk">
                <div class="row g-0">
                    <div class="col-md-4"><img class="w-100" src="image/2023-04-30 010558.jpg" alt=""></div>
                    <div class="col-md-4"><img class="w-100" src="image/2023-04-30 010732.jpg" alt=""></div>
                    <div class="col-md-4"><img class="w-100" src="image/2023-04-30 011151.jpg" alt=""></div>
                </div>
                <div class="row g-0">
                    <div class="col-md-4"><img class="w-100" src="image/2023-04-29 235922.jpg" alt=""></div>
                    <div class="col-md-4"><img class="w-100" src="image/2023-05-04 142811.jpg" alt=""></div>
                    <div class="col-md-4"><img class="w-100" src="image/2023-04-30 003910.jpg" alt=""></div>
                </div>
            </div>    
        </div>

        <div id="petunjuk" class="awal">
            <p class="h3 text-center">Informasi (Petunjuk)</p>
            <p class="tentang">Untuk pembelian aksesoris, Anda harus melakukan pemesanan produk terlebih dahulu 
            pada bagian pesan, agar tim staff dapat menyiapkan barang permintaan Anda.</p>
        </div>
        
    </section>
    <footer class="border">© 2023 - IT Development <span id="text">@Glamour </span>Shop - All Rights Reserved</footer>

    <!-- Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.3/dist/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>