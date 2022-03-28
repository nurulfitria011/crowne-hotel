<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <title>CROWNE HOTEL</title>
        <meta content="width=device-width, initial-scale=1.0" name="viewport">
        <meta content="" name="keywords">
        <meta content="" name="description">
        <link rel="stylesheet" type="text/css" href="stylelogin.css">

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

  <body class="text-center">
    <!-- <?php
if(isset($_GET['pesan'])){
  echo "Login gagal username dan password salah!";
}else if($_GET['pesan'] == "logout"){
  echo "Anda telah berhasil logout";
}else if($_GET['pesan'] == "belum_login"){
  echo "Anda harus login untuk mengakses halaman admin";
}

?> -->
<main class="form-signin">
  <form method="post" action="aksi_login.php">
  <div class="login-form">
    <h1 class="h3 mb-3 fw-normal">Form Login</h1>

    <div class="form-floating">
    <label for="floatingInput">Email address</label>
      <input type="email" class="form-control" id="floatingInput" name="email" placeholder="name@example.com">
    </div>
    <div class="form-floating">
    <label for="floatingPassword">Password</label>
      <input type="password" class="form-control" id="floatingPassword" name="password" placeholder="Password">
    </div>
        <button type="submit" class="log-btn">Login</button>
        <div class="checkbox mb-3">
    <a href="daftar.php">Belum punya akun?Daftar disini!</a>
    </div>
</div>
  </form>
</main>
  </body>
</html>
