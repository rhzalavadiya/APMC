<?php
session_start();

$con = mysqli_connect('localhost', 'root' );
$db = mysqli_select_db($con, 'APMC');
if(isset($_POST['submit']))
{
	$unm = $_POST['unm'];
	$pwd = $_POST['pwd'];
	$sql = " select * from  login where unm='$unm' and pwd='$pwd' ";
	$query = mysqli_query($con,$sql);

	$row = mysqli_num_rows($query);
		if($row == 1)
		{
			$_SESSION['unm'] = $unm;
			
			header('location:products.php');
		}
		else
		{
			echo "login failed";
			header('location:login.php');
		}
}
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
	<link rel="apple-touch-icon" href="assets/img/logo.jpg">
    <link rel="shortcut icon" type="image/x-icon" href="assets/img/logo.ico">
    <title>Dhanlaxmi Traders-Login Page </title>
    <link
      rel="stylesheet"
      href="https://fonts.googleapis.com/css?family=Roboto:400,700"
    />
    <!-- https://fonts.google.com/specimen/Open+Sans -->
    <link rel="stylesheet" href="css/fontawesome.min.css" />
    <!-- https://fontawesome.com/ -->
    <link rel="stylesheet" href="css/bootstrap.min.css" />
    <!-- https://getbootstrap.com/ -->
    <link rel="stylesheet" href="css/templatemo-style.css">
    <!--
	Product Admin CSS Template
	https://templatemo.com/tm-524-product-admin
	-->
  </head>

  <body>
    <div>
      <nav class="navbar navbar-expand-xl">
        <div class="container h-100">
          <a class="navbar-brand" href="admin.php">
            <h1 class="tm-site-title mb-0">Dhanlaxmi Traders Admin</h1>
          </a>
          <button
            class="navbar-toggler ml-auto mr-0"
            type="button"
            data-toggle="collapse"
            data-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent"
            aria-expanded="false"
            aria-label="Toggle navigation"
          >
            <i class="fas fa-bars tm-nav-icon"></i>
          </button>

        </div>
      </nav>
    </div>

    <div class="container tm-mt-big tm-mb-big">
      <div class="row">
        <div class="col-12 mx-auto tm-login-col">
          <div class="tm-bg-primary-dark tm-block tm-block-h-auto">
            <div class="row">
              <div class="col-12 text-center">
                <h2 class="tm-block-title mb-4">Welcome to Login</h2>
			   <img src="assets/img/login.jpg" height="140px" width="140px"></img>
              </div>
            </div><br>
            <div class="row mt-2">
              <div class="col-12">
                <form action="login.php" method="post" class="tm-login-form">
                  <div class="form-group">
                    <label for="username">User Name</label>
                    <input
                      name="unm"
                      type="text"
                      class="form-control validate"
                      id="unm"
                     value=""
                      required
                    />
                  </div>
                  <div class="form-group mt-3">
                    <label for="Password">Password</label>
                    <input
                      name="pwd"
                      type="password"
                      class="form-control validate"
                      id="pwd"
                      value=""
                      required
                    />
                  </div>
                  <div class="form-group mt-4">
                    <input
					type="submit"
					name="submit"
                    value="Login"
                    class="btn btn-primary btn-block text-uppercase"/>
                  </div>
                 <!-- <button class="mt-5 btn btn-primary btn-block text-uppercase" >
                    <a class="fc" href="http://localhost/isha/index.php">
					Cancel
					</a>
                  </button>-->
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <footer class="tm-footer row tm-mt-small">
      <div class="col-12 font-weight-light">
       <!-- <p class="text-center text-white mb-0 px-4 small">
          Copyright &copy; <b>2018</b> All rights reserved. 
          
          Design: <a rel="nofollow noopener" href="https://templatemo.com" class="tm-footer-link">Template Mo</a>
        </p>-->
      </div>
    </footer>
    <script src="js/jquery-3.3.1.min.js"></script>
    <!-- https://jquery.com/download/ -->
    <script src="js/bootstrap.min.js"></script>
    <!-- https://getbootstrap.com/ -->
  </body>
</html>
