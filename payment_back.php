<?php

  session_start();
  header('location: cart.php');

  $con = mysqli_connect('localhost','root','');

  mysqli_select_db($con, 'payment');

  $name = $_POST['name'];
  $email = $_POST['email'];
  $address = $_POST['Address1'];
  $city = $_POST['city'];
  $state = $_POST['state1'];
  $zipcode = $_POST['zip code'];
  


  $s = "SELECT * FROM details WHERE email = '$email' ";

  $result = mysqli_query($con,$s);

  $num = mysqli_num_rows($result);

  if($num==1){
      echo"email aleready Exist";
  }else{
      $reg ="INSERT INTO details(Fname, email ,Address1 ,city ,state1 ,zip code ) VALUES('$fname' , '$email' , '$address' , '$city' , '$state' , '$zipcode')";
      mysqli_query($con, $reg);
      
  }
?>