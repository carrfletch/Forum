<?php 
session_start();

if (isset($_SESSION["id"])) {
    include "../dbconnection/connection.php";
    $id = $_SESSION["id"];
    $get_record = mysqli_query($conn , "SELECT * FROM users Where id='$id' ");
    $row = mysqli_fetch_assoc($get_record);
    $dbfirstname = $row['firstname'];
    $dblastname = $row['lastname'];
}else {
     header("Location:../index.php");

}
