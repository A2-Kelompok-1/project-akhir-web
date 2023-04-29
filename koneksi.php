<?php

// fungsi untuk menghubungkan
$conn = mysqli_connect("localhost", "root", "","pa");

if( !$conn){
    die("Gagal Terhubung" . mysqli_connect_error());
}

?>