<?php
session_start();
if (isset($_SESSION['fullname'])){
  $fullname=$_SESSION['fullname'] ;
}
if (isset($_GET['fullname'])){
$fullname = $_GET['fullname'];
}
$email = $_SESSION['email'];
?>
<!DOCTYPE html>
<html>
<head>
     
    <title>Sajilo Upaya</title>
    <link rel="stylesheet" href="display.css"/>
    <link rel="stylesheet" href="viewpage.css"/>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
 <body>
  <div class="Upaya">
          <nav>
            <div><h2 class="logo">Sajilo<span>Upaya</span></h2></div>
            <div>
              <ul> 
                <li><a href="#">Home</a></li>
                <li><a href="about.html">About Us</a></li>
                <li><a href="service.html">Services</a></li>
                <li><a href="contact.html">Contact</a></li>
                <li><a href=""><?php echo htmlspecialchars($fullname); ?> &#x25BE;</a>
                    <ul class="dropdown">
                        <li><a href="updateform.php?email=<?php echo htmlspecialchars($email); ?>">update</a></li>
                        <li><a href="logout.php">logout</a></li>
                    </ul>
                </li>
                <!-- <li><a href="login.php"><i class="fa-solid fa-right-to-bracket"></i></a></li>
                <li><a href="Register.php"> <i class="fa-solid fa-user"></i></a></li> -->
             </ul>
            </div>
          </nav> 
            <div class="Content">
              <img src="handyman.jpg" >
            </div>
          <!--FOR ABOUT SECTION-->
          <div class="flex-contener">
            <div class="flex-1">
              <img src="about3.png" >
            </div>
            <div class="flex-2">
              <h2 >Welcome</h2>
              <h3>Makes your home happier </h3>
              <p>sajilo Upaya Provide a one-step home repair 
                and maintenance solution by a team of dedication
                and wel-trained electricians, plumbers
                carpenters, cleaner and painters. Through SajiloUpaya, the customers will get access 
                to a wide range of handymaen who could provide each and every repair and maintenence service at their home. 
                We provide various services at resonable rates.</p>
                <a href="about.html"><button class="button">Learn More</button></a>
            </div>
          </div>
          <div class="working">
            <div class="work1"><h2>How we work</h2></div>
           <div class="work2">
            <div class="icn">
              <i class="fa-solid fa-phone-volume"></i>
              <h4>Register</h4>
              <p>Schedule your service request</p>
            </div>
            <div class="icn">
              <i class="fa-sharp fa-regular fa-clock"></i>
              <h4>On Time Service</h4>
            <p>The technician reach your premises at the<br>given time to attend the repair job</p>
            </div>
            <div class="icn">  <i class="fa-solid fa-house"></i>
              <h4>Problem Solve!</h4>
              <p>We make happy homes</p></div>
           </div>
          </div>
            <!--FOR SERVICE SECTION-->
            <div class="service-contener">
              <h2>Services</h2>
              <div class="container-row">
                <div class="row"> 
                  <img src="painter.jpg">
                  <h4>Painter</h4>
                  <a href="" class="btn">See More</a>
                </div>
                <div class="row">
                  <img src="housekeeping.jpg">
                  <h4>HouseKeeping</h4>
                  <a href="" class="btn">See More</a> 
                </div>
                <div class="row">
                  <img src="electrician.jpeg">
                  <h4>electrician</h4>
                  <a href="" class="btn">See More</a> 
                </div>
                <div class="row">
                  <img src="plumber.jpg">
                  <h4>Plumber</h4>
                  <a href="" class="btn">See More</a> 
                </div>
              </div>
              <a href="service.html" ><button class="surv">More Services</button></a>
            </div>
            <!--for contact form section-->
             <!-- banner section  -->
          <section class="banner">
              <h1>
                Talk to us
              </h1>
            </section>

            <section class="contact-form">
              <div class="form-container">
                  <h2>Send Us Message</h2>
                  <form action="display.php" method="POST">
       
                      <label for="name">Name: </label>
                      <input type="text" id="name" name="name" required>
       
                      <label for="email">Email: </label>
                      <input type="email" id="email" name="email" required>
       
                      <label for="phone">Phone: </label>
                      <input type="tel" id="phone" name="phone">
       
                      <label for="message">Message: </label>
                      <textarea id="message" name="message" rows="4" required></textarea>
                       
       
                      <button type="submit" class="submit-button">Submit</button>
                  </form>
              </div>
          </section>

            <!--FOR FOOTER SECTION-->  
      <div class="footer">
        <h2>copyright@sajilo upaya 2080</h2>
        
      </div>
  </div>
 </body>
</html>