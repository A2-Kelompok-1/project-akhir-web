<?php

include 'config.php';

if(isset($_POST['submit'])){

   $name = $_POST['name'];  
   $username = $_POST['username'];
   $password = md5($_POST['password']);
   $cpass = md5($_POST['cpass']);

   $select = $conn->prepare("SELECT * FROM `users` WHERE username = ?");
   $select->execute([$username]);

   if($select->rowCount() > 0){           
      $message[] = 'User with this username already exists!';
   }elseif($password != $cpass){
      $message[] = 'Confirm password does not match!';
   }else{
      $insert = $conn->prepare("INSERT INTO `users` (name, username, password) VALUES (?, ?, ?)");
      $insert->execute([$name, $username, $password]);
      $message[] = 'Registered successfully!';
      header('location: login.php');
      exit;
   }

}
?>


<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>register</title>

   <!-- font awesome cdn link  -->
   <link rel="stylesheet" href="../style.css">
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
</head>
<body id="registrasi">

<div class="container">
    <div class="form-container">
        <h1>REGISTRASI</h1>
        <form action="" enctype="multipart/form-data" method="POST">
            <input type="text" name="name" class="box" placeholder="Masukan Nama" required></br></br>
            <input type="username" name="username" class="box" placeholder="Masukan Username" required></br></br>
            <input type="password" name="password" class="box" placeholder="Masukan Password" required></br></br>
            <input type="password" name="cpass" class="box" placeholder="Konfirmasi Password" required></br></br>
            <input type="submit" value="DAFTAR" class="btn" name="submit" ></br></br>
            <p>Sudah punya akun? <a href="login.php">Login</a></p>
        </form>
    </div>
</div>

</body>
</html>