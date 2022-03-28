<?php 
include '../koneksi.php';
$nama_user = mysqli_real_escape_string($koneksi,$_POST['nama_user']);
$email = mysqli_real_escape_string($koneksi,$_POST['email']);
$alamat = mysqli_real_escape_string($koneksi,$_POST['alamat']);
$no_telp = mysqli_real_escape_string($koneksi,$_POST['no_telp']);
$username = mysqli_real_escape_string($koneksi,$_POST['username']);
$password = mysqli_real_escape_string($koneksi,md5($_POST['password']));
$submit = mysqli_real_escape_string($koneksi,$_POST['submit']);
$level= mysqli_real_escape_string($koneksi,$_POST['level']);

mysqli_query($koneksi,"INSERT into tb_identitas values('','$nama_user','$email','$alamat','$no_telp','$username','$password','$level')");
		header("location:tabel_user.php?pesan=input");

?>