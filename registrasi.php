<?php

session_start();

require 'koneksi.php';

if(isset($_POST['registrasi'])) {
    $nama = $_POST['nama'];
    $username = $_POST['username'];
    $password = $_POST['password'];
    $role = $_POST['role'];

    $query = "SELECT * FROM users WHERE  nama='$nama' && password='$password'";
    $result = mysqli_query($conn, $query);
   
    if(isset($error)) {
        foreach($error as $error){
            echo '$error';
        }

    }if(mysqli_num_rows($result) > 0) {
        $error[] = 'User Tidak Terdaftar';

    }else{
        $query = "INSERT INTO users (nama, username, password, role) VALUES ('$nama', '$username', '$password', '$role')";
        $result = mysqli_query($conn, $query);
        echo "<script>
            Swal.fire({
                title: 'Anda Berhasil Melakukan Registrasi',
                icon: 'success',
                showConfirmButton: false,
                timer: 2000
            }).then(function() {
            window.location.href = 'login.php';});
        </script>";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Registrasi</title>
   <link rel="stylesheet" href="style.css">
</head>
<body id="registrasi">
    <div class="container">
        <div class="form-container">
            <h1>REGISTRASI</h1>
            <form action="" enctype="multipart/form-data" method="POST">
                <input type="text" name="nama" class="box" placeholder="Masukan Nama" required></br></br>
                <input type="username" name="username" class="box" placeholder="Masukan Username" required></br></br>
                <input type="password" name="password" class="box" placeholder="Masukan Password" required></br></br>
                <select class="form-select" name="role">
                    <option value="user" selected>User</option>
                </select>
                <label for="role"></label>
                <input type="submit" value="DAFTAR" class="btn" name="registrasi" ></br></br>
                <p>Sudah punya akun? <a href="login.php">Login</a></p>
            </form>
        </div>
    </div>
</body>
</html>