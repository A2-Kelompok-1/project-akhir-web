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
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">

	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
	<style>
		body {
			background-color: #f7f7f7;
		}
		.form-signin {
			max-width: 330px;
			padding: 15px;
			margin: 0 auto;
			box-shadow: 0px 0px 5px 0px rgba(0,0,0,0.3);
			background-color: #fff;
			border-radius: 5px;
		}
		.form-signin input[type="text"], .form-signin input[type="username"], .form-signin input[type="password"] {
			margin-bottom: 10px;
		}
	</style>

</head>
<body>

<div class="container d-flex justify-content-center align-items-center"
      style="min-height: 100vh">
      	<form class="border shadow p-3 rounded"
      	      method="post" 
      	      style="width: 450px;">
      	      <h1 class="text-center p-3">REGISTER</h1>



   
<section class="form-container">

   <form action="" enctype="multipart/form-data" method="POST">
      <h3>register now</h3>
      <input type="text" name="name" class="box" placeholder="enter your name" required></br></br>
      <input type="username" name="username" class="box" placeholder="enter your username" required></br></br>
      <input type="password" name="password" class="box" placeholder="enter your password" required></br></br>
      <input type="password" name="cpass" class="box" placeholder="confirm your password" required></br></br>
      <input type="submit" value="register now" class="btn" name="submit" ></br></br>
      <p>already have an account? <a href="login.php">login now</a></p>
   </form>

</section>


</body>
</html>