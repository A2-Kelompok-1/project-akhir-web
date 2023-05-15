<?php
include 'koneksi.php';

$query = "SELECT * FROM produksi";
$result = mysqli_query($conn, $query);
?>

<!DOCTYPE html>
<html>
<head>
    <title>Status Pesanan</title>
</head>
<body>
    <h1>Status Pesanan</h1>
    <table>
        <thead>
            <tr>
                <th>ID Produksi</th>
                <th>ID User</th>
                <th>ID Produk</th>
                <th>ID Pemesanan</th>
                <th>Jumlah</th>
                <th>Total</th>
                <th>Status</th>
            </tr>
        </thead>
        <tbody>
            <?php while ($row = mysqli_fetch_array($result)) { ?>
                <tr>
                    <td><?php echo $row['id_produksi']; ?></td>
                    <td><?php echo $row['id_user']; ?></td>
                    <td><?php echo $row['id_produk']; ?></td>
                    <td><?php echo $row['id_pemesanan']; ?></td>
                    <td><?php echo $row['jumlah']; ?></td>
                    <td><?php echo $row['total']; ?></td>
                    <td>
                        <?php
                        if ($row['status'] == 0) {
                            echo "Selesai";
                        } else if ($row['status'] == 1) {
                            echo "Proses";
                        }
                        ?>
                    </td>
                </tr>
            <?php } ?>
        </tbody>
    </table>
</body>
</html>
