<?php
include '../koneksi.php';
$action = $_GET['action'];

if($action == 'beli') {
    $id_produk = $_POST['id_produk'];
    $jumlah = $_POST['jumlah'];
    $total_harga = $_POST['total_harga'];
    $query  = "INSERT INTO pemesanan VALUES ('','$id_produk', '$jumlah', '$total_harga')";
    mysqli_query($conn, $query);

    header('Location: pemesanan.php');
}