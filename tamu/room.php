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
        <link rel="../stylesheet" href="style.css" media="screen">
        <link href="../css/style.css" rel="stylesheet">
    </head>
    <style>
        .gambar img {
    display:flex;
    width:1400px;
    height: 500px;
    margin: auto;
    display: table;
    margin-left: 5px;
    padding-left: 15px;
}
table, ul.art-hmenu {
   font-size: 13px;
   font-family: Arial, 'Arial Unicode MS', Helvetica, Sans-Serif;
   font-weight: normal;
   font-style: normal;
}

h1, h2, h3, h4, h5, h6, p, a, ul, ol, li
{
   margin: 0;
   padding: 0;
   padding-top: 10px;
}

/* Reset buttons border. It's important for input and button tags. 
 * border-collapse should be separate for shadow in IE. 
 */
.art-button
{
   border: 0;
   border-collapse: separate;
   -webkit-background-origin: border !important;
   -moz-background-origin: border !important;
   background-origin: border-box !important;
   background: #FFA145;
   padding:0 35px;
   margin:0 auto;
   height:33px;
}

.art-postcontent,
.art-postheadericons,
.art-postfootericons,
.art-blockcontent,
ul.art-vmenu a 
{
   text-align: left;
}

.art-postcontent a, .art-postcontent a:link
{
   font-family: Arial, 'Arial Unicode MS', Helvetica, Sans-Serif;
   text-decoration: none;
   color: #4C7FB3;
}

.art-postcontent a:visited, .art-postcontent a.visited
{
   font-family: Arial, 'Arial Unicode MS', Helvetica, Sans-Serif;
   text-decoration: none;
   color: #4C7FB3;
}

.art-postcontent  a:hover, .art-postcontent a.hover
{
   font-family: Arial, 'Arial Unicode MS', Helvetica, Sans-Serif;
   text-decoration: underline;
   color: #F59F0A;
}

.art-postcontent h1
{
   color: #0078D8;
   margin:0;
   font-size: 28px;
   font-family: 'Arial Narrow', Arial, 'Arial Unicode MS', Helvetica, Sans-Serif;
   font-weight: normal;
   font-style: normal;
}

.art-blockcontent h1
{
   margin:0;
   font-size: 28px;
   font-family: 'Arial Narrow', Arial, 'Arial Unicode MS', Helvetica, Sans-Serif;
   font-weight: normal;
   font-style: normal;
}

.art-postcontent h1 a, .art-postcontent h1 a:link, .art-postcontent h1 a:hover, .art-postcontent h1 a:visited, .art-blockcontent h1 a, .art-blockcontent h1 a:link, .art-blockcontent h1 a:hover, .art-blockcontent h1 a:visited 
{
   font-size: 28px;
   font-family: 'Arial Narrow', Arial, 'Arial Unicode MS', Helvetica, Sans-Serif;
   font-weight: normal;
   font-style: normal;
}

.art-postcontent h2
{
   color: #9C9C9C;
   margin-top: 19px;
   margin-bottom: 19px;
   font-size: 24px;
   font-family: 'Arial Narrow', Arial, 'Arial Unicode MS', Helvetica, Sans-Serif;
}

.art-blockcontent h2
{
   margin-top: 19px;
   margin-bottom: 19px;
   font-size: 24px;
   font-family: 'Arial Narrow', Arial, 'Arial Unicode MS', Helvetica, Sans-Serif;
}

.art-postcontent h2 a, .art-postcontent h2 a:link, .art-postcontent h2 a:hover, .art-postcontent h2 a:visited, .art-blockcontent h2 a, .art-blockcontent h2 a:link, .art-blockcontent h2 a:hover, .art-blockcontent h2 a:visited 
{
   font-size: 24px;
   font-family: 'Arial Narrow', Arial, 'Arial Unicode MS', Helvetica, Sans-Serif;
}

.art-postcontent h3
{
   color: #F9C976;
   margin: 20px 0 10px;
   font-size: 20px;
   font-family: 'Arial Narrow', Arial, 'Arial Unicode MS', Helvetica, Sans-Serif;
}

