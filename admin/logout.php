<?php
// Hapus cookie admin access
setcookie('admin_access', '', time() - 3600, '/');

// Redirect ke halaman login
header("Location: login.php");
exit();
?>
