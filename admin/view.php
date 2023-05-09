<?php

include "head.php";

require "../koneksi.php";

$query = "SELECT * FROM produk";
$result = mysqli_query($conn, $query);

?>

<section>
    <div class="container">
        <p class="h2 p-2 text-center">Data Produk</p>
        <a id="tambah" href="insert.php" class="btn btn-outline-dark"><i class="bi bi-plus-circle"></i> Tambah Produk</a>
		<table class="table table-bordered">
			<thead class="table-dark">
				<tr>
					<th scope="col">No</th>
					<th scope="col">Nama Produk</th>
                    <th scope="col">Gambar Produk</th>
                    <th scope="col">Deskripsi</th>
					<th scope="col">Harga</th>
					<th scope="col" colspan="2">Action</th>
				</tr>
			</thead>

		    <?php
            $i=1;
            while($row = mysqli_fetch_assoc($result)) { ?>
			<tr>
				<td style="text-align: center;"><?php echo $i ?></td>
				<td><?php echo $row['nama']?></td>
				<td><img src="../image/<?php echo $row['gambar'] ?>" width="150px"></td>
				<td><?php echo $row['deskripsi']?></td>
				<td style="text-align: center;"><?php echo $row['harga']?></td>
				<td><a href="update.php?id=<?php echo $row['id'] ?>"><i class="bi bi-pencil-square"></i></a></td>
				<td><a onclick="return confirm('Anda Yakin menghapus data produk?')" href="delete.php?id=<?php echo $row['id'] ?>"><i class="bi bi-trash-fill"></i></a></td>
			</tr>
            <?php $i++ ?>
		    <?php } ?>
        </table>
    </div>
</section>
<footer class="border">© 2023 - IT Development <span id="text">@Glamour </span>Shop - All Rights Reserved</footer>