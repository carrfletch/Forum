<?php 
include("../dbconnection/connection.php");
$firstname = $lastname = $email = $username = $password = "";
$firstnameErr = $lastnameErr = $emailErr = $usernameErr = $passwordErr = "";


if(isset($_POST["btnRegister"])){

  if (empty($_POST["firstname"])) {
    $firstnameErr = "firstname Name is Required !";
  }elseif(strlen($_POST["firstname"])< 2) {
    $firstnameErr = "Your Firstname is to Short";
  }else{
    $firstname = $_POST["firstname"];
  }

  if (empty($_POST["lastname"])) {
    $lastnameErr = "Last Name is Required !";
  }elseif(strlen($_POST["lastname"])< 2) {
    $lastnameErr = "Buong pangalan Tanga kaba";
  }else{
    $lastname = $_POST["lastname"];
  }

  if(empty($_POST["email"])) {
    $emailErr = "Email is Required !" ;
  }elseif(!filter_var($_POST["email"] , FILTER_VALIDATE_EMAIL)){
    $emailErr = "invalid email format";
  }else{
    $email = $_POST["email"];
  }

  if(empty($_POST["username"])) {
    $usernameErr = "Username is required";
  }
  elseif(strlen($_POST["username"])< 2) {
    $usernameErr = "Username is too Short";
  }else {
    $username = $_POST["username"];
  }

  if(empty($_POST["password"])) {
    $passwordErr = "Password is required";
  }elseif(strlen($_POST["password"])< 2) {
    $passwordErr = "Your password is too short";
  }else{
    $password = $_POST["password"];
  }


  if($firstname && $lastname && $email && $username && $password )  {
    
      $sql = "INSERT INTO users (firstname,lastname,email,username,password)
          VALUES ('$firstname','$lastname','$email','$username','$password')";
      mysqli_query($conn, $sql);


  }
    
}







?>