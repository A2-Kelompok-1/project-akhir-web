<?php
include('koneksi.php');
?>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Pesanan</title>
</head>
<body>
    
<?php
include('koneksi.php');
?>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href ="edit.css">
    <title>Edit Pesanan</title>
</head>

<body>
    
    <?php
    
    // Memeriksa apakah form telah disubmit
    if (isset($_POST['submit'])) {
        // Mengambil data dari form
        $id_pesanan = $_POST['id'];
        $status_pesanan = $_POST['status_pesanan'];
  
        // Memperbarui data pesanan di database
        $query = "UPDATE pemesanan SET status_pesanan = '$status_pesanan' WHERE id_pemesanan = '$id_pesanan'";
        mysqli_query($conn, $query);
  
        // Memberikan feedback ke pengguna
        echo "Pesanan dengan id $id_pesanan telah diperbarui.";
        header("location: staff.php");
    }
  
    // Memeriksa apakah parameter id telah diberikan
    if (isset($_GET['id'])) {
        // Mengambil id pesanan dari parameter
        $id_pesanan = $_GET['id'];
  
        // Mengambil data pesanan dari database
        $query = "SELECT * FROM pemesanan WHERE id_pemesanan = '$id_pesanan'";
        $result = mysqli_query($conn, $query);
        $row = mysqli_fetch_assoc($result);
    ?>
  
    <h1>Edit Pesanan</h1>
  
    <form method="POST">
        <input type="hidden" name="id" value="<?php echo $row['id_pemesanan']; ?>">
        <label>
            ID User:
            <input type="text" name="id_user" value="<?php echo $row['id_user']; ?>" readonly>
        </label>
        <br>
        <label>
            ID Barang:
            <input type="text" name="id_produk" value="<?php echo $row['id_produk']; ?>" readonly>
        </label>
        <br>
        <label>
            Jumlah:
            <input type="text" name="jumlah" value="<?php echo $row['jumlah']; ?>" readonly>
        </label>
        <br>
        <label>
            Total Harga:
            <input type="text" name="total_harga" value="<?php echo $row['total_harga']; ?>" readonly>
        </label>
        <br>
        <label>
            Status Pesanan:
            <select name="status_pesanan">
                <option value="1" <?php if ($row['status_pesanan'] == 1) echo 'selected'; ?>>Selesai</option>
                <option value="0" <?php if ($row['status_pesanan'] == 0) echo 'selected'; ?>>Proses</option>
            </select>
        </label>
        <br>
        <button type="submit" name="submit">Simpan Perubahan</button>
    </form>
  
    <?php

    }
  ?>
    
</body>
</html>
