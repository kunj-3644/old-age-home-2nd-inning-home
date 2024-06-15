<?php
    $con=mysqli_connect("localhost","root","");
    mysqli_select_db($con,"2ndinninghome");
   
?>
<?php

    if(isset($_POST["insert"]))
    {
        $name =$_POST["name"];
        $email =$_POST["email"];
        $number =$_POST["number"];
        $birthdate =$_POST["birthdate"];
        $gender =$_POST["gender"];
        $address =$_POST["address"];
        $city =$_POST["city"];
        $state =$_POST["state"];

        $query ="INSERT INTO `registration`(`id`, `name`, `email`, `number`, `birthdate`, `gender`, `address`, `city`, `state`) VALUES ('','$name','$email','$number','$birthdate','$gender','$address','$city','$state')";
        mysqli_query($con,$query);
  
    }

?>
<html>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE-edge">
    <link rel="stylesheet" href="header.css">  
    <!-- <link rel="stylesheet" href="style6.css"> -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
    <script src="https://unpkg.com/ionicons@4.5.10-0/dist/ionicons.js"></script>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE-edge">
    <meta name="viewport" content="width-device-width,initial-scale=1.0">
    <title>Regestration</title>
    <link rel="stylesheet" href="reg.css"> 


<!-- 
    <link href="img/favicon.ico" rel="icon"> -->


  

<!-- Google Web Fonts -->
<link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&display=swap" rel="stylesheet">

<!-- Font Awesome -->
<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">

<!-- Libraries Stylesheet -->
<link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
<link href="lib/lightbox/css/lightbox.min.css" rel="stylesheet">

<!-- Customized Bootstrap Stylesheet -->
<link href="css2/style.css" rel="stylesheet">


<style>

ul {
    margin: 0px;
    padding: 0px;
}
.footer-section {
  background: #151414;
  position: relative;
}
.footer-cta {
  border-bottom: 1px solid #373636;
}
.single-cta i {
  color: #ff5e14;
  font-size: 30px;
  float: left;
  margin-top: 8px;
}
.cta-text {
  padding-left: 15px;
  display: inline-block;
}
.cta-text h4 {
  color: #fff;
  font-size: 20px;
  font-weight: 600;
  margin-bottom: 2px;
}
.cta-text span {
  color: #757575;
  font-size: 15px;
}
.footer-content {
  position: relative;
  z-index: 2;
}
.footer-pattern img {
  position: absolute;
  top: 0;
  left: 0;
  height: 330px;
  background-size: cover;
  background-position: 100% 100%;
}
.footer-logo {
  margin-bottom: 30px;
}
.footer-logo img {
    max-width: 200px;
}
.footer-text p {
  margin-bottom: 14px;
  font-size: 14px;
      color: #7e7e7e;
  line-height: 28px;
}
.footer-social-icon span {
  color: #fff;
  display: block;
  font-size: 20px;
  font-weight: 700;
  font-family: 'Poppins', sans-serif;
  margin-bottom: 20px;
}
.footer-social-icon a {
  color: #fff;
  font-size: 16px;
  margin-right: 15px;
}
.footer-social-icon i {
  height: 40px;
  width: 40px;
  text-align: center;
  line-height: 38px;
  border-radius: 50%;
}
.facebook-bg{
  background: #3B5998;
}
.twitter-bg{
  background: #55ACEE;
}
.google-bg{
  background: #DD4B39;
}
.footer-widget-heading h3 {
  color: #fff;
  font-size: 20px;
  font-weight: 600;
  margin-bottom: 40px;
  position: relative;
}
.footer-widget-heading h3::before {
  content: "";
  position: absolute;
  left: 0;
  bottom: -15px;
  height: 2px;
  width: 50px;
  background: #ff5e14;
}
.footer-widget ul li {
  display: inline-block;
  float: left;
  width: 50%;
  margin-bottom: 12px;
}
.footer-widget ul li a:hover{
  color: #ff5e14;
}
.footer-widget ul li a {
  color: #878787;
  text-transform: capitalize;
}
.subscribe-form {
  position: relative;
  overflow: hidden;
}
.subscribe-form input {
  width: 100%;
  padding: 14px 28px;
  background: #2E2E2E;
  border: 1px solid #2E2E2E;
  color: #fff;
}
.subscribe-form button {
    position: absolute;
    right: 0;
    background: #ff5e14;
    padding: 13px 20px;
    border: 1px solid #ff5e14;
    top: 0;
}
.subscribe-form button i {
  color: #fff;
  font-size: 22px;
  transform: rotate(-6deg);
}
.copyright-area{
  background: #202020;
  padding: 25px 0;
}
.copyright-text p {
  margin: 0;
  font-size: 14px;
  color: #878787;
}
.copyright-text p a{
  color: #ff5e14;
}
.footer-menu li {
  display: inline-block;
  margin-left: 20px;
}
.footer-menu li:hover a{
  color: #ff5e14;
}
.footer-menu li a {
  font-size: 14px;
  color: #878787;
}




