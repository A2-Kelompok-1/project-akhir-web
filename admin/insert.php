<?php

//memasukan file kedalam halaman html
include 'head.php';

//memeriksa tombol
if(isset($_POST['tambah'])){
    $nama        =$_POST['nama'];
    $deskripsi   =$_POST['deskripsi'];
    $harga       =$_POST['harga'];

    //validasi harga
    if ($harga <= 0) {
        //menampilkan pesan 
        echo "<script>
            Swal.fire({
                title: 'Masukan harga dengan benar',
                icon: 'error',
                showConfirmButton: false,
                timer: 2000
            }).then(function() {
            window.location.href = 'insert.php';});
        </script>";
    exit;}

    //upload gambar
    $gambar      =$_FILES['gambar']['name'];
    $tmp_name    =$_FILES['gambar']['tmp_name'];
    $folder ='../image/'.$gambar;
    move_uploaded_file($tmp_name,$folder);

    $query  = "INSERT INTO produk VALUES ('','$nama', '$gambar', '$deskripsi', '$harga')";
    mysqli_query($conn, $query);
    //menampilkan pesan 
    echo "<script>
        Swal.fire({
            title: 'Data berhasil ditambahkan',
            icon: 'success',
            showConfirmButton: false,
            timer: 2000
        }).then(function() {
          window.location.href = 'view.php';});
      </script>";}
?>

<section>
    <p class="h2 p-2 text-center">Tambah Produk</p>
    <div class="container">
        <form method="post" enctype="multipart/form-data">
            <div class="form-group row mb-3">
                <div class="col-sm-6">
                    <label>Nama Produk</label>
                    <input type="text" name="nama" class="form-control" placeholder="Masukan Nama Produk" required>
                </div>
            </div>
            <div class="form-group row mb-3">
                <div class="col-sm-6">
                    <label>Masukan Gambar</label>
                    <input type="file" name="gambar" accept=".jpg,.pgn" class="form-control" required>
                    <p id="text-info">Masukan gambar dengan type file jpg atau pgn</p>
                </div>
                <div class="col-sm-6">
                    <label>Harga Produk</label>
                    <input type="number" name="harga" class="form-control" placeholder="Contoh : 50000" required>
                    <p id="text-info">Masukan Harga tanpa menggunakan titik(.) atau koma(,)</p>
                </div>
            </div>
            <div class="form-group row mb-3">
                <div class="col-sm-6">
                    <label>Deskripsi</label>
                    <textarea name="deskripsi" class="form-control" placeholder="Deskripsi Produk"></textarea>
                </div>
                <div class="d-grid gap-1 col-6 mx-auto">
                    <button class="btn btn-primary" type="submit" name="tambah">Tambah</button>
                    <button class="btn btn-secondary" type="reset">Reset</button>
                </div>
            </div>
            
        </form>
</section>
<footer class="border">© 2023 - IT Development <span id="text">@Glamour </span>Shop - All Rights Reserved</footer>
