<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>CROWNE HOTEL</title>
	<!DOCTYPE html>
<html>
<head>
	<title>tabel user</title>
	<link rel="stylesheet" type="text/css" href="styleindex.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
  <link rel="stylesheet" type="text/css" href="css/fontawesome.min.css">
  <link rel="stylesheet" type="text/css" href="fontawesome/fontawesome.css">
  <svg xmlns="http://www.w3.org/2000/svg" style="display: none;">
  <symbol id="check-circle-fill" fill="currentColor" viewBox="0 0 16 16">
    <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zm-3.97-3.03a.75.75 0 0 0-1.08.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-.01-1.05z"/>
  </symbol>
  <symbol id="info-fill" fill="currentColor" viewBox="0 0 16 16">
    <path d="M8 16A8 8 0 1 0 8 0a8 8 0 0 0 0 16zm.93-9.412-1 4.705c-.07.34.029.533.304.533.194 0 .487-.07.686-.246l-.088.416c-.287.346-.92.598-1.465.598-.703 0-1.002-.422-.808-1.319l.738-3.468c.064-.293.006-.399-.287-.47l-.451-.081.082-.381 2.29-.287zM8 5.5a1 1 0 1 1 0-2 1 1 0 0 1 0 2z"/>
  </symbol>
  <symbol id="exclamation-triangle-fill" fill="currentColor" viewBox="0 0 16 16">
    <path d="M8.982 1.566a1.13 1.13 0 0 0-1.96 0L.165 13.233c-.457.778.091 1.767.98 1.767h13.713c.889 0 1.438-.99.98-1.767L8.982 1.566zM8 5c.535 0 .954.462.9.995l-.35 3.507a.552.552 0 0 1-1.1 0L7.1 5.995A.905.905 0 0 1 8 5zm.002 6a1 1 0 1 1 0 2 1 1 0 0 1 0-2z"/>
  </symbol>
</svg>

<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>

<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
   <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js"></script>
</head>
<body style="background: url(img/gambar2.jpg); background-size:cover">
	<?php
 if(isset($_GET['pesan'])){
	$pesan = $_GET['pesan'];
	if($pesan == "input"){
		echo"Data berhasil di input.";
	}else if($pesan == "update"){
		echo "Data berhasil di update.";
	}else if($pesan == "hapus"){
		echo "Data berhasil di hapus.";
	}
}
?>
        <h2 class="alert alert-light text-center bg-dark fixed-top ">Tabel pesanan</h2>
	<br/>
	<br/>
	<br/>
	<nav class="navbar navbar-light bg-light">

</nav>
<div style="padding-top: 10px;" class="container">
	
 <div class="container-fluid position-relative">
    <div class="position-absolute top-0 end-0">
    <form class="d-flex">
      <input class="form-control me-2" type="text" placeholder="Search" aria-label="Search">
      <button class="btn btn-outline-success" type="submit">Search</button>
      </div>

 

 <?php 


  ?>
    </form>
  </div>
  </div>
  <br>
<br>
<br>
<div class="container">
		<div class="cointainer bg-light">
	<table class="table table-hover" border="1">
		<tr>
	  <th>id_pesan</th>
      <th>nama_tamu</th>
      <th>nama tipe kamar</th>
      <th>check in</th>
      <th>check out</th>
      <th>Jumlah kamar</th>
      <th>jumlah orang</th>
      <th>jumlah hari</th>
      <th>total bayar</th>
	  <th>status</th>
	  <th>aksi</th>

		</tr>
		<?php 
		include '../koneksi.php';
		session_start ();
		$data = mysqli_query($koneksi,"select * from tbl_pesan");
		while($d = mysqli_fetch_array($data)){
			?>
			<tr>
				<td><?php echo $d['id_pesan']; ?></td>
                <td><?php echo $d['kd_tamu']; ?></td>
                <td><?php echo $d['id_kamar']; ?></td>
                <td><?php echo $d['tgl_check_in']; ?></td>
                <td><?php echo $d['tgl_check_out']; ?></td>      
                <td><?php echo $d['jml_kamar_dipesan']; ?></td>
                <td><?php echo $d['jml_orang']; ?></td>
                <td><?php echo $d['jml_hari']; ?></td>
                <td><?php echo $d['total_bayar']; ?></td>
				<td><?php echo $d['status_reservasi']; ?></td>


				<td>
					<form method="POST" action="validasi.php">
						<input name="id_pesan" value="<?= $d['id_pesan'] ?>" hidden>
						<button style="width:80px" class="btn btn-success btn-sm" type="submit">Check_in</button>
					</form>
					<form method="POST" action=check_out.php>
						<input name="id_pesan" value="<?= $d['id_pesan'] ?>" hidden>
						<button style="width:80px" class="btn btn-danger btn-sm"  type="submit">Check_out</button>
					</form>
				</td>
			</tr>
			<?php 
		}
		?>
	</table>
</div>
</div>
	         <td><a href="admn1/index.php"><button>kembali</button></a></td>

</body>
</html>

