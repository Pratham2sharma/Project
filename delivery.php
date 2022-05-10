<?php

  session_start();
  header('location: receipt.php');

  $con = mysqli_connect('localhost','root','');

  $db = mysqli_select_db($con, 'shoppee');

  $firstname = $_POST['Fname'];
  $lastname = $_POST['Lname'];
  $City = $_POST['City'];
  $zipcode = $_POST['zip_code'];
  $address = $_POST['Address1'];
  $email = $_POST['email'];

  $s = "SELECT * FROM delivery WHERE email = '$email' ";

  $result = mysqli_query($con,$s);

  $num = mysqli_num_rows($result);

  if($num==1){
      echo"Email already taken";
  }else{
      $reg ="INSERT INTO delivery(Fname , Lname , City , zip_code , Address1 , email) VALUES('$firstname' , '$lastname' , '$City' , '$zipcode' , '$address' , '$email')";
      mysqli_query($con, $reg);
      echo "Order Placed";
  }
?>