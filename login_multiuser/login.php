<?php

@include 'config.php';

$admin_session_name = "admin_session";
$staff_session_name = "staff_session";
$user_session_name = "user_session";

if(isset($_POST['submit'])){

   $username = $_POST['username'];
   $username = filter_var($username);
   $password = md5($_POST['password']);
   $password = filter_var($password);

   $sql_admin = "SELECT * FROM `admin` WHERE username = ? AND password = ?";
   $sql_staff = "SELECT * FROM `staff` WHERE username = ? AND password = ?";
   $sql_user = "SELECT * FROM `users` WHERE username = ? AND password = ?";

   // check if the user is an admin
$stmt = $conn->prepare($sql_admin);
$stmt->execute([$username, $password]);
$row = $stmt->fetch(PDO::FETCH_ASSOC);
if ($row) {
    // set session variables and redirect to admin page
    session_name($admin_session_name);
    session_start();
    // set a cookie to restrict access to the admin page
if ($_SESSION['user_type'] === 'admin') {
  setcookie('admin_access', 'allowed', time() + (86400 * 30), '/'); // set cookie for 30 days
}
    $_SESSION['admin_id'] = $row['id'];
    $_SESSION['user_type'] = 'admin';
    header("Location: admin.php");
    exit();
}

// check if the user is a staff member
$stmt = $conn->prepare($sql_staff);
$stmt->execute([$username, $password]);
$row = $stmt->fetch(PDO::FETCH_ASSOC);
if ($row) {
    // set session variables and redirect to staff page
if ($_SESSION['user_type'] === 'staff') {
      setcookie('staff_access', 'allowed', time() + (86400 * 30), '/'); // set cookie for 30 days
}
    session_name($staff_session_name);
    session_start();
    $_SESSION['staff_id'] = $row['id'];
    $_SESSION['user_type'] = 'staff';
    header("Location: staff.php");
    exit();
}

// check if the user is a regular user
$stmt = $conn->prepare($sql_user);
$stmt->execute([$username, $password]);
$row = $stmt->fetch(PDO::FETCH_ASSOC);
if ($row) {
    // set session variables and redirect to user page
    session_name($user_session_name);
    session_start();
    $_SESSION['user_id'] = $row['id'];
    $_SESSION['user_type'] = 'user';
    header("Location: users.php");
    exit();
} else {
  // alert if username or password is incorrect
  echo '<script>alert("Invalid username or password. Please try again.")</script>';
}
  




}

?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>login</title>

   <!-- font awesome cdn link  -->
   <link rel="stylesheet" type="text/css" href="style.css">
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
	<style>
		body {
			background-color: #f7f7f7;
		}
		.login-form {
			margin-top: 50px;
			padding: 25px;
			background-color: #fff;
			box-shadow: 0px 0px 5px 0px rgba(0,0,0,0.3);
			border-radius: 5px;
		}
	</style>

</head>
<body>

<div class="container d-flex justify-content-center align-items-center"
      style="min-height: 100vh">
      	<form class="border shadow p-3 rounded"
      	      method="post" 
      	      style="width: 450px;">
      	      <h1 class="text-center p-3">LOGIN</h1>


   
<section class="form-container">

   <form action="" method="POST">
      <h3>Login now</h3></br>
      <input type="username" name="username" class="box" placeholder="enter your username" required></br></br>
      <input type="password" name="password" class="box" placeholder="enter your password" required></br></br>
      <input type="submit" value="login now" class="btn" name="submit"></br></br>
      <p>don't have an account? <a href="register.php">register now</a></p>
   </form>

</section>


</body>
</html>