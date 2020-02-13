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
     header("Location:../userdashboard/profile.php");

}

?>



<!DOCTYPE html>
<html>
<head>
    <title>Home Page</title>
</head>
<?php include "../header/header.php"; ?>
<body class="profilebody">


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
            <a class="nav-link js-scroll-trigger" href="profile.php"><?php echo $dbfirstname ?></a>
          </li>
          <li>
          <a class="nav-link js-scroll-trigger"  href="home.php">Home</a>
          </li>
          <li>
          <a class="nav-link js-scroll-trigger"  href="loginsystem/login.php">Setting</a>


          </li>
          <a class="nav-link js-scroll-trigger"  href="../index.php">Logout</a>

          </li>
        </ul>
      </div>
    </div>
  </nav>


    <div class="row py-5 px-4">
    <div class="col-xl-8 col-md-6 col-sm-10 mx-auto">

        <!-- Profile widget -->
        
                    <form method="post"> 

                        <div class="bg-white shadow rounded overflow-hidden">
            <div class="px-4 pt-0 pb-4 bg-dark">
                <div class="media align-items-end profile-header">
                    <div class="profile mr-3"><img src="https://d19m59y37dris4.cloudfront.net/university/1-1-1/img/teacher-4.jpg" alt="..." width="130" class="rounded mb-2 img-thumbnail">
                        <div>
                            <button> <a href="#" class="btn btn-dark btn-sm btn-block">Change Profile</a></button>
                        </div>
                    </form>
                    </div>
                    <div class="media-body mb-5 text-white">
                        <h4 class="mt-0 mb-0"><?php echo $dbfirstname . $dblastname ?></h4>
                        <p class="small mb-4"> <i class="fa fa-map-marker mr-2"></i><?php echo $dbfirstname ?></p>
                    </div>
                </div>
            </div>

            <div class="bg-light p-4 d-flex justify-content-end text-center">
                <ul class="list-inline mb-0">
                    <li class="list-inline-item">
                        <h5 class="font-weight-bold mb-0 d-block">241</h5><small class="text-muted"> <i class="fa fa-picture-o mr-1"></i>Photos</small>
                    </li>
                    <li class="list-inline-item">
                        <h5 class="font-weight-bold mb-0 d-block">84K</h5><small class="text-muted"> <i class="fa fa-user-circle-o mr-1"></i>Followers</small>
                    </li>
                </ul>
            </div>

            <div class="py-4 px-4">
                <div class="d-flex align-items-center justify-content-between mb-3">
                    <h5 class="mb-0">Recent photos</h5><a href="#" class="btn btn-link text-muted">Show all</a>
                </div>
                <div class="row">
                    <div class="col-lg-4 mb-2 pr-lg-1"><img src="https://res.cloudinary.com/mhmd/image/upload/v1556294928/nicole-honeywill-546848-unsplash_ymprvp.jpg" alt="" class="img-fluid rounded shadow-sm"></div>
                    <div class="col-lg-4 mb-2 pl-lg-1"><img src="https://res.cloudinary.com/mhmd/image/upload/v1556294927/dose-juice-1184444-unsplash_bmbutn.jpg" alt="" class="img-fluid rounded shadow-sm"></div>

                    <div class="col-lg-4 mb-2 pl-lg-1"><img src="https://res.cloudinary.com/mhmd/image/upload/v1556294927/dose-juice-1184444-unsplash_bmbutn.jpg" alt="" class="img-fluid rounded shadow-sm"></div>

                    <div class="col-lg-6 pr-lg-1 mb-2"><img src="https://res.cloudinary.com/mhmd/image/upload/v1556294926/cody-davis-253925-unsplash_hsetv7.jpg" alt="" class="img-fluid rounded shadow-sm"></div>
                    <div class="col-lg-6 pl-lg-1"><img src="https://res.cloudinary.com/mhmd/image/upload/v1556294928/tim-foster-734470-unsplash_xqde00.jpg" alt="" class="img-fluid rounded shadow-sm"></div>
                </div>


                <?php 
                include "../dbconnection/connection.php";
                $result_posts = mysqli_query($conn, "SELECT * FROM posts INNER JOIN users ON posts.post_id = users.id ORDER BY post_id DESC ");

                while ($row = mysqli_fetch_assoc($result_posts)) 
                    
                      

                   
                { ?>
                
                <div class="py-4">
                    <h5 class="mb-3">Recent posts</h5>
                    <div class="p-4 bg-light rounded shadow-sm">
                      <h5 class="mb-3"> <?php echo $row['firstname'] ?></h5>
                        <p class="font-italic mb-0"><?php echo $row['post_description'];?> </p>
                        <ul class="list-inline small text-muted mt-3 mb-0">
                            <li class="list-inline-item"><i class="fa fa-comment-o mr-2"></i>12 Comments</li>
                            <li class="list-inline-item"><i class="fa fa-heart-o mr-2"></i>200 Likes</li>
                        </ul>
                    </div>
                </div>
                


                <?php } 
                   

                ?>
                
            </div>
           
        </div><!-- End profile widget -->

    </div>
    </div>
</body>
</html>