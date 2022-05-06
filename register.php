<?php

  session_start();
  header('location: registration.php');

  $con = mysqli_connect('localhost','root','');

  mysqli_select_db($con, 'register');

  $username = $_POST['username'];
  $email = $_POST['email'];
  $password = $_POST['password1'];

  $s = "SELECT * FROM registration WHERE username = '$username' ";

  $result = mysqli_query($con,$s);

  $num = mysqli_num_rows($result);

  if($num==1){
      echo"Username aleready taken";
  }else{
      $reg ="INSERT INTO registration(username , email , password1) VALUES('$username' , '$email' , '$password')";
      mysqli_query($con, $reg);
      echo "registration Successfull....";
  }
?>