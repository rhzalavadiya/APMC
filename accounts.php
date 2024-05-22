
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
<link rel="apple-touch-icon" href="assets/img/logo.jpg">
    <link rel="shortcut icon" type="image/x-icon" href="assets/img/logo.ico">
    <title>Dhanlaxmi Traders-Accounts </title>
    <link
      rel="stylesheet"
      href="https://fonts.googleapis.com/css?family=Roboto:400,700"
    />
    <!-- https://fonts.google.com/specimen/Roboto -->
    <link rel="stylesheet" href="css/fontawesome.min.css" />
    <!-- https://fontawesome.com/ -->
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

  <body id="reportsPage">
    <div class="" id="home">
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
                <a class="nav-link" href="products.php">
                  <i class="fas fa-shopping-cart"></i> Products
                </a>
              </li>

              <li class="nav-item">
                <a class="nav-link active" href="accounts.php">
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
      <div class="container mt-5">
        <div class="row tm-content-row">
          <div class="tm-block-col tm-col-account-settings">
            <div class="tm-bg-primary-dark tm-block tm-block-settings">
              <h2 class="tm-block-title">Account Settings</h2>
			   <form action="" class="tm-signup-form row" enctype="multipart/form-data" method="POST">
                <div class="form-group col-lg-6">
                  <label for="name">User Name</label>
                  <input id="name" name="nm" type="text" class="form-control validate"/>
                </div>
                <div class="form-group col-lg-6">
                  <label for="password">Password</label>
                  <input id="password" name="pass" type="password" class="form-control validate" />
                </div>
                <div class="form-group col-lg-6">
                  <label for="password2">Re-enter Password</label>
                  <input id="password2" name="repas" type="password" class="form-control validate" />
                </div>
                
                <div class="form-group col-lg-6">
                  <label class="tm-hide-sm">&nbsp;</label>
                  <input type="submit" class="btn btn-primary btn-block text-uppercase" name="add" value="Submit"/>
                </div>
                <div class="col-12">
                  <input type="submit" class="btn btn-primary btn-block text-uppercase" name="del" value="Change Password"/>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
	  <?php
	  error_reporting(E_ERROR | E_PARSE);
 $anm=$_POST['nm'];
 $pas=$_POST['pass'];
 $rep=$_POST['repas'];
 $con = mysqli_connect("localhost", "root", "", "APMC");
 if(isset ($_POST['add']))
 {
	 $sql ="INSERT INTO login(unm,pwd,rep) VALUES('$anm','$pas','$rep')";
	 $r=mysqli_query($con, $sql);
	 if($r>0)
	 {
		echo "Insert Sucessfully";
	 }
	 else
	 {
		echo "Fail";
	 } 
}
if(isset ($_POST['del']))
 {
	 $sql ="update login set pwd='$pas',rep='$rep' where unm='$anm'";
	 $r=mysqli_query($con, $sql);
	 if($r>0)
	 {
		echo "Password Can be Upadted";
	 }
	 else
	 {
		echo "Password Can't be Upadted";
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
                </div> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            </div>

          
        </div>

        <div class="w-100 bg-black py-3">
            <div class="container">
                <div class="row pt-2">
                    <div class="col-12">
                    </div>
                </div>
            </div>
        </div>
        </footer>
    </div>

    <script src="js/jquery-3.3.1.min.js"></script>
    <!-- https://jquery.com/download/ -->
    <script src="js/bootstrap.min.js"></script>
    <!-- https://getbootstrap.com/ -->
  </body>
</html>
