<?php

  session_start();
  header('location: cart.php');

  $con = mysqli_connect('localhost','root','');

  mysqli_select_db($con, 'shoppee');

  $fname = $_POST['Fname'];
  $email = $_POST['email'];
  $address = $_POST['Address1'];
  $city = $_POST['city'];
  $state = $_POST['state1'];
  $zipcode = $_POST['zip_code'];
  $cardname = $_POST['card_name'];
  $creditnumber = $_POST['credit_card_number'];
  $exp_month = $_POST['expiry_month'];
  $exp_year = $_POST['expiry_year'];
  $cvv = $_POST['cvv'];


  $s = "SELECT * FROM details WHERE email = '$email' ";

  $result = mysqli_query($con,$s);

  $num = mysqli_num_rows($result);

  if($num==1){
      echo"email aleready Exist";
  }else{
      $reg ="INSERT INTO details(Fname, email ,Address1 ,city ,state1 ,zip_code ,card_name ,credit_card_number,expiry_month ,expiry_year ,cvv) VALUES('$fname' , '$email' , '$address' , '$city' , '$state' , '$zipcode' , '$cardname' , '$creditnumber' , '$exp_month' , '$exp_year' , '$cvv')";
      mysqli_query($con, $reg);
      
  }
?>