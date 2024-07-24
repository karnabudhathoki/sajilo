<!DOCTYPE html>
<?php 
  include "connection.php";
  $sql = "SELECT name, image, details FROM services";
  $result = $db_connect->query($sql);

  if ($result->num_rows > 0) {
      // Output data for each row
      
  } else {
      echo "No services found.";
  }

?>
<html lang="en">
<head>
    <link rel="stylesheet" href="display.css"/>
    <title>Document</title>
</head>
<body>
    <div class="service-contener">
        <h2>Services</h2>
        <div class="container-row">
          <?php
            while($row = $result->fetch_assoc()) {
              echo <<<service
                <div class="row"> 
                  <img src="../Admin/{$row["image"]}" alt="{$row["name"]}">
                  <h4>{$row["name"]}</h4>
                  <textarea>{$row['details']}</textarea>
                  <a href="" class="btn">See More</a>
                </div>
              service;
            } 
          ?>
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
</body>
</html>