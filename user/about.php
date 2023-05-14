<?php 

//memulai sesi
session_start();

//memerikasi variabel role
if(!isset($_SESSION['role'])) {
    header('location:../login.php');
    exit();
}


include 'header.php'; 

?>

<section class="section_user">
    <p class="h3 text-center">Tentang Kami</p>
    <p class="tentang">Glamour Shop adalah sebuah toko yang menyediakan berbagai macam aksesoris berkualitas 
    tinggi untuk meningkatkan gaya dan keindahan Anda. Dengan fokus pada tren terkini dan kebutuhan fashion, 
    kami menawarkan beragam pilihan produk aksesoris yang elegan dan modis.
</section>

<footer class="border">© 2023 - IT Development <span id="text">@Glamour </span>Shop - All Rights Reserved</footer>