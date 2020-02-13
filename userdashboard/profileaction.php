<?php
include "../dbconnection/connection.php";

$result_posts =mysqli_query($conn, "SELECT * FROM `posts` INNER JOIN users ON posts.user_id = users.id ORDER BY post_id DESC ");
?>