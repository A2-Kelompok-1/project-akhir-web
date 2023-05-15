<?php
include 'koneksi.php';

// Memeriksa apakah ada request verifikasi yang dikirimkan
if (isset($_POST['verifikasi']) && isset($_POST['id'])) {
  // Mengambil id pesanan yang ingin diverifikasi
  $id_pesanan = $_POST['id'];

  // Menandai pesanan sebagai sudah diverifikasi
  $query = "UPDATE pemesanan SET status_verifikasi = 1 WHERE id = '$id_pesanan'";
  mysqli_query($conn, $query);

  // Memberikan feedback ke pengguna
  echo "Pesanan dengan id $id_pesanan telah diverifikasi.";
}


$query = "SELECT pemesanan.id_pemesanan, pemesanan.id_user, pemesanan.id_produk, pemesanan.jumlah, pemesanan.total_harga, pemesanan.status_pesanan, users.username, produk.nama FROM pemesanan INNER JOIN users ON pemesanan.id_user = users.id INNER JOIN produk ON pemesanan.id_produk = produk.id_produk";
$result = mysqli_query($conn, $query);


?>



<!DOCTYPE html>
<html>
<head>
    <title>Verifikasi Pesanan</title>
    <!-- Load Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href ="staff.css">
  </head>
<body>
  
        
    <!-- Load Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <a class="navbar-brand" href="#">Glamour Shop</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link" href="#">Verifikasi Pesanan</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="status.php">Status Pesanan</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="">Log Out</a>
      </li>
      </ul>
    </div>
  </nav>

  <div class="judul">

  
        <h1>Verifikasi Pesanan</h1>
        </div>

<!-- Tabel data pesanan -->
<table class="table">
  <thead>
    <tr>
      <th>ID Pesanan</th>
      <th>Nama User</th>
      <th>Nama Barang</th>
      <th>jumlah</th>
      <th>Total Harga</th>
      <th>Status Pesanan</th>
      <th>Option</th>
    </tr>
  </thead>
  <tbody>
    <?php
    
      // Menampilkan data pesanan dalam tabel
      while ($row = mysqli_fetch_assoc($result)) {
        echo "<tr>";
        echo "<td>" . $row["id_pemesanan"] . "</td>";
        echo "<td>" . $row["username"] . "</td>";
        echo "<td>" . $row["nama"] . "</td>";
        echo "<td>" . $row["jumlah"] . "</td>";
        echo "<td>" . $row["total_harga"] . "</td>";
        echo "<td>";
        if ($row["status_pesanan"] == 1) {
          echo "Selesai";
        } else {
          echo "Proses";
        }
        echo "</td>";
        echo "<td>";
        echo "<a href='edit.php?id=" . $row["id_pemesanan"] . "'>Edit</a>";
        echo "</td>";
        echo "</tr>";
      }
    ?>
  </tbody>
</table>

</body>
</html>
