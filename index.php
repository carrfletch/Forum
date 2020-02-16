<!DOCTYPE html>
<html>
<head>
  <title>Index</title>
</head>

<?php 

include "header/header.php";
session_start();
include "dbconnection/connection.php";

if(isset($_SESSION["id"])) {
    
    header("location:userdashboard/profile.php");

}
?>

<body>

	<nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top" id="mainNav">
    <div class="container">
      <a class="navbar-brand js-scroll-trigger" href="#page-top">KSA</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarResponsive">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item">
            <form method="GET" action="" class="input-group" style="padding-right: 10px">


              <input type="text" name="Search" class="form-control" placeholder="Search for..." >

              <span class="input-group-btn">
                <button type="submit" name="searchBtn" class="btn btn-secondary" type="button">Go!</button>
              </span>
            </form>
          </li>
          <li class="nav-item">
            <a class="nav-link js-scroll-trigger" href="loginsystem/signup.php">Sign Up</a>
          </li>
          <li>
          <a class="nav-link js-scroll-trigger"  href="loginsystem/login.php">Log In</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>

  <header class="bg-primary text-white">
    <div class="container text-center">
      <h1>Welcome to KSA Forum</h1>
      <p class="lead">A place of discussion for KAL Skills Akademie Students</p>
    </div>
  </header>
<?php include "header/footer.php"; ?>

</body>
</html>