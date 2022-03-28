<!doctype html>
<html lang="en">
<head>
<meta charset="utf-8">
        <title>CROWNE HOTEL</title>
        <meta content="width=device-width, initial-scale=1.0" name="viewport">
        <meta content="" name="keywords">
        <meta content="" name="description">
        
        <link href="css/style1.css" rel="stylesheet">
      
      <style>
        body{
        background-image:url(img/bg.png);
        background-repeat: no-repeat;
        background-size: cover;
        background-position: center;
        background-attachment: fixed;
      }

      h1 {
        color: #000000;
        text-align: center;
        font-family: 'Vibur', cursive;
        font-size: 30px;
      }

      .form-control:focus, .form-control:focus + .fa {
        border-color: #000000;
        color: #000000;
      }
      .log-btn {
        background: #1E90FF;
      }
      </style>
          
        </head>
      
        <?php
      
          // menghubungkan dengan koneksi database
          include 'koneksi.php';
       
          // mengambil data tamu dengan kode paling besar
          $query = mysqli_query($koneksi, "SELECT max(kd_tamu) as kd_tamu FROM tbl_tamu");
          $data = mysqli_fetch_array($query);
          $kd_tamu = $data['kd_tamu'];
       
          // mengambil angka dari kode barang terbesar, menggunakan fungsi substr
          // dan diubah ke integer dengan (int)
          $urutan = (int) substr($kd_tamu, 3, 3);
       
          // bilangan yang diambil ini ditambah 1 untuk menentukan nomor urut berikutnya
          $urutan++;
       
          // membentuk kode barang baru
          // perintah sprintf("%03s", $urutan); berguna untuk membuat string menjadi 3 karakter
          // misalnya perintah sprintf("%03s", 15); maka akan menghasilkan '015'
          // angka yang diambil tadi digabungkan dengan kode huruf yang kita inginkan, misalnya BRG 
          $huruf = "TM";
          $kd_tamu = $huruf . sprintf("%03s", $urutan);
          ?>
      
        <body class="text-center">
        <?php 
      if(isset($_GET['pesan'])){
          if($_GET['pesan'] == "gagal"){
              echo "Data tidak tersimpan dan tidak terdaftar";
          }
      }
      ?>
      <main class="form-signin">
 <form method="post" action="aksi_daftar.php"> 
    <div class="login-form">
     <h1>Registration</h1>
   <table>
  <input type="hidden" name="kd_tamu" required="required" value="<?php echo $kd_tamu ?>" readonly>
</div>
<div class="form-group">
            <tr>
                <td width="120">Nama Lengkap</td>
                <td><input type="text" name="nama_tamu"></td>
            </tr>
            <tr>
                <td>Email</td>
                <td><input type="text" name="email"></td>
            </tr>
            <tr>
                <td>Alamat</td>
                <td><input type="text" name="alamat"></td>
            </tr>
        </div>
        <div class="form-group">
            <tr>
                <td>Provinsi</td>
                <td>
             <select name="provinsi">
    <option selected>Choose...</option>
    <option value="1">Jawa Barat</option>
    <option value="2">Jawa Timur</option>
    <option value="3">Jawa Tengah</option>
    <option value="4">Nanggore Aceh</option>
    <option value="5">Sumatera Utara</option>
    <option value="6">Sumatera Selatan</option>
    <option value="7">Sumatera Barat</option>
    <option value="8">Bengkulu</option>
    <option value="9">Riau</option>
    <option value="10">Kepulauan Riau</option>
    <option value="11">Jambi</option>
    <option value="12">Lampung</option>
    <option value="13">Bangka Belitung</option>
    <option value="14">Kalimantan Barat</option>
    <option value="15">Kalimantan Timur</option>
    <option value="16">Kalimantan Selatan</option>
    <option value="17">Kalimantan Tengah</option>
    <option value="18">Kalimantan Utara</option>
    <option value="19">Banten</option>
    <option value="20">DKI Jakarta</option>
    <option value="21">DI Yogyakarta</option>
    <option value="22">Bali</option>
    <option value="23">Nusa Tenggara Timur</option>
    <option value="24">Nusa Tenggara Barat</option>
    <option value="25">Gorontalo</option>
    <option value="26">Sulawesi Barat</option>
    <option value="27">Sulawesi Tengah</option>
    <option value="28">Sulawesi Utara</option>
    <option value="29">Sulawesi Tenggara</option>
    <option value="30">Sulawesi Selatan</option>
    <option value="31">Maluku Utara</option>
    <option value="32">Maluku</option>
    <option value="33">Papua Barat</option>
    <option value="34">Papua</option>
    </td>
    </tr>
