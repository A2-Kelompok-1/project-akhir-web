<?php

include 'head.php';
require '../koneksi.php';


// hak akses dapat dilakukan jika membawa id
if(!isset($_GET['id'])){
    header('location: index.php');
    exit;
} 

$id = $_GET['id'];
$query  = "SELECT * FROM produk WHERE id = $id"; 
$result = mysqli_query($conn, $query);

// keamanan 
if(mysqli_num_rows($result) == 1){
    $row = mysqli_fetch_assoc($result);
} else{
    header('location: index.php');
    exit;
}

function ubah($data){
    global $conn;
    $id          = $_POST['id'];
    $nama        = $_POST['nama'];
    $deskripsi   = $_POST['deskripsi'];
    $harga       = $_POST['harga'];

    //upload gambar
    $gambar      = $_FILES['gambar']['name'];
    $tmp_name    = $_FILES['gambar']['tmp_name'];
    $folder      = "../image/".$gambar;

    if($gambar!=""){
        move_uploaded_file($tmp_name,$folder);
        $query = "UPDATE produk SET 
                  nama      = '$nama',
                  gambar    = '$gambar',
                  deskripsi = '$deskripsi',
                  harga     = '$harga'
                  WHERE id  = '$id'";
    } else {
        $query = "UPDATE produk SET 
                  nama      = '$nama',
                  deskripsi = '$deskripsi',
                  harga     = '$harga'
                  WHERE id  = '$id'";
    }
    
    mysqli_query($conn, $query);
    return mysqli_affected_rows($conn);
}

if (isset($_POST["update"])){
    if (ubah($_POST) > 0){
        echo "<script>
        alert('Berhasil Mengubah Data');
        document.location.href='view.php';
        </script>";
    } else {
        echo "<script>
        alert('Gagal Mengubah Data');
        </script>";   
    }
}
?>


<section>
    <p class="h2 p-2 text-center">Update Produk</p>
    <div class="container">
        <form method="post" enctype="multipart/form-data">

            <input type="hidden" name="id" value="<?php echo $row['id']; ?>">

            <div class="form-group row mb-3">
                <div class="col-sm-6">
                    <label>Nama Produk</label>
                    <input type="text" name="nama" class="form-control" placeholder="Masukan Nama Produk" required
                    value="<?php echo $row['nama']?>">
                </div>
            </div>
            <div class="form-group row mb-3">
                <div class="col-sm-6">
                    <label>Masukan Gambar</label>
                    <input type="file" name="gambar" accept=".jpg,.pgn" class="form-control">
                    <p id="text-info">Masukan gambar dengan type file jpg atau pgn</p>
                    <img src="../image/<?php echo $row ['gambar']?>" width="150px">
                </div>
                <div class="col-sm-6">
                    <label>Harga Produk</label>
                    <input type="number" name="harga" class="form-control" placeholder="Contoh : 50000" required
                    value="<?php echo $row['harga']?>">
                    <p id="text-info">Masukan Harga tanpa menggunakan titik(.) atau koma(,)</p>
                </div>
            </div>
            <div class="form-group row mb-3">
                    <label>Deskripsi</label>
                    <textarea name="deskripsi" class="form-control" placeholder="Deskripsi Produk"><?php echo $row['deskripsi']?></textarea>
                <div class="d-grid gap-2 mx-auto">
                    <br><button class="btn btn-primary" type="submit" name="update">Update</button>
                </div>
            </div>
        </form>
</section>

<footer class="border">© 2023 - IT Development <span id="text">@Glamour </span>Shop - All Rights Reserved</footer>
