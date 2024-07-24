<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Login form</title>
    <link rel="stylesheet" href="login.css" />
    <script type="text/javascript" src="index.js" defer></script>
  </head>
  <body>
    <div class="main">
      <h2>Admin</h2>
        <label for="first">
        Username:
        </label>
        <input type="text"
          id="first"
          name="first"
          placeholder="Enter your Username" required>
  
        <label for="password">
          Password:
        </label>
        <input type="password"
          id="password"
          name="password"
          placeholder="Enter your Password" required>
  
        <div class="wrap">
          <button name="submit" onclick="nextwindow()">Login</button>
        </div>
      </form>
      <?php
 
 if(isset($_POST['submit']))
 {
   $count=0;
   $res=mysqli_query($db,"SELECT * FROM `admin` WHERE username='$_POST[username]' && password='$_POST[password]';");
   mysqli_fetch_assoc($res);
   $count=mysqli_num_rows($res);

   if($count==0)
   {
     ?>
           <!--
           <script type="text/javascript">
             alert("The username and password doesn't match.");
           </script> 
           -->
       <div class="alert alert-danger" style="width: 600px; margin-left: 370px; background-color: #de1313; color: white">
         <strong>The username and password doesn't match</strong>
       </div>    
     <?php
   }
   else
   {
     /*--if username and image matches */
     $_SESSION['login_user'] = $_POST['username']; 

     ?>
       <script type="text/javascript">
         window.location="display.html"
       </script>
     <?php
   }
 }

?>
    </div>
  </body>
  </html>