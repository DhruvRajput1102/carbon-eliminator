<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>Carbon Eliminator</title>
    <meta content="" name="description">
    <meta content="" name="keywords">

    <!-- Favicons -->
    <link href="assets/img/f1.jpeg" rel="icon">
    <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

    <!-- Vendor CSS Files -->
    <script src="https://code.jquery.com/jquery-3.6.1.min.js" integrity="sha256-o88AwQnZB+VDvE9tvIXrMQaPlFFSUTR+nldQm1LuPXQ=" crossorigin="anonymous"></script>
    <link href="assets/vendor/aos/aos.css" rel="stylesheet">
    <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
    <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
    <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
    <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">
    <!-- Template Main CSS File -->
    <link href="assets/css/style.css?version=1" rel="stylesheet">

    <!-- =======================================================
  * Template Name: Day - v4.9.1
  * Template URL: https://bootstrapmade.com/day-multipurpose-html-template-for-free/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
  <style>
    
#chart-container {
    position: relative;
    height: 100vh;
    overflow: hidden;
}

  </style>
</head>

<body>

    <!-- ======= Top Bar ======= -->
    <section id="topbar" class="d-flex align-items-center">
        <div class="container d-flex justify-content-center justify-content-md-between">
            <div class="contact-info d-flex align-items-center">
                <i class="bi bi-envelope-fill"></i><a href="mailto:contact@example.com">Seneca College</a>
                <i class="bi bi-phone-fill phone-icon"></i> +1 5589 55488 55
            </div>
            <div class="social-links d-none d-md-block">
                <a href="#" class="twitter"><i class="bi bi-twitter"></i></a>
                <a href="#" class="facebook"><i class="bi bi-facebook"></i></a>
                <a href="#" class="instagram"><i class="bi bi-instagram"></i></a>
                <a href="#" class="linkedin"><i class="bi bi-linkedin"></i></i></a>
            </div>
        </div>
    </section>

    <!-- ======= Header ======= -->
    <header id="header" class="d-flex align-items-center">
        <div class="container d-flex align-items-center justify-content-between">

            <h1 class="logo"><a href="index.php">Carbon Eliminator</a></h1>
            <!-- Uncomment below if you prefer to use an image logo -->
            <!-- <a href="index.html" class="logo"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->

            <nav id="navbar" class="navbar">
                <ul>
                    <li><a class="nav-link scrollto active" href="#hero">Home</a></li>
                    <li><a class="nav-link scrollto" href="#about">Footprint Calculator</a></li>
                    <!-- <li><a class="nav-link scrollto" href="#why-us">Result</a></li> -->
                    <li><a class="nav-link scrollto" href="#team">Recommendation</a></li>
                    <li><a class="nav-link scrollto" href="login/index.php">Admin Login</a></li>
                <i class="bi bi-list mobile-nav-toggle"></i>
            </nav>
            <!-- .navbar -->

        </div>
    </header>
    <!-- End Header -->

    <!-- ======= Hero Section ======= -->
    <section id="hero" class="d-flex align-items-center">
        <div class="container position-relative" data-aos="fade-up" data-aos-delay="500">
            <h1>Welcome to Carbon Eliminator</h1>
            <h2>Net Zero -Grand Prix F1 Canada</h2>
            <a href="#about" class="btn-get-started scrollto">Get Started</a>
        </div>
        
    </section>
    <!-- End Hero -->

    <main id="main">

        <!-- ======= About Section ======= -->
        <section id="about" class="about">
        <div class="container">

        <section class="section" >
        <div class="section-title">
                    <span>Calulate Your Carbon Footprint</span>
                    <h2>Footprint Calculator</h2>
                    <p>Get Your Carbon Footprint</p>
                </div>
      <div class="row">
        <div class="col-lg-6" >

          <div class="card" >
            <div class="card-body" >
              <h5 class="card-title">Carbon Footprint Calculator</h5>

              <!-- General Form Elements -->
              <form action="#services" method="post">
                <div class="row mb-3">
                  <div class="col-sm-12">
                    <input type="int" id="ticket" name="ticket" class="form-control" placeholder="Enter Ticket Number">
                  </div>
                </div>
                <div class="row mb-3">
                  <div class="col-sm-12">
                    <input type="date" id="date" name="date" class="form-control" placeholder="Enter Ticket Number">
                  </div>
                </div>
                <div class="row mb-3">
                  <div class="col-sm-12">
                    <select name="mot" id="mode-of-travel" class="form-select" aria-label="Default select example">
                      <option selected disabled>Select Mode of Travel</option>
                      <option value="flight" data-value="1">Flight</option>
                          <option value="carTravel" data-value="2">CarTravel</option>
                          <option value="motorBike" data-value="3">Motor Bike</option>
                          <option value="publicTransit" data-value="4">Public Transit</option>
                    </select>
                  </div>
                </div>
                <div class="row mb-3">
                  <div class="col-sm-12">
                    <select name="voc" id="choose-vehicle" class="form-select" aria-label="Default select example">


                    </select>
                  </div>
                </div>
                <div class="row mb-3">
                  <div class="col-sm-12">
                    <input type="int" id="distance" name="distance" class="form-control" placeholder="Enter Distance in KM">
                  </div>
                </div>
                
                <div class="row mb-6">
                  <div class="col-sm-12">
                    <button type="submit" name="submit" value="submit" class="btn btn-primary" class="nav-link scrollto" href="#services">Submit</button>
                  </div>
                </div>

              </form><!-- End General Form Elements -->

            </div>
          </div>

        </div>
        <div class="col-lg-6 order-1 order-lg-2" data-aos="fade-left">
                        <img src="assets/img/racing.jpg" class="img-fluid" alt="">
                    </div>
