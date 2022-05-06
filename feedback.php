<?php

  session_start();
  header('location: index.php');

  $con = mysqli_connect('localhost','root','');

  mysqli_select_db($con, 'feedback');

  $username = $_POST['username'];
  $description = $_POST['Description1'];
  

  $s = "SELECT * FROM review WHERE username = '$username' ";

  $result = mysqli_query($con,$s);

  $num = mysqli_num_rows($result);

  if($num==1){
      echo"Username aleready taken";
  }else{
      $reg ="INSERT INTO review(username , Description1) VALUES('$username' , '$description')";
      mysqli_query($con, $reg);
      
  }
?>