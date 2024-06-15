<?php session_start(); 
     echo"<script>window.location.href='donation.php'</script>";
    ?>
<html>
    <head>
        <title></title>
    </head>
    <body>
        <h1>Result Page</h1>
        <h2>
            name: <span id="result-Firstname"><?php echo $_SESSION['name']; ?></span>
        </h2>
        <h2>
            email: <span id="result-Lastname"><?php echo $_SESSION['email']; ?></span>
        </h2>
        <h2>
            rupess: <span id="result-Addressline1"><?php echo $_SESSION['rupess']; ?></span>
        </h2>
        <h2>
            Card NUmber: <span id="result-Mno"><?php echo $_SESSION['cardnumber']; ?></span>
        </h2>
        <h2>
            expire: <span id="result-email"><?php echo $_SESSION['expire']; ?></span>
        </h2>
        <h2>
            cvv: <span id="result-Landmark"><?php echo $_SESSION['cvv']; ?></span>
        </h2>
       

    </body>
</html>


      