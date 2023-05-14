<?php

//memasukan file eksternal ke dalam skrip php
include 'head.php';

$query = "SELECT * FROM produk";
$result = mysqli_query($conn, $query);
?>

<section>
    <div class="container">
        <p class="h2 p-2 text-center">Data Produk</p>
        <a id="tambah" href="insert.php" class="btn btn-outline-dark"><i class="bi bi-plus-circle"></i> Tambah Produk</a>
		<table id="example" class="display" style="width:100%">
			<thead>
				<tr>
					<th>No</th>
					<th>Nama Produk</th>
                    <th>Gambar Produk</th>
                    <th>Deskripsi</th>
					<th>Harga</th>
					<th>Edit</th>
                	<th>Hapus</th>
				</tr>
			</thead>

		    <?php
			//loop --> mengambil setiap baris data yang ditemukan di query
            $i=1;
            while($row = mysqli_fetch_assoc($result)) { ?>
			<tr>
				<td><?php echo $i ?></td>
				<td><?php echo $row['nama']?></td>
				<td><img src="../image/<?php echo $row['gambar'] ?>" width="150px"></td>
				<td><?php echo $row['deskripsi']?></td>
				<td><?php echo $row['harga']?></td>
				<td><a href="update.php?id=<?php echo $row['id'] ?>"><i class="bi bi-pencil-square"></i></a></td>
				<td><a onclick="event.preventDefault();
					Swal.fire({
						title: 'Anda yakin ingin menghapus data produk?',
						icon: 'warning',
						showCancelButton: true,
						confirmButtonText: 'Ya',
						cancelButtonText: 'Tidak'
					}).then((result) => {
						if (result.isConfirmed) {
						window.location.href = 'delete.php?id=<?php echo $row['id'] ?>';
						}
					});">
					<i class="bi bi-trash-fill"></i>
					</a>
				</td>
			</tr>
            <?php $i++ ?>
		    <?php } ?>
        </table>
    </div>
</section>
<footer class="border">© 2023 - IT Development <span id="text">@Glamour </span>Shop - All Rights Reserved</footer>

<!-- Datatables -->
<script>
        $(document).ready(function () {
            $('#example').DataTable();
        });
</script>