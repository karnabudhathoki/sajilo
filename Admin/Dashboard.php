 <?php
    session_start();
    if (isset($_SESSION['username'])){
        $name = $_SESSION['username'];
        // echo $username;
    }
 ?>
 <!DOCTYPE html>
 <html lang="en">
 <head>
    <title>Admin side</title>
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="Dashboard.css">
 </head>
 <body>

    <nav>
        <div class="logo-name"> 
            <div class="logo-image">
               <img src="housekeeping.jpg">
            </div>
            <span class="logo_name">Sajilo Upaya</span>
        </div>
        <div class="menu-items">
            <ul class="nav-links">
                <li><a href="#">
                    <i class='bx bxs-dashboard'></i>
                    <span class="link-name">Dahsboard</span>
                </a></li>
                <!-- <li><a href="category.html">
                    <i class='bx bxs-category'></i>
                    <span class="link-name"> Category</span>
                </a></li>  -->
                <li><a href="service.html"> 
                    <i class='bx bxs-briefcase'></i>
                    <span class="link-name">Service</span>
                </a></li>
                
                <!-- <li><a href="#">
                    <i class='bx bxs-group'></i>
                    <span class="link-name">Handyman</span>
                </a></li> -->
                <!-- <li><a href="#">
                    <i class='bx bxs-user'></i>
                    <span class="link-name">User</span>
                </a></li> -->
            </ul>
        </div>
    </nav>
    <section class="dashboard">
        <div class="top">
            <i class="uil uil-bars sidebar-toggle"></i>
            <div class="search-box">
                <i class="uil uil-search"></i>
                <input type="text" placeholder="Search here...">
            </div>
            <div class="username">
                <?php echo htmlspecialchars($name); ?>
            </div>
            <button><a href="adminlogout.php?username=<?php echo $name; ?>">Logout</a></button>
        </div> 

        <div class="dash-content">
            <div class="overview">
                <div class="title">
                    <i class='bx bxs-dashboard'></i>
                        <span class="text">Dashboard</span>
                </div>
                <div class="boxes">
                    <div class="box box1">
                        <i class='bx bxs-briefcase'></i>
                         <span class="text"><a href="mypage.html">Services</span></a>
                    </div>
                    <!-- <div class="box box2">
                        <i class='bx bxs-group'></i>
                        <span class="text">Worker</span>
                    </div>
                    <div class="box box3">
                        <i class='bx bxs-user'></i>
                        <span class="text">User</span>
                    </div> -->
                </div>
            </div>
    </section>
    <!-- <script src="script.js"></script> --> 
 </body>
 </html>