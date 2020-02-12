
<?php
include "../dbconnection/connection.php";
session_start();
if(isset($_SESSION["id"])) {


  header("Location:../userdashboard/profile.php");
}

$username = $password = "";
$usernameErr = $passwordErr = "";

if (isset($_POST['btnlogin'])) {
    if (empty($_POST['username'])) {
      $usernameErr = "Username is required!";     
    }else {
     $username = $_POST['username'];
    }
  
    if (empty($_POST['password'])) {
      $passwordErr = "Password is Required!"; 
    }
    else {
      $password = $_POST['password'];
    }
}

    if ($username && $password) {
      $check_username = mysqli_query($conn , "SELECT * FROM users Where username='$username' AND password='$password'");
      $check_username_row = mysqli_num_rows($check_username);

      if ($check_username_row > 0) {
        $row = mysqli_fetch_assoc($check_username);
        $id = $row['id'];
        $username = $row['username'];
        $dbpassword = $row['password'];

      if ($password == $dbpassword) {
          $_SESSION['id'] = $id;
          header("Location:../userdashboard/profile.php");
        }

      }else {
        $usernameErr = "Username is not Registered!";
        $passwordErr = "Password is not Registered!";

      }
    }

 ?>