<?php 
session_start();
include "../dbconnection/connection.php";

	$id =  $_SESSION["id"];
	$user_md5 = md5($id);

function rand_a($length = 50) {

	$str = "abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTWXYZ01234567890";
	$shuffled = substr( str_shuffle( $str ), 0, $length );
	return $shuffled;
}
$shuffled_logout= rand_a(57);
unset($_SESSION['id']);
session_unset();
session_destroy();
echo "Logging Out ... Please Wait ....";
header("location:../index.php?logout=$shuffled_logout&v_1=$user_md5");
exit();
?>