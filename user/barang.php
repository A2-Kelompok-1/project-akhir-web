<?php include 'header.php'; ?>

<div class="border border-1 shadow shadow-lg rounded" style=" padding: 30px; padding-bottom: 100px;">
    <table class="table table-striped" id="example">
    <thead>
        <tr>
            <th scope="col">No</th>
            <th scope="col">Nama Produk</th>
            <th scope="col">Gambar Produk</th>
            <th scope="col">Deskripsi</th>
            <th scope="col">Harga</th>
            <th scope="col">Action</th>
        </tr>
    </thead>
    <tbody>
        <?php 
            $query = "SELECT * FROM produk";
            $result = mysqli_query($conn, $query);
            $i=1;
            while($row = mysqli_fetch_assoc($result)) : 
        ?>

        <tr>
            <td style="text-align: center;"><?php echo $i ?></td>
            <td><?php echo $row['nama']?></td>
            <td><img src="../image/<?php echo $row['gambar'] ?>" width="150px"></td>
            <td><?php echo $row['deskripsi']?></td>
            <td style="text-align: center;"><?php echo $row['harga']?></td>
            <td>
                <button type="button" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#beliModal"
                    onclick="setData('<?= $row['id'] ?>', '<?= $row['harga'] ?>')">
                    Beli
                </button>
            </td>
        </tr>

        <?php 
            $i++;
            endwhile;
        ?>
    </tbody>
    </table>
</div>

<!-- Modal -->
<div class="modal fade" id="beliModal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="beliModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="beliModalLabel">Masukan Jumlah Pesanan</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form action="proses.php?action=beli" method="post" id="beliForm">
            <input type="hidden" name="id_produk" id="editID">
            <input type="hidden" name="total_harga" id="editTotalHarga" value="0">
            <label>Jumlah</label>
            <input type="number" name="jumlah" class="form-control" onchange="totalHarga(this)">
            <h1 id="total" class="text-center my-3">Total Harga = 0</h1>
        </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-success" form="beliForm">Beli</button>
      </div>
    </div>
  </div>
</div>

<script>
    let h;

    function setData(id, harga) {
        editID.value = id;
        h = harga;
        total.innerHTML = 'Total Harga = 0';
        editTotalHarga.value = 0;
    }

    function totalHarga(input) {
        total.innerHTML = 'Total Harga = ' + (h * input.value);
        editTotalHarga.value = h * input.value;
    }
        
</script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
<script src="https://cdn.startbootstrap.com/sb-forms-latest.js"></script>
<link rel="stylesheet" href="https://cdn.datatables.net/1.13.4/css/jquery.dataTables.min.css">
<script src="https://code.jquery.com/jquery-3.5.1.js"></script>
<script src="https://cdn.datatables.net/1.13.4/js/jquery.dataTables.min.js"></script>

<script>
        $(document).ready(function () {
            $('#example').DataTable();
        });
</script>

<footer class="border">© 2023 - IT Development <span id="text">@Glamour </span>Shop - All Rights Reserved</footer>
