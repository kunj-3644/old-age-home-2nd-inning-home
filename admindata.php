<?php

    session_start();
    include("connection.php");


    ?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>2Nd Inning home</title>
        <link href="https://cdn.jsdelivr.net/npm/simple-datatables@7.1.2/dist/style.min.css" rel="stylesheet" />
        <link href="css/styles.css" rel="stylesheet" />
        <script src="https://use.fontawesome.com/releases/v6.3.0/js/all.js" crossorigin="anonymous"></script>

        <link href="css/button.css" rel="stylesheet">
    </head>
    <body class="sb-nav-fixed">
        <nav class="sb-topnav navbar navbar-expand navbar-dark bg-dark">
            <!-- Navbar Brand-->
            <a class="navbar-brand ps-3" href="index.php">2nd Inning Home</a>
            <!-- Sidebar Toggle-->
            <button class="btn btn-link btn-sm order-1 order-lg-0 me-4 me-lg-0" id="sidebarToggle" href="#!"><i class="fas fa-bars"></i></button>
            <!-- Navbar Search-->
            <form class="d-none d-md-inline-block form-inline ms-auto me-0 me-md-3 my-2 my-md-0">
                <div class="input-group">
                    <input class="form-control" type="text" placeholder="Search for..." aria-label="Search for..." aria-describedby="btnNavbarSearch" />
                    <button class="btn btn-primary" id="btnNavbarSearch" type="button"><i class="fas fa-search"></i></button>
                </div>
            </form>
            <!-- Navbar-->
            <ul class="navbar-nav ms-auto ms-md-0 me-3 me-lg-4">
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" id="navbarDropdown" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false"><i class="fas fa-user fa-fw"></i></a>
                    <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                        <li><a class="dropdown-item" href="#!">Settings</a></li>
                        <li><a class="dropdown-item" href="#!">Activity Log</a></li>
                        <li><a class="dropdown-item" href="register.php">Admin reg form</a></li>
                        
                        <li><hr class="dropdown-divider" /></li>
                        <li><a class="dropdown-item" href="Login.php">Logout</a></li>
                    </ul>
                </li>
            </ul>
        </nav>
        <div id="layoutSidenav">
            <div id="layoutSidenav_nav">
                <nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
                    
                    <div class="sb-sidenav-menu">
                        <div class="nav">
                            <div class="sb-sidenav-menu-heading">Core</div>
                            <a class="nav-link" href="index.php">
                               <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                                Dashboard
                            </a>
                            <div class="sb-sidenav-menu-heading">INFORMATION</div>
                            <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#collapseLayouts" aria-expanded="false" aria-controls="collapseLayouts">
                                <!-- <div class="sb-nav-link-icon"><i class="fas fa-columns"></i></div> -->
                                <a class="nav-link" href="donation.php">
                                    <div class="sb-nav-link-icon"><i class="fas fa-donate"></i></div>
                                    Donation
                                </a>
                                <a class="nav-link" href="admindata.php">
                                    <div class="sb-nav-link-icon"><i class="fa fa-lock"></i></div>
                                    Admin login
                                </a>
                                <a class="nav-link" href="admindetail.php">
                                    <div class="sb-nav-link-icon"><i class="fa fa-lock"></i></div>
                                    registration 
                                </a>
                                <a class="nav-link" href="feedback.php">
                                    <div class="sb-nav-link-icon"><i class='fas fa-comments'></i></div>
                                    Feedback
                                </a>
                                <a class="nav-link" href="contact.php">
                                    <div class="sb-nav-link-icon"><i class="fa fa-phone" aria-hidden="true"></i></div>
                                    Contact
                                </a>
                                <a class="nav-link" href="user_reg.php">
                                    <div class="sb-nav-link-icon"><i class="fa fa-user-secret" aria-hidden="true"></i></div>
                                    user registraction
                                </a>
                                <a class="nav-link" href="userlogin.php">
                                    <div class="sb-nav-link-icon"><i class="fa fa-users" aria-hidden="true"></i></div>
                                    user login
                                </a>
                                
                                <!-- <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div> -->
                            </a>
                            <div class="collapse" id="collapseLayouts" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordion">
                                <nav class="sb-sidenav-menu-nested nav">
                                    <!-- <a class="nav-link" href="layout-static.html">Static Navigation</a>
                                    <a class="nav-link" href="layout-sidenav-light.html">Light Sidenav</a>  -->
                                </nav>
                            </div>
                            <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#collapsePages" aria-expanded="false" aria-controls="collapsePages">
                                <div class="sb-nav-link-icon"><i class="fas fa-book-open"></i></div>
                                 manage 
                                <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                            </a>
                            <div class="collapse" id="collapsePages" aria-labelledby="headingTwo" data-bs-parent="#sidenavAccordion">
                                <nav class="sb-sidenav-menu-nested nav accordion" id="sidenavAccordionPages">
                                    <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#pagesCollapseAuth" aria-expanded="false" aria-controls="pagesCollapseAuth">
                                        Infromation for website
                                        <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                                    </a>
                                    <div class="collapse" id="pagesCollapseAuth" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordionPages">
                                        <nav class="sb-sidenav-menu-nested nav">
                                            <a class="nav-link" href="login.php">Login</a>
                                            <a class="nav-link" href="register.php">Register</a>
                                            <!-- <a class="nav-link" href="password.html">Forgot Password</a> -->
                                        </nav>
                                    </div>
                                    <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#pagesCollapseError" aria-expanded="false" aria-controls="pagesCollapseError">
                                  
                                </nav>
                            </div>
                            <div class="sb-sidenav-menu-heading">Other Tables</div>
                            <!-- <a class="nav-link" href="charts.html">
                                <div class="sb-nav-link-icon"><i class="fas fa-chart-area"></i></div>
                                Charts
                            </a> -->
                            <!-- <a class="nav-link" href="tables.php">
                                <div class="sb-nav-link-icon"><i class="fas fa-table"></i></div>
                                Tables
                            </a> -->
                        </div>
                    </div>
                    <div class="sb-sidenav-footer">
                        <!-- <div class="small">Logged in as:</div>
                        Start Bootstrap -->
                    </div>
                </nav>
            </div>
            <div id="layoutSidenav_content">
                <main>
                    <div class="container-fluid px-4">
                        <h1 class="mt-4">Tables</h1>
                        <ol class="breadcrumb mb-4">
                            <li class="breadcrumb-item"><a href="index.php">Dashboard</a></li>
                            <li class="breadcrumb-item active">Tables</li>
                        </ol>
                     
                        <div class="card mb-4">
                            <div class="card-header">
                                <i class="fas fa-table me-1"></i>
                               <center>Admin login data</center>
                            </div>
                            <div class="card-body">
                                 <table id="datatablesSimple">
                                   <table class="table">
                                    <thead>
                                        <tr>
                                            <th scope="col">Username</th>
                                            <th scope="col">password</th>
                                            <th scope="col" colspan="2">Operation</th>
                                           
                                        </tr>
                                        <?php
                                            $i=1;
                                            $rows= mysqli_query($con,"SELECT * FROM `adminlogin`");
                                            ?>
                                            <?php foreach($rows as $row):?>
                                            <tr>
                                                <td><?php echo $row["Username"]; ?></td>
                                                <td><?php echo $row["Password"]; ?></td>
                                               
                                  <!-- update query is started -->
                                  <td>
                                                <button type="button" class="btn btn-warning" data-bs-toggle="modal" data-bs-target="#exampleModal">
                                               Update
                                                </button>
                                                <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                <div class="modal-dialog">
                                                <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title" id="exampleModalLabel">Update Product</h5>
                                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                </div>
                                                <div class="modal-body">
                                                <form class="" action="" method="post" autocomplete="off" enctype="multipart/form-data"> 
                                                <div class="input-group mb-3">
                                                    <label for="Username" style="color:black;">Username :</label>&nbsp
                                                    <input type="text" name="Username" id="Username" required value=""><br>
                                                            
                                                </div>
                                                <hr><br>
                                            
                                                <div class="input-group mb-3">
                                                    <label for="Password" style="color:black;">Password :</label>&nbsp
                                                    <input type="text" name="Password" id="Password" required value=""><br>
                                                            
                                                </div>
                                                <hr><br>
                                                    
                                            <button type="submit" class="btn btn-primary" name="update" value="update">update</button>
                                            </form>
                                                </div>
                                                 </div>
                                            </div>
                                            </div>
                                        </td>

                                        <!-- update query over -->

                                        <!-- delete query started -->
                                        <td>
                                            <button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#exampleModa2">
                                               Delete
                                            </button>
                                            <div class="modal fade" id="exampleModa2" tabindex="-1" aria-labelledby="exampleModalLabe2" aria-hidden="true">
                                                <div class="modal-dialog">
                                                <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title" id="exampleModalLabe2"></h5>
                                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                </div>
                                                <div class="modal-body">
                                                     <form class="" action="tableproduct.php" method="post" autocomplete="off" enctype="multipart/form-data"> 
                                                     <div class="input-group mb-3">
                                                            <label for="Username" style="color:black;">Username :</label>&nbsp
                                                            <input type="text" name="Username" id="Username" required value=""><br>
                                                            
                                                          </div><hr><br>
                                                            <hr>
                                                            <div class="modal-footer">
                                                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                                                <button type="submit" class="btn btn-danger" name="delete" value="delete">delete</button>
                                                            </div>
                                                            <hr>
                                                        <hr>
                                                     </form>
                                                </div>
                                        </div>
                                        </td>
                                        </tr>
                                        <?php endforeach; ?>
                
                                    <br>
                                  
                             </tbody>
                    </table>

                    <!-- table 2 -->
                    

                    <!-- table 2 -->

                    
          <footer class="py-4 bg-light mt-auto">
                    <div class="container-fluid px-4">
                        <div class="d-flex align-items-center justify-content-between small">
                            <div class="text-muted">Copyright &copy; 2nd Inning Home 2024</div>
                            <div>
                                <a href="#">Privacy Policy</a>
                                &middot;
                                <a href="#">Terms &amp; Conditions</a>
                            </div>
                        </div>
                    </div>
                </footer>
            </div>
        </div>
      
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
        <script src="js/scripts.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/simple-datatables@7.1.2/dist/umd/simple-datatables.min.js" crossorigin="anonymous"></script>
        <script src="js/datatables-simple-demo.js"></script>
    </body>
</html>


<?php 
    
     if(isset($_POST["delete"]))
     {


        $Username = $_POST['Username'];
        $query = "DELETE FROM `adminlogin` WHERE username = '$username'";
        mysqli_query($con,$query);


   
     }



?>
<?php

     if(isset($_POST["update"]))
     {
        $Username = $_POST['Username'];
        $Password = $_POST['Password'];
        $query = "UPDATE `adminlogin` SET `Password`='$Password',`Username`='$Username' WHERE `Username` = '$Username'";

        mysqli_query($con,$query);
     }
    ?>
