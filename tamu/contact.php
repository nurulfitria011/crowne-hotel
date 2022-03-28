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
        <link href="../vendor/slick/slick.css" rel="stylesheet">
        <link href="../vendor/slick/slick-theme.css" rel="stylesheet">
        <link href="../vendor/tempusdominus/css/tempusdominus-bootstrap-4.min.css" rel="stylesheet" />

        <!-- Main Stylesheet File -->
        <link href="../css/hover-style.css" rel="stylesheet">
        <link href="../css/style.css" rel="stylesheet">
    </head>

    <body>
        <!-- Header Section Start -->
        <header id="header">
            <a href="halaman_awal.php" class="logo"><img src="../img/logo_hotel.png" alt="logo"></a>
            <div class="mobile-menu-btn"><i class="fa fa-bars"></i></div>
            <nav class="main-menu top-menu">
                <ul>
                    <li><a href="../tamu/halaman_awal.php">Home</a></li>
                    <li><a href="../tamu/room.php">Rooms</a></li>
                    <li><a href="../tamu/halaman_booking.php">Booking</a></li>
                    <li><a href="../tamu/amenities.php">Amenities</a></li>
                    <li><a href="../tamu/about.php">About Us</a></li>
                    <li class="active"><a href="../tamu/contact.php">Contact Us</a></li>
                    <li><a href="../logout.php"><button type="button" class="btn btn-outline-light me-2">Logout</button></a></li>
                </ul>
            </nav>
        </header>
        <!-- Header Section End -->
        
        <!-- Contact Section Start -->
        <div id="contact">
            <div class="container">
                <div class="section-header">
                    <h2>Contact</h2>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <div class="row contact-info">
                            <div class="col-md-4">
                                <div class="info-item">
                                    <p><i class="fa fa-map-marker"></i>Jl. Lembong Bandung, Jawabarat, Indonesia</p>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="info-item">
                                    <p><i class="fa fa-envelope"></i> <a href="mailto:info@example.com">crownehotel@gmail.com</a></p>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="info-item">
                                    <p><i class="fa fa-phone"></i><a href="tel:+1 234 567 8900">+1 254 7569 2800</a></p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="contact-form">
                            <div id="success"></div>
                            <form name="sentMessage" id="contactForm" novalidate="novalidate">
                                <div class="form-row">
                                    <div class="control-group col-sm-6">
                                        <label>Your Name</label>
                                        <input type="text" class="form-control" id="name" placeholder="name" required="required" data-validation-required-message="Please enter your name" />
                                        <p class="help-block text-danger"></p>
                                    </div>
                                    <div class="control-group col-sm-6">
                                        <label>Email</label>
                                        <input type="email" class="form-control" id="email" placeholder="email@example.com" required="required" data-validation-required-message="Please enter your email" />
                                        <p class="help-block text-danger"></p>
                                    </div>
                                </div>
                                <div class="control-group">
                                    <label>Subject</label>
                                    <input type="text" class="form-control" id="subject" placeholder="Room Booking" required="required" data-validation-required-message="Please enter a subject" />
                                    <p class="help-block text-danger"></p>
                                </div>
                                <div class="control-group">
                                    <label>Message</label> 
                                    <textarea class="form-control" id="message" rows="5" placeholder="I need a premium room" required="required" data-validation-required-message="Please enter your message"></textarea>
                                    <p class="help-block text-danger"></p>
                                </div>
                                <div class="button"><button type="submit" id="sendMessageButton">Send Message</button></div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Contact Section End -->
        
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
            </div>
        </div>
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
        
        <!-- Contact Javascript File -->
        <script src="../js/jqBootstrapValidation.min.js"></script>
        <script src="../js/contact.js"></script>
        
        <!-- Main Javascript File -->
        <script src="../js/main.js"></script>
    </body>
</html>