.art-blockcontent h3
{
   margin: 20px 0 10px;
   font-size: 20px;
   font-family: 'Arial Narrow', Arial, 'Arial Unicode MS', Helvetica, Sans-Serif;
}

.art-postcontent h3 a, .art-postcontent h3 a:link, .art-postcontent h3 a:hover, .art-postcontent h3 a:visited, .art-blockcontent h3 a, .art-blockcontent h3 a:link, .art-blockcontent h3 a:hover, .art-blockcontent h3 a:visited 
{
   font-size: 20px;
   font-family: 'Arial Narrow', Arial, 'Arial Unicode MS', Helvetica, Sans-Serif;
}

.art-postcontent h4
{
   color: #0078D8;
   margin:0;
   font-size: 26px;
   font-family: 'Arial Narrow', Arial, 'Arial Unicode MS', Helvetica, Sans-Serif;
   font-weight: normal;
   font-style: normal;
}

.art-blockcontent h4
{
   margin:0;
   font-size: 26px;
   font-family: 'Arial Narrow', Arial, 'Arial Unicode MS', Helvetica, Sans-Serif;
   font-weight: normal;
   font-style: normal;
}

.art-postcontent h4 a, .art-postcontent h4 a:link, .art-postcontent h4 a:hover, .art-postcontent h4 a:visited, .art-blockcontent h4 a, .art-blockcontent h4 a:link, .art-blockcontent h4 a:hover, .art-blockcontent h4 a:visited 
{
   font-size: 26px;
   font-family: 'Arial Narrow', Arial, 'Arial Unicode MS', Helvetica, Sans-Serif;
   font-weight: normal;
   font-style: normal;
}

.art-postcontent h5
{
   color: #696969;
   font-size: 22px;
   font-family: 'Arial Narrow', Arial, 'Arial Unicode MS', Helvetica, Sans-Serif;
   font-weight: normal;
   font-style: normal;
   text-transform: uppercase;
}

.art-blockcontent h5
{
   font-size: 22px;
   font-family: 'Arial Narrow', Arial, 'Arial Unicode MS', Helvetica, Sans-Serif;
   font-weight: normal;
   font-style: normal;
   text-transform: uppercase;
}

.art-postcontent h5 a, .art-postcontent h5 a:link, .art-postcontent h5 a:hover, .art-postcontent h5 a:visited, .art-blockcontent h5 a, .art-blockcontent h5 a:link, .art-blockcontent h5 a:hover, .art-blockcontent h5 a:visited 
{
   font-size: 22px;
   font-family: 'Arial Narrow', Arial, 'Arial Unicode MS', Helvetica, Sans-Serif;
   font-weight: normal;
   font-style: normal;
   text-transform: uppercase;
}

.art-postcontent h6
{
   color: #B8B8B8;
   margin: -5px 0 -10px;
   font-size: 28px;
   font-family: 'Arial Narrow', Arial, 'Arial Unicode MS', Helvetica, Sans-Serif;
   font-weight: bold;
   font-style: normal;
}

.art-blockcontent h6
{
   margin: -5px 0 -10px;
   font-size: 28px;
   font-family: 'Arial Narrow', Arial, 'Arial Unicode MS', Helvetica, Sans-Serif;
   font-weight: bold;
   font-style: normal;
}

.art-postcontent h6 a, .art-postcontent h6 a:link, .art-postcontent h6 a:hover, .art-postcontent h6 a:visited, .art-blockcontent h6 a, .art-blockcontent h6 a:link, .art-blockcontent h6 a:hover, .art-blockcontent h6 a:visited 
{
   font-size: 28px;
   font-family: 'Arial Narrow', Arial, 'Arial Unicode MS', Helvetica, Sans-Serif;
   font-weight: bold;
   font-style: normal;
}

header, footer, article, nav, #art-hmenu-bg, .art-sheet, .art-hmenu a, .art-vmenu a, .art-slidenavigator > a, .art-checkbox:before, .art-radiobutton:before
{
   -webkit-background-origin: border !important;
   -moz-background-origin: border !important;
   background-origin: border-box !important;
}