</div>



        </section>
        <!-- End About Section -->
        
        <!-- ======= Why Us Section ======= -->
        <?php
        include 'get_data.php';
        include 'api_response.php';
        $o_fp='';
        $con=mysqli_connect("localhost","root","","carbon_eliminator");
        $overall_fp="SELECT SUM(c_footprint) AS 'sum' FROM cal";
        $avg_fp="SELECT AVG(c_footprint) AS 'avg' FROM cal";
        $total_distance="SELECT SUM(c_distance) AS 'dsum' FROM cal";
        $flight_pie_sql="SELECT SUM(c_footprint) AS 'sum' FROM cal WHERE c_mot= 'flight'";
        $car_pie_sql="SELECT SUM(c_footprint) AS 'sum' FROM cal WHERE c_mot= 'carTravel'";
        $bike_pie_sql="SELECT SUM(c_footprint) AS 'sum' FROM cal WHERE c_mot= 'motorBike'";
        $public_pie_sql="SELECT SUM(c_footprint) AS 'sum' FROM cal WHERE c_mot= 'publicTransit'";
        $o_result=mysqli_query($con,$overall_fp);
        $a_result=mysqli_query($con,$avg_fp);   
        $d_result=mysqli_query($con,$total_distance);
        $fps_result=mysqli_query($con,$flight_pie_sql);
        $cps_result=mysqli_query($con,$car_pie_sql);
        $bps_result=mysqli_query($con,$bike_pie_sql);
        $pps_result=mysqli_query($con,$public_pie_sql);
            $o_fp= $o_result->fetch_assoc()['sum'];
            $a_fp= $a_result->fetch_assoc()['avg'];
            $d_fp= $d_result->fetch_assoc()['dsum'];
            $fps_fp= $fps_result->fetch_assoc()['sum']; 
            $cps_fp= $cps_result->fetch_assoc()['sum'];
            $bps_fp= $bps_result->fetch_assoc()['sum'];
            $pps_fp= $pps_result->fetch_assoc()['sum'];
        ?>
        
        <!-- ======= Services Section ======= -->
        <?php
                if(isset($ticket)){
                ?>
        <section id="services" class="services">
            <div class="container">

                <div class="section-title">
                    <span>Result</span>
                    <h2>Result</h2>
                    <p>Your total carboon emission that you have generated in your travelling for event on <?php echo $date; ?>.</p>
                </div>

                           <div class="row">
                    <div class="col-lg-4 col-md-6 d-flex align-items-stretch" data-aos="fade-up">
                        <div class="icon-box">
                            <div class="icon"><i class="bx bxl-dribbble"></i></div>
                            <h4><a href=""><?php echo $ticket; ?></a></h4>
                            <p>Your Ticket Number</p>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4 mt-md-0" data-aos="fade-up" data-aos-delay="150">
                        <div class="icon-box">
                            <div class="icon"><i class="bx bx-file"></i></div>
                            <h4><a href=""><?php echo $carbonFootprint; ?></a></h4>
                            <p>Your Carbon Footprint for this Travel</p>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4 mt-lg-0" data-aos="fade-up" data-aos-delay="300">
                        <div class="icon-box">
                            <div class="icon"><i class="bx bx-tachometer"></i></div>
                            <h4><a href=""><?php echo $distance; ?> KM</a></h4>
                            <p>Total Distance Traveled in <?php echo $vehicle_of_type ?></p>
                        </div>
                    </div>

                    </div>
                <?php
                }?>
            </div>
        </section>
        <!-- End Services Section -->

        <!-- ======= Team Section ======= -->
        <section id="team" class="team">
            <div class="container">

                <div class="section-title">
                    <span>Recommendation</span>
                    <h2>Recommendation</h2>
                    <p>Few Ways To Reduce Personal Carbon FootPrints </p>
                </div>

                <div class="row">
                    
                    <div class="col-lg-4 col-md-6 d-flex align-items-stretch" data-aos="zoom-in">
                        <div class="member">
                            <img src="assets/img/team/duration.jpg" alt="">
                            <h4>Flight Duration</h4><br>
                            <span>Fly nonstop since landings and takeoffs use more fuel and produce more emissions.</span>
                           
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 d-flex align-items-stretch" data-aos="zoom-in">
                        <div class="member">
                            <img src="assets/img/team/car.jpg" alt="">
                            <h4>Choose Car Wisely</h4><br>
                            <span>If you???re shopping for a new car, consider purchasing a hybrid or electric vehicle</span>
                            
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 d-flex align-items-stretch" data-aos="zoom-in">
                        <div class="member">
                            <img src="assets/img/team/route.jpg" alt="">
                            <h4>Route Matters</h4><br>
                            <span>If you fly for work or pleasure, air travel is probably responsible for the largest part of your carbon footprint. Avoid flying if possible; on shorter trips, driving may emit fewer greenhouse gases.</span>
                            
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 d-flex align-items-stretch" data-aos="zoom-in">
                        <div class="member">
                            <img src="assets/img/team/while.jpg" alt="">
                            <h4>While Driving</h4><br>
                            <span>Air conditioning and intensive city driving can make emissions creep up. Cut down on these as often as possible.</span>
                            
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 d-flex align-items-stretch" data-aos="zoom-in">
                        <div class="member">
                            <img src="assets/img/team/carpool.jpg" alt="">
                            <h4>Carpool</h4><br>
                            <span>This way, you???re splitting emissions between the number of people in the car.</span>
                            
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 d-flex align-items-stretch" data-aos="zoom-in">
                        <div class="member">
                            <img src="assets/img/team/long.jpg" alt="">
                            <h4>On Long Drives</h4><br>
                            <span>Use cruise control on long drives ??? in most cases, this can help to save gas.</span>
                            
                        </div>
                    </div>

                </div>

            </div>
        </section>
        <!-- End Team Section -->
       
        <!-- ======= Cta Section ======= -->
        <section id="cta" class="cta">
            <div class="container" data-aos="zoom-in">

                <div class="text-center">
                    <h3>Our Goal</h3>
                    <p> Formula One is a significant motorsport event that takes place all over the world. As it has shifted towards carbon neutral energy and back in 2019, they unveiled an ambitious sustainability goal in 2019 to achieve a net-zero carbon footprint by 2030. GP Canada (Grand Prix Canada), as a key part of Formula 1 and one of the most popular and anticipated circuits in the world, has the same objective of going carbon neutral by 2025 and actively investing in sustainable accounting.</p>
                    <a class="cta-btn" href="#about">Calculate Your Footprint</a>
                </div>

            </div>
        </section>
        <!-- End Cta Section -->
