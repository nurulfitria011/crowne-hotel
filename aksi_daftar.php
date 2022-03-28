<?php

// menghubungkan dengan koneksi database
include 'koneksi.php';

// menangkap data yang dikirim dari form
$kd_tamu = $_POST['kd_tamu'];
$nama_tamu = $_POST['nama_tamu'];
$email = $_POST['email'];
$no_telepon = $_POST['no_telepon'];
$alamat = $_POST['alamat'];
$provinsi = $_POST['provinsi'];
$kota = $_POST['kota'];
$kecamatan = $_POST['kecamatan'];
$password = md5 ($_POST['password']);

// menyimpan data tamu ke database
$data_tamu = mysqli_query($koneksi,"INSERT INTO tbl_tamu VALUES ('$kd_tamu', '$nama_tamu', '$email', '$no_telepon', '$alamat', '$provinsi', '$kota', '$kecamatan', '$password')");

if($data_tamu){
	header("location:login.php");
}else{
	header("location:index.php?pesan=gagal");
}
?>