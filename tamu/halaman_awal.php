<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="utf-8">
        <title>CROWNE HOTEL</title>
        <meta content="width=device-width, initial-scale=1.0" name="viewport">
        <meta content="" name="keywords">
        <meta content="" name="description">

        <!-- Google Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Montserrat:100,200,300,400,500,600,700,800,900" rel="stylesheet"> 

        <!-- Vendor CSS File -->
        <link href="../vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
        <link href="../vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet">
        <link href="../vendor/animate/animate.min.css" rel="stylesheet">
        <link href="../vendor/slick/slick.css" rel="stylesheet">
        <link href="../vendor/slick/slick-theme.css" rel="stylesheet">
        <link href="../vendor/tempusdominus/css/tempusdominus-bootstrap-4.min.css" rel="stylesheet" />

        <!-- Main Stylesheet File -->
        <link href="../css/hover-style.css" rel="stylesheet">
        <link href="../css/style.css" rel="stylesheet">
    </head>

    <body>
        <!-- Cek apakah sudah login -->
    <?php
    session_start();
    if($_SESSION['status']!="login"){
    header("location:index.php?pesan=belum login");
    }
    ?>
  <?php
  include "../koneksi.php";
$email = $_SESSION['email'];
$data = mysqli_query($koneksi,"select * from tbl_pesan JOIN tbl_tamu ON tbl_pesan.kd_tamu=tbl_tamu.kd_tamu JOIN tbl_kamar ON tbl_pesan.id_kamar=tbl_kamar.id_kamar where email='$email'"); $row = mysqli_fetch_array($data);
  ?>
  <main>
      <h1>Welcome <?php echo $_SESSION['email']; ?></h1>
        <!-- Header Section Start -->
        <header id="header">
            <a href="halaman_awal.php" class="logo"><img src="../img/logo_hotel.png" alt="logo"></a>
            <div class="mobile-menu-btn"><i class="fa fa-bars"></i></div>
            <nav class="main-menu top-menu">
                <ul>
                    <li class="active"><a href="../tamu/halaman_awal.php">Home</a></li>
                    <li><a href="../tamu/room.php">Rooms</a></li>
                    <li><a href="../tamu/halaman_booking.php">Booking</a></li>
                    <li><a href="../tamu/amenities.php">Amenities</a></li>
                    <li><a href="../tamu/about.php">About Us</a></li>
                    <li><a href="../tamu/contact.php">Contact Us</a></li>
                    <li><a href="../logout.php"><button type="button" class="btn btn-outline-light me-2">Logout</button></a></li>
                </ul>
            </nav>
        </header>
        <!-- Header Section End -->
        
        <!-- Header Slider Start -->
        <div id="headerSlider" class="carousel slide" data-ride="carousel">
            <ol class="carousel-indicators">
                <li data-target="#headerSlider" data-slide-to="0" class="active"></li>
                <li data-target="#headerSlider" data-slide-to="1"></li>
                <li data-target="#headerSlider" data-slide-to="2"></li>
            </ol>
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="../img/slider/header-slider-1.jpg" alt="Crowne Hotel">
                    <div class="carousel-caption">
                        <h1 class="animated fadeInRight">Crowne Hotel</h1>
                    </div>
                </div>
                
                <div class="carousel-item">
                    <img src="../img/slider/header-slider-2.jpg" alt="Crowne Hotel">
                    <div class="carousel-caption">
                        <h1 class="animated fadeInLeft">Life Is So Beautiful</h1>
                    </div>
                </div>

                <div class="carousel-item">
                    <img src="../img/slider/header-slider-3.jpg" alt="Crowne Hotel">
                    <div class="carousel-caption">
                        <h1 class="animated fadeInRight">Crowne Hotel</h1>
                    </div>
                </div>
            </div>
            <a class="carousel-control-prev" href="#headerSlider" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#headerSlider" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>
        <!-- Header Slider End -->
        
        <!-- Search Section Start -->
        <div id="search">
            <div class="container">
                <div class="form-row">
                    <div class="control-group col-md-3">
                        <label>Check-In</label>
                        <div class="form-group">
                            <div class="input-group date" id="date-3" data-target-input="nearest">
                                <input type="text" class="form-control datetimepicker-input" data-target="#date-3"/>
                                <div class="input-group-append" data-target="#date-3" data-toggle="datetimepicker">
                                    <div class="input-group-text"><i class="fa fa-calendar"></i></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="control-group col-md-3">
                        <label>Check-Out</label>
                        <div class="form-group">
                            <div class="input-group date" id="date-4" data-target-input="nearest">
                                <input type="text" class="form-control datetimepicker-input" data-target="#date-4"/>
                                <div class="input-group-append" data-target="#date-4" data-toggle="datetimepicker">
                                    <div class="input-group-text"><i class="fa fa-calendar"></i></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="control-group col-md-3">
                        <div class="form-row">
                            <div class="control-group col-md-6">
                                <label>Adult</label>
                                <select class="custom-select">
                                    <option selected>0</option>
                                    <option value="1">1</option>
                                    <option value="2">2</option>
                                    <option value="3">3</option>
                                    <option value="4">4</option>
                                    <option value="5">5</option>
                                    <option value="6">6</option>
                                    <option value="7">7</option>
                                    <option value="8">8</option>
                                    <option value="9">9</option>
                                    <option value="10">10</option>
                                </select>
                            </div>
                            <div class="control-group col-md-6 kid">
                                <label>Kid</label>
                                <select class="custom-select">
                                    <option selected>0</option>
                                    <option value="1">1</option>
                                    <option value="2">2</option>
                                    <option value="3">3</option>
                                    <option value="4">4</option>
                                    <option value="5">5</option>
                                    <option value="6">6</option>
                                    <option value="7">7</option>
                                    <option value="8">8</option>
                                    <option value="9">9</option>
                                    <option value="10">10</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="control-group col-md-3">
                    <a href="room.php"><button class="btn btn-block">Search</button></a>
                    </div>
                </div>
            </div>
        </div>
        <!-- Search Section End -->
        
        <!-- Welcome Section Start -->
        <div id="welcome">
            <div class="container">
                <h3>Welcome to Crowne Hotel</h3>
                <p>Crowne Hotel merupakan hotel yang terletak dipusat Kota Bandung, Kesempurnaan lokasi ini berpadu memberikan pengalaman liburan hingga meeting yang sempurna untuk wisatawan modern. Suite yang dirancang dengan anggun dan elegan menawarkan pemandangan Kota Bandung yang indah.</p>
                <a href="../tamu/room.php">Pesan Sekarang</a>
            </div>
        </div>
        <!-- Welcome Section End -->
        <!-- Footer Section Start -->
        <div id="footer">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="social">
                            <a href=""><li class="fa fa-instagram"></li></a>
                            <a href=""><li class="fa fa-twitter"></li></a>
                            <a href=""><li class="fa fa-facebook-f"></li></a>
                        </div>
                    </div>
     <footer class="ftco-footer ftco-bg-dark ftco-section">
      <div class="container">
        <div class="row mb-5">
          <div class="col-md">
            <div class="ftco-footer-widget mb-4">
              <h2 class="ftco-heading-2">Crowne Hotel</h2>
              <p>Crowne Hotel Bandung sangat cocok untuk tempat bulan madu, mencari ketentraman, bersantai dan menyegarkan atau menyeimbangkan kembali hidup dengan menginap di Crowne Hotel.</p>
              <ul class="ftco-footer-social list-unstyled float-md-left float-lft mt-5">
                <li class="ftco-animate"><a href="#"><span class="icon-twitter"></span></a></li>
                <li class="ftco-animate"><a href="#"><span class="icon-facebook"></span></a></li>
                <li class="ftco-animate"><a href="#"><span class="icon-instagram"></span></a></li>
              </ul>
            </div>
          </div>
          <div class="col-md">
            <div class="ftco-footer-widget mb-4 ml-md-5">
              <h2 class="ftco-heading-2">Navigation</h2>
              <ul class="list-unstyled">
                <li><a href="index.php" class="py-2 d-block">Home</a></li>
                <li><a href="room.php" class="py-2 d-block">Rooms</a></li>
                <li><a href="amenities.php" class="py-2 d-block">Amenities</a></li>
              </ul>
            </div>
          </div>
          <div class="col-md">
             <div class="ftco-footer-widget mb-4">
              <h2 class="ftco-heading-2">Privacy</h2>
              <ul class="list-unstyled">
                <li><a href="about.php" class="py-2 d-block">About Us</a></li>
                <li><a href="contact.php" class="py-2 d-block">Contact Us</a></li>
                <li><a href="amenities.php" class="py-2 d-block">Services</a></li>
              </ul>
            </div>
          </div>
          <div class="col-md">
            <div class="ftco-footer-widget mb-4">
                <h2 class="ftco-heading-2">Have a Questions?</h2>
                <div class="block-23 mb-3">
                  <ul>
                    <li><span class="icon icon-map-marker"></span><span class="text">Bandung Jabar, Ind</span></li>
                    <li><a href="#"><span class="icon icon-phone"></span><span class="text">+1 254 7569 2800</span></a></li>
                    <li><a href="#"><span class="icon icon-envelope"></span><span class="text">crownehotel@gmail.com</span></a></li>
                  </ul>
                </div>
            </div>
          </div>
        </div>
            <div class="col-12">
                <p>Copyright &#169; 2022</p>
            </div>
        </div>
    </footer>
        <!-- Footer Section End -->
        
        <a href="#" class="back-to-top"><i class="fa fa-chevron-up"></i></a>
        
        <!-- Vendor JavaScript File -->
        <script src="vendor/jquery/jquery.min.js"></script>
        <script src="vendor/jquery/jquery-migrate.min.js"></script>
        <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
        <script src="vendor/easing/easing.min.js"></script>
        <script src="vendor/stickyjs/sticky.js"></script>
        <script src="vendor/superfish/hoverIntent.js"></script>
        <script src="vendor/superfish/superfish.min.js"></script>
        <script src="vendor/wow/wow.min.js"></script>
        <script src="vendor/slick/slick.min.js"></script>
        <script src="vendor/tempusdominus/js/moment.min.js"></script>
        <script src="vendor/tempusdominus/js/moment-timezone.min.js"></script>
        <script src="vendor/tempusdominus/js/tempusdominus-bootstrap-4.min.js"></script>
        
        <!-- Booking Javascript File -->
        <script src="../js/booking.js"></script>
        <script src="../js/jqBootstrapValidation.min.js"></script>
  
        <!-- Main Javascript File -->
        <script src="../js/main.js"></script>
    </body>
</html>   