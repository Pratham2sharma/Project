<?php

  session_start();
 

  $con = mysqli_connect('localhost','root','');

  mysqli_select_db($con, 'register');

  $username = $_POST['username'];
  $password = $_POST['password1'];

  $s = "SELECT * FROM registration WHERE username = '$username' && password1 = '$password' ";

  $result = mysqli_query($con,$s);

  $num = mysqli_num_rows($result); 
     
  if($num==1){
    header('location: index.php');
  }else{
    header('location: registration.php');
  }
?>