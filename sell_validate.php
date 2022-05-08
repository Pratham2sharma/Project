<?php

  session_start();
  header('location: index.php');

  $con = mysqli_connect('localhost','root','');

  mysqli_select_db($con, 'sell_here');

  $footwearname = $_POST['footwear_name'];
  $size = $_POST['Size'];
  $color = $_POST['Color'];
  $setprice = $_POST['set_price'];
  $description = $_POST['description2'];
  $images = $_POST['Pics'];

   $reg ="INSERT INTO sell_details(footwear_name ,Size , Color, set_price ,description2, Pics) VALUES('$footwearname' , '$size' , '$color' , '$setprice' , '$description' , '$images')";
   mysqli_query($con, $reg);
   echo "Form Submitted";
  
?>