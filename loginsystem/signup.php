<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>

<?php 
include "../header/header.php"; 
include "actionsignup.php";

?>


<body class="loginSignupbody">


<div id="login">
        <h1 class="text-center text-white pt-5">Sign-Up</h1>
        <div class="container">
            <div id="login-row" class="row justify-content-center align-items-center align-content-center">
                <div id="login-column" class="col-md-5">
                    <div id="login-box" class="col-md-11" style="height: 500px;margin-top: 0px">
                        <form id="login-form" class="form" action="" method="post">
                            <!-- Display validation Error Here -->
                          



                            <div class="form-group">
                                <label for="firstname" class="text-info">First Name:</label><br>
                                <input type="text" name="firstname" id="firstname" class="form-control" value="<?php echo $firstname; ?>">
                            </div> <span class="error"><?php echo $firstnameErr; ?></span>

                            <div class="form-group">
                                <label for="lastname" class="text-info">Last Name:</label><br>
                                <input type="text" name="lastname" id="lastname" class="form-control" value="<?php echo $lastname; ?>">
                            </div> <span class="error"><?php echo $lastnameErr; ?></span>

                            <div class="form-group">
                                <label for="email" class="text-info">Email:</label><br>
                                <input type="text" name="email" id="email" class="form-control" value="<?php echo $email; ?>">
                            </div>  <span class="error"><?php echo $emailErr; ?></span>

                            <div class="form-group">
                                <label for="username" class="text-info">Username:</label><br>
                                <input type="text" name="username" id="username" class="form-control" value="<?php echo $username; ?>">
                            </div> <span class="error"><?php echo $usernameErr; ?></span>

                            <div class="form-group">
                                <label for="password" class="text-info">Password:</label><br>
                                <input type="password" name="password" id="password" class="form-control" value="<?php echo $password; ?>">
                            </div> <span class="error"><?php echo $passwordErr; ?></span>

                            <div class="form-group">
                                <input type="submit" name="btnRegister" class="btn btn-info btn-md" value="Register"><br>
                                <p>Are You Already Registered?  <a href="login.php" class="text-info">Sign-in</a> </p>
                            </div>
                            
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>