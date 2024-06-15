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
    </head>
<body>
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
        <!-- Navbar complete -->
<div class="card mb-4">
                            <div class="card-header">
                                <i class="fas fa-table me-1"></i>
                               <center> Adminlogin Table Data</center>
                            </div>
                            <div class="card-body">
                                 <table id="datatablesSimple">
                                   <table class="table">
                                    <thead>
                                        <tr>
                                            <th scope="col">#</th>
                                            <th scope="col">Username</th>
                                            <th scope="col">Password</th>
                                            <th scope="col">update</th>
                                            <th scope="col">delete</th>
                                        </tr>
                               
                                    </tbody> 
                                </table>
                                <div class="card mb-4">
                            <div class="card-header">
                                <i class="fas fa-table me-1"></i>
                               <center> Regestration Table Data</center>
                            </div>
                        <div class="card-body">
                            <table id="datatablesSimple">
                            <table class="table">
                                    <thead>
                                        <tr>
                                            <th scope="col">#</th>
                                            <th scope="col">name</th>
                                            <th scope="col">email</th>
                                            <th scope="col">number</th>
                                            <th scope="col">birthdate</th>
                                            <th scope="col">gender</th>
                                            <th scope="col">address</th>
                                            <th scope="col">city</th>
                                            <th scope="col">state</th>
                                            <th scope="col">rupess</th> 
                                            <th scope="col">update</th>
                                            <th scope="col">delete</th>
                                        </tr>
                                        <?php
                                            $i=1;
                                            $rows= mysqli_query($con,"SELECT * FROM `registration` WHERE 1");
                                            ?>
                                            <?php foreach($rows as $row):?>
                                            <tr>
                                                <td><?php echo $i++; ?></td>
                                                <td><?php echo $row["name"]; ?></td>
                                                <td><?php echo $row["email"]; ?></td>
                                                <td><?php echo $row["number"]; ?></td>
                                                <td><?php echo $row["birthdate"]; ?></td>
                                                <td><?php echo $row["gender"]; ?></td>
                                                <td><?php echo $row["address"]; ?></td>
                                                <td><?php echo $row["city"]; ?></td>
                                                <td><?php echo $row["state"]; ?></td>
                                            </tr>
                                        </thead>
                                        <?php endforeach; ?>
                                    </tbody> 
                                </table>
                            </div>
                        </div>
                    </main>
</body>
</html>