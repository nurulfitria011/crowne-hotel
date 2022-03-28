<?php 
include '../koneksi.php';
$id_kamar = mysqli_real_escape_string($koneksi,$_POST['id_kamar']);
$nama_kamar = mysqli_real_escape_string($koneksi,$_POST['nama_kamar']);
$fasilitas_kamar = mysqli_real_escape_string($koneksi,$_POST['fasilitas_kamar']);
$harga_kamar = mysqli_real_escape_string($koneksi,$_POST['harga_kamar']);
$jml_kamar = mysqli_real_escape_string($koneksi,$_POST['jml_kamar']);

$query = mysqli_query($koneksi,"UPDATE tbl_kamar SET nama_kamar='$nama_kamar', fasilitas_kamar='$fasilitas_kamar', harga_kamar='$harga_kamar',jml_kamar='$jml_kamar', where id_kamar='$id_kamar'");

   header('location:tabel_kamar.php');

?>