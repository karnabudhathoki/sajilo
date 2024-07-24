<?php
    $hostname="localhost";
    $username="root";
    $password="";
    $db_name="sajilo_upaya";

    $db_connect=mysqli_connect($hostname,$username,$password,$db_name);
    if ($db_connect->connect_error) {
        die("Connection failed: " . $db_connect->connect_error);
      }
      // echo "Connected successfully";

    
?>