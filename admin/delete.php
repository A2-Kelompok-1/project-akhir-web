<?php

// memanggil file konfigurasi koneksi ke database
require '../koneksi.php';

// mengambil nilai id --> (mencari data produk)
$id = $_GET['id'];

// mengecek paramater id dan melakukan eksekusi
if($id){
    // mencari data produk
    $query = "SELECT gambar FROM produk WHERE id = '$id'";
    $result = mysqli_query($conn, $query);
    if(mysqli_num_rows($result) == 1){
        $row = mysqli_fetch_assoc($result);
        $folder = "../image/".$row['gambar'];
        // menghapus file gambar yang terkait dengan data produk yang dihapus
        unlink($folder);
    }
    // menghapus data produk
    $_query = "DELETE FROM produk WHERE id = $id";
    // menjalankan query yang dibuat 
    mysqli_query($conn, $_query);
    
    echo "<script>
        alert('Berhasil Menghapus Data');
        document.location.href = 'view.php';
    </script>";
}

?>