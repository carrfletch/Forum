    <?php 
    include "../header/homeheader.php";
    ?>

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
          <a class="nav-link js-scroll-trigger"  href="logout.php">Logout</a>

          </li>
        </ul>
      </div>
    </div>
  </nav>