header, footer, article, nav, #art-hmenu-bg, .art-sheet, .art-slidenavigator > a, .art-checkbox:before, .art-radiobutton:before
{
   display: block;
   -webkit-box-sizing: border-box;
   -moz-box-sizing: border-box;
   box-sizing: border-box;
}



.art-sheet
{
   background: #FFFFFF;
   background: transparent;
   -webkit-border-radius:5px;
   -moz-border-radius:5px;
   border-radius:5px;
   margin:0 auto;
   position:relative;
   cursor:auto;
   width: 1000px;
   z-index: auto !important;
}

.art-layout-wrapper
{
   position: relative;
   margin: 0 auto 0 auto;
   z-index: auto !important;
   border: 1px solid #C5C5C5;
}

.art-content-layout
{
   display: table;
   width: 100%;
   table-layout: fixed;
   border-collapse: collapse;
}

.art-content-layout-row 
{
   display: table-row;
}

.art-layout-cell
{
   display: table-cell;
   vertical-align: top;
}

.art-breadcrumbs
{
   margin:0 auto;
}

a.art-button,
a.art-button:link,
a:link.art-button:link,
body a.art-button:link,
a.art-button:visited,
body a.art-button:visited,
input.art-button,
button.art-button
{
   text-decoration: none;
   font-size: 14px;
   font-family: 'Arial Narrow', Arial, 'Arial Unicode MS', Helvetica, Sans-Serif;
   font-weight: bold;
   font-style: normal;
   position:relative;
   display: inline-block;
   vertical-align: middle;
   white-space: nowrap;
   text-align: center;
   color: #FFFFFF;
   margin: 0 !important;
   overflow: visible;
   cursor: pointer;
   text-indent: 0;
   line-height: 33px;
   -webkit-box-sizing: content-box;
   -moz-box-sizing: content-box;
   box-sizing: content-box;
}

.art-button img
{
   margin: 0;
   vertical-align: middle;
}

</style>

    <body>
        <!-- Header Section Start -->
        <header id="header">
            <a href="halaman_awal.php" class="logo"><img src="../img/logo_hotel.png" alt="logo"></a>
            <div class="mobile-menu-btn"><i class="fa fa-bars"></i></div>
            <nav class="main-menu top-menu">
                <ul>
                    <li><a href="../tamu/halaman_awal.php">Home</a></li>
                    <li class="active"><a href="../tamu/room.php">Rooms</a></li>
                    <li><a href="../tamu/halaman_booking.php">Booking</a></li>
                    <li><a href="../tamu/amenities.php">Amenities</a></li>
                    <li><a href="../tamu/about.php">About Us</a></li>
                    <li><a href="../tamu/contact.php">Contact Us</a></li>
                    <li><a href="../logout.php"><button type="button" class="btn btn-outline-light me-2">Logout</button></a></li>
                </ul>
            </nav>
        </header>
        <!-- Header Section End -->

        <div class="gambar">
            <img src="../img/room/bgroom.jpg"
                  align="right" width="100%" height="50px">
        </div>
