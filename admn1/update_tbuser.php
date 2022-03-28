<?php 
include '../koneksi.php';
$id_user = mysqli_real_escape_string($koneksi,$_POST['id_user']);
$nama_user = mysqli_real_escape_string($koneksi,$_POST['nama_user']);
$email = mysqli_real_escape_string($koneksi,$_POST['email']);
$alamat = mysqli_real_escape_string($koneksi,$_POST['alamat']);
$no_telp = mysqli_real_escape_string($koneksi,$_POST['no_telp']);
$username = mysqli_real_escape_string($koneksi,$_POST['username']);
$password = mysqli_real_escape_string($koneksi,md5($_POST['password']));
$level = mysqli_real_escape_string($koneksi,$_POST['level']);

$query = mysqli_query($koneksi,"UPDATE tb_user SET nama_user='$nama_user',email='$email',alamat='$alamat',no_telp='$no_telp',username='$username',password='$password',level='$level' where id_user='$id_user'");


   header('location:tabel_user.php');

?>