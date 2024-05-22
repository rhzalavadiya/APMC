<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
	<link rel="apple-touch-icon" href="assets/img/apple-icon.png">
    <link rel="shortcut icon" type="image/x-icon" href="assets/img/logo.ico">
    <title>Dhanlaxmi Traders-Add Category </title>
    <link
      rel="stylesheet"
      href="https://fonts.googleapis.com/css?family=Roboto:400,700"
    />
    <!-- https://fonts.google.com/specimen/Roboto -->
    <link rel="stylesheet" href="css/fontawesome.min.css" />
    <!-- https://fontawesome.com/ -->
    <link rel="stylesheet" href="jquery-ui-datepicker/jquery-ui.min.css" type="text/css" />
    <!-- http://api.jqueryui.com/datepicker/ -->
    <link rel="stylesheet" href="css/bootstrap.min.css" />
    <!-- https://getbootstrap.com/ -->
    <link rel="stylesheet" href="css/templatemo-style.css">
    <!--
	Product Admin CSS Template
	https://templatemo.com/tm-524-product-admin
	-->
	<style>
	a
	{
		color:white;
	}
	</style>
  </head>

  <body>
    <nav class="navbar navbar-expand-xl">
      <div class="container h-100">
        <a class="navbar-brand" href="admin.php">
          <h1 class="tm-site-title mb-0">Product Admin</h1>
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

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav mx-auto h-100">
          
            <li class="nav-item">
              <a class="nav-link active" href="products.php">
                <i class="fas fa-shopping-cart"></i> Products
              </a>
            </li>

            <li class="nav-item">
              <a class="nav-link" href="accounts.php">
                <i class="far fa-user"></i> Accounts
              </a>
            </li>
           
          </ul>
          <ul class="navbar-nav">
            <li class="nav-item">
              <a class="nav-link d-block" href="login.php">
                Admin, <b>Logout</b>
              </a>
            </li>
          </ul>
        </div>
      </div>
    </nav>
    <div class="container tm-mt-big tm-mb-big">
      <div class="row">
        <div class="col-xl-9 col-lg-10 col-md-12 col-sm-12 mx-auto">
          <div class="tm-bg-primary-dark tm-block tm-block-h-auto">
            <div class="row">
              <div class="col-12">
                <h2 class="tm-block-title d-inline-block">Add Category</h2>
              </div>
            </div>
            <div class="row tm-edit-product-row">
              <div class="col-xl-6 col-lg-6 col-md-12">
                <form action="" class="tm-edit-product-form" enctype="multipart/form-data" method="POST">
                  <div class="form-group mb-3">
                    <label for="name">Category Name </label>
                    <input type="text" name="c_nm" class="form-control validate" required />
                  </div>
              <div class="col-12">
                <input type="submit" name="add" class="btn btn-primary btn-block text-uppercase" value="Add Category Now"/>
              </div>
            </form>
            </div>
          </div>
        </div>
      </div>
    </div>
	<?php
	error_reporting(E_ERROR | E_PARSE);
 $nm=$_POST['c_nm'];
$con = mysqli_connect("localhost", "root", "", "APMC");
if(isset ($_POST['add']))
{
	 $sql ="INSERT INTO catg(cnm) VALUES('$nm')";
	 $r=mysqli_query($con, $sql);
	 if ($r>0) 
	 {
        echo "<h3>  Insert successfully!</h3>";
    } 
	else 
	{
        echo "<h3>fail</h3>";
    }
}
?>
    <!-- Start Footer -->
   
        <footer class="tm-footer row tm-mt-small">
            <div class="col-12 font-weight-light" width="100%">
			 <div class="container">
            <div class="row pt-2">
                <div class="col-md-4 pt-5">
                    <h2 class="h2 text-light border-bottom pb-3 border-light">Products</h2>
                    <ul class="list-unstyled text-light footer-link-list">
                       <li><a class="text-decoration-none" href="wheat.php">wheat</a></li>
                        <li><a class="text-decoration-none" href="indianpea.php">Indian pea</a></li>
                        <li><a class="text-decoration-none" href="mung.php">Mung</a></li>
                        <li><a class="text-decoration-none" href="blackgram.php">Black Gram</a></li>
                        <li><a class="text-decoration-none" href="peanut.php">Peanut</a></li>
                        <li><a class="text-decoration-none" href="sesame.php">Sesame</a></li>
                        <li><a class="text-decoration-none" href="corn.php">Corn</a></li>
						<li><a class="text-decoration-none" href="soybean.php">Soybean</a></li>
						<li><a class="text-decoration-none" href="millet.php">Millet</a></li>
						
                    </ul>
                </div>
                  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                <div class="col-md-4 pt-5">
                    <h2 class="h2 text-light border-bottom pb-3 border-light">Quick Links</h2>
                    <ul class="list-unstyled text-light footer-link-list">
                        <li><a class="text-decoration-none" href="index.php">Home</a></li>
                        <li><a class="text-decoration-none" href="about.php">About Us</a></li>
                        <li><a class="text-decoration-none" href="contact.php">Shop Locations</a></li>
                       <!-- <li><a class="text-decoration-none" href="#">FAQs</a></li>-->
                        <li><a class="text-decoration-none" href="shop.php">Crop</a></li>
						<li><a class="text-decoration-none" href="products.php">Product</a></li>
                    </ul>
                </div>
 &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            </div>

          
        </div>

        <div class="w-100 bg-black py-3">
            <div class="container">
                <div class="row pt-2">
                    <div class="col-12">
                      <!--  <p class="text-left text-light">
                            Copyright &copy; 2021 Company Name 
                            | Designed by <a rel="sponsored" href="https://templatemo.com" target="_blank">TemplateMo</a>
                        </p>-->
                    </div>
                </div>
            </div>
        </div>
                <!--<p class="text-center text-white mb-0 px-4 small">
                    Copyright &copy; <b>2018</b> All rights reserved. 
                    
                    Design: <a rel="nofollow noopener" href="https://templatemo.com" class="tm-footer-link">Template Mo</a>
                </p>-->
          
        </footer>

    <script src="js/jquery-3.3.1.min.js"></script>
    <!-- https://jquery.com/download/ -->
    <script src="jquery-ui-datepicker/jquery-ui.min.js"></script>
    <!-- https://jqueryui.com/download/ -->
    <script src="js/bootstrap.min.js"></script>
    <!-- https://getbootstrap.com/ -->
    <script>
      $(function() {
        $("#expire_date").datepicker();
      });
    </script>
	
  </body>
</html>