<br><br>
<!-- ======= Clients Section ======= -->
<section id="clients" class="clients">
            <div class="container" data-aos="zoom-in">

                <div class="row d-flex align-items-center">

                    <div class="col-lg-2 col-md-4 col-6">
                        <img src="assets/img/clients/client-1.png" class="img-fluid" alt="">
                    </div>

                    <div class="col-lg-2 col-md-4 col-6">
                        <img src="assets/img/clients/client-2.png" class="img-fluid" alt="">
                    </div>

                    <div class="col-lg-2 col-md-4 col-6">
                        <img src="assets/img/clients/client-3.png" class="img-fluid" alt="">
                    </div>

                    <div class="col-lg-2 col-md-4 col-6">
                        <img src="assets/img/clients/client-4.png" class="img-fluid" alt="">
                    </div>

                    <div class="col-lg-2 col-md-4 col-6">
                        <img src="assets/img/clients/client-5.png" class="img-fluid" alt="">
                    </div>

                    <div class="col-lg-2 col-md-4 col-6">
                        <img src="assets/img/clients/client-6.png" class="img-fluid" alt="">
                    </div>

                </div>

            </div>
        </section>
        <!-- End Clients Section -->



        <!-- ======= Contact Section ======= -->
        <section id="contact" class="contact">
            <div class="container">

                <div class="section-title">
                    <span>Contact</span>
                    <h2>Contact</h2>
                    <p>Sit sint consectetur velit quisquam cupiditate impedit suscipit alias</p>
                </div>

                <div class="row" data-aos="fade-up">
                    <div class="col-lg-6">
                        <div class="info-box mb-4">
                            <i class="bx bx-map"></i>
                            <h3>Our Address</h3>
                            <p>A108 Adam Street, New York, NY 535022</p>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6">
                        <div class="info-box  mb-4">
                            <i class="bx bx-envelope"></i>
                            <h3>Email Us</h3>
                            <p>contact@example.com</p>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6">
                        <div class="info-box  mb-4">
                            <i class="bx bx-phone-call"></i>
                            <h3>Call Us</h3>
                            <p>+1 5589 55488 55</p>
                        </div>
                    </div>

                </div>

                <div class="row" data-aos="fade-up">

                    <div class="col-lg-6 ">
                        <iframe class="mb-4 mb-lg-0" src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d12097.433213460943!2d-74.0062269!3d40.7101282!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xb89d1fe6bc499443!2sDowntown+Conference+Center!5e0!3m2!1smk!2sbg!4v1539943755621"
                            frameborder="0" style="border:0; width: 100%; height: 384px;" allowfullscreen></iframe>
                    </div>

                    <div class="col-lg-6">
                        <form action="forms/contact.php" method="post" role="form" class="php-email-form">
                            <div class="row">
                                <div class="col-md-6 form-group">
                                    <input type="text" name="name" class="form-control" id="name" placeholder="Your Name" required>
                                </div>
                                <div class="col-md-6 form-group mt-3 mt-md-0">
                                    <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" required>
                                </div>
                            </div>
                            <div class="form-group mt-3">
                                <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject" required>
                            </div>
                            <div class="form-group mt-3">
                                <textarea class="form-control" name="message" rows="5" placeholder="Message" required></textarea>
                            </div>
                            <div class="my-3">
                                <div class="loading">Loading</div>
                                <div class="error-message"></div>
                                <div class="sent-message">Your message has been sent. Thank you!</div>
                            </div>
                            <div class="text-center"><button type="submit">Send Message</button></div>
                        </form>
                    </div>

                </div>

            </div>
        </section>
        <!-- End Contact Section -->

    </main>
    <!-- End #main -->

    <!-- ======= Footer ======= -->
    <footer id="footer">
        <div class="footer-top">
            <div class="container">
                <div class="row">

                    <div class="col-lg-4 col-md-6">
                        <div class="footer-info">
                            <h3>carbon Eliminator</h3>
                            <p>
                                A108 Adam Street <br> NY 535022, USA<br><br>
                                <strong>Phone:</strong> +1 5589 55488 55<br>
                                <strong>Email:</strong> info@example.com<br>
                            </p>
                            <div class="social-links mt-3">
                                <a href="#" class="twitter"><i class="bx bxl-twitter"></i></a>
                                <a href="#" class="facebook"><i class="bx bxl-facebook"></i></a>
                                <a href="#" class="instagram"><i class="bx bxl-instagram"></i></a>
                                <a href="#" class="google-plus"><i class="bx bxl-skype"></i></a>
                                <a href="#" class="linkedin"><i class="bx bxl-linkedin"></i></a>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-2 col-md-6 footer-links">
                        <h4>Useful Links</h4>
                        <ul>
                            <li><i class="bx bx-chevron-right"></i> <a href="#">Home</a></li>
                            <li><i class="bx bx-chevron-right"></i> <a href="#">About us</a></li>
                            <li><i class="bx bx-chevron-right"></i> <a href="#">Services</a></li>
                            <li><i class="bx bx-chevron-right"></i> <a href="#">Terms of service</a></li>
                            <li><i class="bx bx-chevron-right"></i> <a href="#">Privacy policy</a></li>
                        </ul>
                    </div>

                    <div class="col-lg-2 col-md-6 footer-links">
                        <h4>Our Services</h4>
                        <ul>
                            <li><i class="bx bx-chevron-right"></i> <a href="#">Web Design</a></li>
                            <li><i class="bx bx-chevron-right"></i> <a href="#">Web Development</a></li>
                            <li><i class="bx bx-chevron-right"></i> <a href="#">Product Management</a></li>
                            <li><i class="bx bx-chevron-right"></i> <a href="#">Marketing</a></li>
                            <li><i class="bx bx-chevron-right"></i> <a href="#">Graphic Design</a></li>
                        </ul>
                    </div>

                    <div class="col-lg-4 col-md-6 footer-newsletter">
                        <h4>Our Newsletter</h4>
                        <p>Tamen quem nulla quae legam multos aute sint culpa legam noster magna</p>
                        <form action="" method="post">
                            <input type="email" name="email"><input type="submit" value="Subscribe">
                        </form>

                    </div>

                </div>
            </div>
        </div>

        <div class="container">
            <div class="copyright">
                &copy; Copyright <strong><span>Carbon Eliminators</span></strong>. All Rights Reserved
            </div>
            <div class="credits">
                <!-- All the links in the footer should remain intact. -->
                <!-- You can delete the links only if you purchased the pro version. -->
                <!-- Licensing information: https://bootstrapmade.com/license/ -->
                <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/day-multipurpose-html-template-for-free/ -->
                Designed by <a href="https://bootstrapmade.com/">Seneca Students</a>
            </div>
        </div>
    </footer>
    <!-- End Footer -->

    <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>
    <div id="preloader"></div>

    <!-- Vendor JS Files -->
    <script src="assets/vendor/aos/aos.js"></script>
    <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
    <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
    <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
    <script src="assets/vendor/php-email-form/validate.js"></script>
    <script src="https://fastly.jsdelivr.net/npm/echarts@5.4.0/dist/echarts.min.js"></script>
    <script>
        var dom = document.getElementById('chart-container');
