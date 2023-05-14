<?php

//memulai sesi
session_start();

//mengakhiri sesi (menghapus sesi)
session_destroy();

// Redirect ke halaman login
header('Location: ../login.php');
exit();


?>