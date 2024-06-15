<?php

    $con = mysqli_connect("localhost","root","");
    mysqli_select_db($con,"2ndinninghome");



   // echo"<script>alert('connection must be done')</script>";

?>



<?php


    if(isset($_POST["feedback"]))
    {

        $name = $_POST['name'];
        $lastname = $_POST['lastname'];
        $phoneno = $_POST['phoneno'];
        $email = $_POST['email'];
        $f1 = $_POST['f1'];

        $query = "INSERT INTO `feedback`(`id`, `name`, `lastname`, `phoneno`, `email`, `feedback`) VALUES ('','$name','$lastname','$phoneno','$email','$f1')";

        mysqli_query($con,$query);


    }


?>


<html>
    <head>
        <title></title>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
       
        <link rel="stylesheet" href="feedback.2css">
        <!-- <link rel="stylesheet" href="style6.css"> -->
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
        <link href="https://fonts.googleapis.com/css?family=Josefin+Sans&display=swap" rel="tylesheet">
        <!-- <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
        <script src="http://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
        <script src="https://unpkg.com/ionicons@4.5.10-0/dist/ionicons.js"></script> -->
       
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE-edge">
        <meta name="viewport" content="width-device-width,initial-scale=1.0">

        <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&display=swap" rel="stylesheet">

    <!-- Font Awesome -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="lib/lightbox/css/lightbox.min.css" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
    <link href="css2/style.css" rel="stylesheet">




    <!-- <link rel="stylesheet" href="feedback2.css">


    <link href="feedbackfooter.css" rel="stylesheet"> -->


    <style>


@import url('https://fonts.googleapis.com/css?family=Josefin+Sans');

*{
  margin: 0;
  padding: 0;
  box-sizing: border-box;
  outline: none;
  font-family: 'Josefin Sans', sans-serif;
}

/* body{
 
  background: #00ccff;
} */

.wrapper{
  position: absolute;
  top: 50%;
  left: 50%;
  transform: translate(-50%,-50%);
  max-width: 350px;
  margin-top:250px;
  background-color: lightblue;
  width: 100%;
  background: #fff;
  padding: 25px;
  border-radius: 5px;
  box-shadow: 4px 4px 2px rgb(17, 128, 255); 
}

.wrapper h2{
  text-align: center;
  margin-bottom: 20px;
  text-transform: uppercase;
  letter-spacing: 3px;
  color: #332902;
}

.wrapper .input_field{
  margin-bottom: 10px;
}

.wrapper .input_field input[type="text"],
.wrapper textarea{
  border: 1px solid #66dbff;
  border-radius: 5px;
  width: 100%;
  padding: 10px;
}

.wrapper textarea{
  resize: none;
  height: 80px;
}

.wrapper .btn input[type="submit"]{
  border: 0px;
  margin-top: 15px;
  padding: 10px;
  text-align: center;
  width: 100%;
  background: #00a2ff;
  color: #332902;
  text-transform: uppercase;
  letter-spacing: 5px;
  font-weight: bold;
  border-radius: 5px;
  cursor: pointer;
}

#error_message{
  margin-bottom: 20px;
  background: #fe8b8e;
  padding: 0px;
  text-align: center;
  font-size: 14px;
  transition: all 0.5s ease;
}


    </style>

    </head>


   
    <body>




    <div class="jumbotron jumbotron-fluid page-header" style="margin-bottom: 90px;">
        <div class="container text-center py-5">
            <h1 class="text-white display-3 mt-lg-5">Feedback</h1>
            <div class="d-inline-flex align-items-center text-white">
                <p class="m-0"><a class="text-white" href="header.php">home</a></p>
                <i class="fa fa-circle px-3"></i>
                <p class="m-0">feedback</p>
            </div>
        </div>
    </div>
    <!-- Header End -->


    
   
    

        <div class="wrapper">
        <h2>Feedback Form</h2>
        <div id="error_message"></div>
        <form id="myform" method="POST" onsubmit="return validate();">
            <div class="input_field">
                <input type="text" placeholder="First Name" id="fname" name="name">
            </div>
            <div class="input_field">
                <input type="text" placeholder="Last Name" id="lname" name="lastname">
            </div>
            <div class="input_field">
                <input type="text" placeholder="Phone" id="phone" name="phoneno">
            </div>
            <div class="input_field">
                <input type="text" placeholder="Email" id="email" name="email">
            </div>
            <div class="input_field">
                <textarea placeholder="Your Feedback" id="yourfeedback" name="f1"></textarea>
            </div>
            <div class="btn">
                <input type="submit" name="feedback" value="feedback">
            </div>
        </form>
        </div>

</div>

</div>
</div>
</body>

<!--  -->













<!--  -->
<!--  -->
<script src="feedback.js"></script>

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




</html>