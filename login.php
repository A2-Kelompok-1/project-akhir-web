<?php

session_start();
require 'koneksi.php';

if(isset($_POST['login'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];

    $query = "SELECT * FROM users WHERE username='$username' AND password='$password'";
    $result = mysqli_query($conn, $query);
    $data = mysqli_fetch_assoc($result);
    $cekdata = mysqli_num_rows($result);

    if($cekdata > 0) {
        if($data['role']=="admin") {
            $_SESSION['role']=$data['role'];
            $_SESSION['username']=$data['username'];
            echo "<body><script src='https://cdn.jsdelivr.net/npm/sweetalert2@11'></script>
                <script>
                Swal.fire({
                    position: 'top-center',
                    icon: 'success',
                    title: 'Berhasil Login',
                    showConfirmButton: false,
                    timer: 1500
                }).then(() => {
                    window.location.href = 'admin/index.php';
                });
                </script></body>";
            exit;

        } elseif($data['role']=="staf") {
            $_SESSION['role']=$data['role'];
            $_SESSION['username']=$data['username'];
            echo "<body><script src='https://cdn.jsdelivr.net/npm/sweetalert2@11'></script>
                <script>
                Swal.fire({
                    position: 'top-center',
                    icon: 'success',
                    title: 'Berhasil Login',
                    showConfirmButton: false,
                    timer: 1500
                }).then(() => {
                    window.location.href = 'staf/index.php';
                });
                </script></body>";
            exit;

        } elseif($data['role']=="user") {
            $_SESSION['role']=$data['role'];
            $_SESSION['username']=$data['username'];
            $_SESSION['id_user']=$data['id_user'];
            echo "<body><script src='https://cdn.jsdelivr.net/npm/sweetalert2@11'></script>
                <script>
                Swal.fire({
                    position: 'top-center',
                    icon: 'success',
                    title: 'Berhasil Login',
                    showConfirmButton: false,
                    timer: 1500
                }).then(() => {
                    window.location.href = 'user/index.php';
                });
                </script></body>";
            exit;
        }}
        
        echo "<body><script src='https://cdn.jsdelivr.net/npm/sweetalert2@11'></script>
        <script>
        Swal.fire({
            position: 'top-center',
            icon: 'error',
            title: 'Username atau Password Anda Salah',
            showConfirmButton: false,
            timer: 1500
        }).then(() => {
            window.location.href = 'login.php';
        });
    </script></body>";
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Login</title>
   <link rel="stylesheet" href="style.css">
</head>
<body id="login">
    <div class="container">
        <div class="form-container">
            <h1>LOGIN</h1>
            <form action="" method="POST">
            <input type="username" name="username" class="box" placeholder="Masukkan Username" required><br><br>
            <input type="password" name="password" class="box" placeholder="Masukkan Password" required><br><br>
            <input type="submit" value="LOGIN" class="btn" name="login"><br><br>
            <p>Belum punya akun? <a href="registrasi.php">Registrasi</a></p>
            </form>
        </div>
    </div>
</body>
</html>