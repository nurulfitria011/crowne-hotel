<?php
$koneksi=mysqli_connect("localhost","root","","db_hotell");

// Check connection
if (mysqli_connect_errno()){
	echo "Koensi database gagal : " . mysqli_connect_error();
}

?>