</div>
<div class="form-group">
            <tr>
                <td>Kota</td>
                <td>
                <select name="kota">
                <option selected>Choose...</option>
    <option value="1">Bandung Barat</option>
    <option value="2">Jakarta</option>
    <option value="3">Bogor</option>
    <option value="4">Bekasi</option>
    <option value="5">Sukabumi</option>
    <option value="6">Cirebon</option>
    <option value="7">Depok</option>
    <option value="8">Tasikmalaya</option>
    <option value="9">Banjar</option>
    <option value="10">Serang</option>
    <option value="11">Tangerang</option>
    <option value="12">Bengkulu</option>
    <option value="13">Yogyakarta</option>
    <option value="14">Denpasar</option>
    <option value="15">Banda Aceh</option>
    <option value="16">sabang</option>
    <option value="17">Gorontalo</option>
    <option value="18">Pekalongan</option>
    <option value="19">Semarang</option>
    <option value="20">Blitar</option>
    <option value="21">Malang</option>
    <option value="22">Surabaya</option>
    <option value="23">Tegal</option>
    <option value="24">Pontianak</option>
    <option value="25">Madiun</option>
    <option value="26">Balikpapan</option>
    <option value="27">Banjarmasin</option>
    <option value="28">Samarinda</option>
    <option value="29">Bandar Lampung</option>
    <option value="30">Tanjung Pinang</option>
    <option value="31">Ternate</option>
    <option value="32">Makassar</option>
    <option value="33">Pekanbaru</option>
    <option value="34">Palu</option>
    <option value="35">Bandung</option>
    </td>
    </tr>
</div>
<div class="form-group">
            <tr>
                <td>Kecamatan</td>
                <td>
                <select name="kecamatan">
                <option selected>Choose...</option>
    <option value="1">Batujajar</option>
    <option value="2">Saguling</option>
    <option value="3">Padalarang</option>
    <option value="4">Gununghalu</option>
    <option value="5">Sindang Kerta</option>
    <option value="6">Cililin</option>
    <option value="7">Cisarua</option>
    <option value="8">Cihampelas</option>
    <option value="9">Rongga</option>
    <option value="10">Cikalongwetan</option>
    <option value="11">Parongpong</option>
    <option value="12">Cipatat</option>
    <option value="13">Ngamprah</option>
    <option value="14">Cipongkor</option>
    <option value="15">Lembang</option>
    <option value="16">Cipeundeuy</option>
    <option value="17">Cileunyi</option>
    <option value="18">Cimenyan</option>
    <option value="19">Margahayu</option>
    <option value="20">Bojongsoang</option>
    <option value="21">Katapang</option>
    <option value="22">Margaasih</option>
    <option value="23">Dayeuh Kolot</option>
    <option value="24">Cilengkrang</option>
    <option value="25">Andir</option>
    <option value="26">Antapani</option>
    <option value="27">Astana Anyar</option>
    <option value="28">Arcamanik</option>
    <option value="29">Babakan Ciparay</option>
    <option value="30">Gunung Kidul</option>
    <option value="31">Buah Batu</option>
    <option value="32">Cicendo</option>
    <option value="33">Kiaracondong</option>
    <option value="34">Lengkong</option>
    </td>
    </tr>
</div>
            <tr>
                <td>Nomor Telepon</td>
                <td><input type="text" name="no_telepon"></td>
            </tr>
            <tr>
                <td>Password</td>
                <td><input type="password" name="password"></td>
            </tr>
            <tr>
                <td></td>
                <td><button type="submit" class="log-btn">Daftar</button></td>
            </tr>
            <tr>
              <td></td>
              <td>
                 <a href="login.php">Sudah memiliki akun?Login disini!</a>
              </td>
            </tr>
        </table>
    </form>
</body>
</html>      