</style>
</head>
<body>
<!-- <header>
            <a href="#" class="logo">Logo</a>
            <input type="checkbox" id="menu-bar">
            <label for="menu-bar">menu</label>
            <nav class="navbar">
                <ul>
                    <li><a href="header.php">Home</a></li>
                    <li><a href="aboutus.php">Aboutus</a></li>
                    <li><a href="contact.php">Contact +</a>
                    <ul>
                      <li><a href="regestration.php">Regestration</a></li>
                    </ul>
                    <li><a href="donation.php">Donation</a></li>
                    <li><a href="#activity+">Activity +</a>
                        <ul>
                            <li><a href="festival.php">Festival celebration</a></li>
                            <li><a href="food.php">Food facility</a></li>
                        </ul>
                    </li>
                    <li><a href="regularhealth.php">RHC +</a>
                        <ul>
                            <li><a href="https://ehospital.gov.in/ehospitalsso/">Emergency</a></li>
                            <li><a href="rooms.php">Room facility</a></li>
                            <li><a href="#assistant facility">Assistant facility</a></li>
                        </ul>
                    </li>
                    <li><a href="helpline.php">Helpline</a></li>
                    <li><a href="description.php">Description</a></li>
                    <li><a href="login.php">Login</a></li>
                    <li><a href="feedback.php">Feedback</a></li>
                </ul>
            </nav>
        </header> -->
    <!--  -->
 
    <!--  -->
    <div class="sub_rotli_body">
        <section class="rotli11">
            <div class="registrationheader">Registration Form</div>
            <form action="#" class="form" method="POST">
                <div class="input-box">
                    <label>Full Name</label>
                    <input type="text" name="name" required>
                </div>
                <div class="input-box">
                    <label>Email Address</label>
                    <input type="text" name="email" required>
                </div>
                <div class="column">
                    <div class="input-box">
                        <label>Phone Number</label>
                        <input type="text" name="number" required>
                    </div>
                    <div class="input-box">
                        <label>Birth Date</label>
                        <input type="date" name="birthdate"required>
                    </div>
                </div>
                <div class="gender-box">
                    <h3 style="color:black;   font-size: x-large; font-weight: bold;font-style: oblique;">Gender</h3>
                    <div class="gender option">
                            <div class="gender">
                                <input type="radio" name="gender" value="Male">
                                <label for="check-male">Male</label>
                            </div>
                            <div class="gender">
                                <input type="radio"  name="gender" value="Female">
                                <label for="check-female">Female</label>
                            </div> 
                            <div class="gender">
                                <input type="radio" id="check-other" name="gender" value="Prefer not to say">
                                <label for="check-other">Prefer not to say </label>
                            </div> 
                     </div>
                </div>
                <div class="input-box address">
                    <label>Address</label>
                    <input type="text" name="address" required>
                
                </div>
                <div class="input-box address">
                    <label>state</label>
                    <input type="text" name="state" required>
                
                </div>
                <div class="input-box address">
                    <label>city</label>
                    <input type="text" name="city" required>
                </div>
                <button type="submit" name="insert" value="insert">Insert</button>
                <button><a href="header.html">Back</a></button>
            </form>
        </section>
    </div>
 


    <!--  -->


   <!-- Footer Start -->
   <footer class="footer-section">
        <div class="container">
            <div class="footer-cta pt-5 pb-5">
                <div class="row">
                    <div class="col-xl-4 col-md-4 mb-30">
                        <div class="single-cta">
                            <i class="fas fa-map-marker-alt"></i>
                            <div class="cta-text">
                                <h4>Find us</h4>
                                <span>Bhavngar 364001</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-md-4 mb-30">
                        <div class="single-cta">
                            <i class="fas fa-phone"></i>
                            <div class="cta-text">
                                <h4>Call us</h4>
                                <span>+91 1234567891</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-md-4 mb-30">
                        <div class="single-cta">
                            <i class="far fa-envelope-open"></i>
                            <div class="cta-text">
                                <h4>Mail us</h4>
                                <span>dummy12@info.com</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <center>
            <div class="footer-content pt-5 pb-5">
                <div class="row">
                    <div class="col-xl-4 col-lg-4 mb-50">
                        <div class="footer-widget">
                            <div class="footer-logo">
                                <a href="header.php"><img src="img3/bl.png" class="img-fluid" alt="logo"></a>
                            </div>
                            <div class="footer-text">
                               
                            </div>
                            <div class="footer-social-icon">
                                <span>Follow us</span>
                                <a href="#"><i class="fab fa-facebook-f facebook-bg"></i></a>
                                <a href="#"><i class="fab fa-twitter twitter-bg"></i></a>
                                <a href="#"><i class="fab fa-google-plus-g google-bg"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-4 col-md-6 mb-30">
                        <div class="footer-widget">
                            <div class="footer-widget-heading">
                                <h3>Useful Links</h3>
                            </div>
                            <ul>
                            <li><a href="header.php" style="text-decoration: none;">Home</a></li>
                                <li><a href="aboutus.php" style="text-decoration: none;">about</a></li>
                                
                                <li><a href="contact.php" style="text-decoration: none;">Contact</a></li>
                                <li><a href="feedback.php" style="text-decoration: none;">feedback</a></li>
                            </ul>
                        </div>
                    </div>
                    <!-- <div class="col-xl-4 col-lg-4 col-md-6 mb-50">
                        <div class="footer-widget">
                            <div class="footer-widget-heading">
                                <h3>Subscribe</h3>
                            </div>
                            <div class="footer-text mb-25">
                                <p>Don’t miss to subscribe to our new feeds, kindly fill the form below.</p>
                            </div>
                            <div class="subscribe-form">
                                <form action="#">
                                    <input type="text" placeholder="Email Address">
                                    <button><i class="fab fa-telegram-plane"></i></button>
                                </form>
                            </div>
                        </div>
                    </div> -->
                </div>
            </div>
        </div>
        <div class="copyright-area">
            <div class="container">
                <div class="row">
                    <div class="col-xl-6 col-lg-6 text-center text-lg-left">
                        <div class="copyright-text">
                            <center><p>Copyright &copy; 2024, All Right Reserved</center></p>
                        </div>
                    </div>
                   
                </div>
            </div>
        </div>
    </footer>
    <!-- Footer End 
    <!-- Footer End -->


    <!-- Back to Top -->
    <a href="#" class="btn btn-secondary px-2 back-to-top"><i class="fa fa-angle-double-up"></i></a>


    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js"></script>
    <script src="lib/easing/easing.min.js"></script>
    <script src="lib/waypoints/waypoints.min.js"></script>
    <script src="lib/owlcarousel/owl.carousel.min.js"></script>
    <script src="lib/isotope/isotope.pkgd.min.js"></script>
    <script src="lib/lightbox/js/lightbox.min.js"></script>

    <!-- Contact Javascript File -->
    <script src="mail/jqBootstrapValidation.min.js"></script>
    <script src="mail/contact.js"></script>

    <!-- Template Javascript -->
    <script src="js/main.js"></script>
</body>

</html>