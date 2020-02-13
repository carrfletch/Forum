<?php
include "../dbconnection/connection.php";

$result_posts =mysqli_query($conn, "SELECT * FROM `posts` INNER JOIN users ON posts.id = users.post_id ORDER BY post_id DESC ");
?>