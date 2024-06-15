<!--login form for admin-->
<?php
    include("connection.php");
    session_start();
?>
<html>
    <head>
        <title>Login Form</title>
        <link rel="stylesheet" href="style2.css">
    </head>
    <body>
         <form method="POST">
        <div class="container">
            <div class="wrapper">
             <h1>Admin Login</h1>
       <div class="input-box">
           <input type="text" placeholder="username"  name="username" required>
           <i class='bx bxs-user'></i>
       </div>
       <div class="input-box">
           <input type="password" placeholder="password"  name="password" id="password">
         
        </div>
        <div class="input-box">
           <input type="password" placeholder="Confirmpassword"  name="cp" required>
           
           <i class='bx bxs-envelope'></i>
       </div> 
       <div class="remember-forgot">
           <label><input type="checkbox">Remember me</label>
           <a href="#">Forgot password?</a>
       </div>
       <input type="submit" class="btn" value="login" name="login">
       <a href="index.html" target="tframe"><center>BACK</center></a>      
    </body>
    <script>
            let eye=document.getElementById("eye");
            let password=document.getElementById("password");
            eye.onclick=function()
            {
                if(password.type=="password")
                {
                    password.type="text";
                }
                else
                {
                     password.type="password";
                }
            }
    </script> 
</form>
</html>
<?php 
    if(isset($_POST["login"]))
    {
        $username=$_POST["username"];
        $password=$_POST["password"];
        $query="SELECT * FROM `adminlogin` WHERE username = '$username' and password ='$password'";
        $result = mysqli_query($con,$query);
        /*$row = mysqli_fetch_array($result , MYSQLI_ASSOC);
        $count = mysqli_num_rows($result);*/
        if(mysqli_num_rows($result)>0){
            $_SESSION['auth']=true;
            
            $data=mysqli_fetch_array($result);
            $admin_name=$data['name'];

            $_SESSION['auth_user']=[
                'name'=>$admin_name
            ];

            header("location:index.php");
         }
         else{
            echo'<script>;alert("name or password not valide please check")</script>';   
         }
        }
         ?>