var myChart = echarts.init(dom, null, {
  renderer: 'canvas',
  useDirtyRect: false
});
var app = {};

var option;

option = {
  title: {
    text: 'Mode Of Transport',
    subtext: 'Carbon FootPrint in KG CO2',
    left: 'center'
  },
  tooltip: {
    trigger: 'item'
  },
  legend: {
    orient: 'vertical',
    left: 'left'
  },
  series: [
    {
      name: 'Emissions From',
      type: 'pie',
      radius: '50%',
      data: [
        { value: <?php echo $fps_fp; ?>, name: 'Flight' },
        { value: <?php echo $cps_fp; ?>, name: 'Car Travel' },
        { value: <?php echo $bps_fp; ?>, name: 'Motor Bike' },
        { value: <?php echo $pps_fp; ?>, name: 'Public Transit' }
      ],
      emphasis: {
        itemStyle: {
          shadowBlur: 10,
          shadowOffsetX: 0,
          shadowColor: 'rgba(0, 0, 0, 0.5)'
        }
      }
    }
  ]
};


if (option && typeof option === 'object') {
  myChart.setOption(option);
}

window.addEventListener('resize', myChart.resize);
    </script>

    <!-- Template Main JS File -->
    <script src="assets/js/main.js"></script>

</body>

</html>