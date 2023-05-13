<?php include 'header.php'; ?>

<div class="border border-1 shadow shadow-lg rounded" style=" padding: 30px; padding-bottom: 300px;">
    <table class="table table-striped">
    <thead>
        <tr>
            <th scope="col">No</th>
            <th scope="col">Nama Produk</th>
            <th scope="col">Jumlah</th>
            <th scope="col">Total Harga</th>
        </tr>
    </thead>
    <tbody>
        <?php 
            $query = "SELECT * FROM pemesanan INNER JOIN produk ON produk.id = pemesanan.id_produk";
            $result = mysqli_query($conn, $query);
            $i=1;
            while($row = mysqli_fetch_assoc($result)) : 
        ?>

        <tr>
            <td><?= $i ?></td>
            <td><?= $row['nama'] ?></td>
            <td><?= $row['jumlah'] ?></td>
            <td><?= $row['total_harga'] ?></td>
        </tr>

        <?php 
            $i++;
            endwhile;
        ?>
    </tbody>
    </table>
</div>

<footer class="border">© 2023 - IT Development <span id="text">@Glamour </span>Shop - All Rights Reserved</footer>