</div>
<div class="art-layout-wrapper clearfix">
        <div class="art-content-layout">
            <div class="art-content-layout-row">
				<div class="art-layout-cell art-content clearfix"><article class="art-post art-article">								
					<div class="art-postcontent art-postcontent-0 clearfix">
							<div class="art-content-layout-wrapper layout-item-0">
							<div class="art-content-layout">
								<div class="art-content-layout-row">
									<div class="art-layout-cell layout-item-2" style="width: 33%" >
                                        <p><img width="207" height="153" alt="" src="../img/room/room-1.jpg"></p>
										<h4>Standard Room</h4>
                                        <p>Rp.500.000</p>
                                        <ul class="room-size">
                                            <li><i class="fa fa-arrow-right"></i>Size: 260 sq ft </li>
                                            <li><i class="fa fa-arrow-right"></i>Beds: 2 Single(s) </li>
                                        </ul>
										<p>Standard Room memiliki fasilitas shield, televisi, wifi, telepon, meja, dapur, Ac, bath tub, kamar mandi.</p>
										<p><a href="../tamu/standardroom.php" class="art-button">view</a></p>
									</div>
									<div class="art-layout-cell layout-item-2" style="width: 34%" >
										<p><img width="207" height="153" alt="" src="../img/room/room-2.jpg"></p>
                                        <h4>Standard Twin Room</h4>
                                        <p>Rp.650.000</p>
                                        <ul class="room-size">
                                        <li><i class="fa fa-arrow-right"></i>Size: 200 sq ft </li>
                                        <li><i class="fa fa-arrow-right"></i>Beds: 2 Double(s) </li>
                                    </ul>
										<p>Standard Twin Room memiliki fasilitas shield, Ac, Shower, handuk, televisi, wifi, telepon, meja, dapur dan kamar mandi.</p>
										<p><a href="../tamu/standardtwinroom.php" class="art-button">view</a></p>
									</div>
									<div class="art-layout-cell layout-item-2" style="width: 33%" >
										<p><img width="207" height="153" alt="" src="../img/room/room-3.jpg"></p>
                                        <h4>Superior Room</h4>
                                        <p>Rp.750.000</p>
                                        <ul class="room-size">
                                        <li><i class="fa fa-arrow-right"></i>Size: 200 sq ft </li>
                                        <li><i class="fa fa-arrow-right"></i>Beds: 2 Double(s) </li>
                                    </ul>
										<p>Superior Room memiliki fasilitas shield, Ac, bath tub, shower, televisi, wifi, telepon, meja, minibar, dapur dan kamar mandi.</p>
										<p><a href="../tamu/superiorroom.php" class="art-button">view</a></p>
									</div> 
                                    </div>
                                    </div>
                                    <div class="art-layout-cell layout-item-2" style="width: 34%" >
										<p><img width="207" height="153" alt="" src="../img/room/room-4.jpg"></p>
                                        <h4>Deluxe Room</h4>
                                        <p>Rp.850.000</p>
                                        <ul class="room-size">
                                        <li><i class="fa fa-arrow-right"></i>Size: 200 sq ft </li>
                                        <li><i class="fa fa-arrow-right"></i>Beds: 2 single(s) </li>
                                    </ul>
										<p>Deluxe Room memiliki fasilitas shield, Ac, bath tub, shower, handuk, televisi, wifi, telepon, meja, dapur dan kamar mandi.</p>
										<p><a href="../tamu/deluxeroom.php" class="art-button">view</a></p>
                                    </div>
									<div class="art-layout-cell layout-item-2" style="width: 33%" >
										<p><img width="207" height="153" alt="" src="../img/room/room-5.jpg"></p>
                                        <h4>Junior Suite Room</h4>
                                        <p>Rp.1.000.000</p>
                                        <ul class="room-size">
                                        <li><i class="fa fa-arrow-right"></i>Size: 450 sq ft </li>
                                        <li><i class="fa fa-arrow-right"></i>Beds: 2 Double(s) </li>
                                    </ul>
										<p>Junior Suite Room memiliki fasilitas shield, Ac,bath tub, shower, televisi, wifi, telepon, meja, dapur dan kamar mandi.</p>
										<p><a href="../tamu/juniorsuiteroom.php" class="art-button">view</a></p>
									</div>
                                    <div class="art-layout-cell layout-item-2" style="width: 33%" >
										<p><img width="207" height="153" alt="" src="../img/room/room-6.jpg"></p>
                                        <h4>Family Suite Room</h4>
                                        <p>Rp.1.500.000</p>
                                        <ul class="room-size">
                                        <li><i class="fa fa-arrow-right"></i>Size: 450 sq ft </li>
                                        <li><i class="fa fa-arrow-right"></i>Beds: 2 Double(s) </li>
                                    </ul>
										<p>Family Suite Room memiliki fasilitas shield, Ac, bath tub, shower, televisi, wifi, telepon, meja, dapur dan kamar mandi.</p>
										<p><a href="../tamu/familysuiteroom.php" class="art-button">view</a></p>
									</div>
								</div>
							</div>
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
        
        <!-- Booking Javascript File -->
        <script src="../js/booking.js"></script>
        <script src="../js/jqBootstrapValidation.min.js"></script>
  
        <!-- Main Javascript File -->
        <script src="../js/main.js"></script>
    </body>
</html>
