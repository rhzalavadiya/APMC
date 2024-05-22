<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
	<link rel="apple-touch-icon" href="assets/img/logo.jpg">
    <link rel="shortcut icon" type="image/x-icon" href="assets/img/logo.ico">
    <title>Dhanlaxmi Traders-Add Product </title>
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
                <h2 class="tm-block-title d-inline-block">Add Product</h2>
              </div>
            </div>
            <div class="row tm-edit-product-row">
              <div class="col-xl-6 col-lg-6 col-md-12">
                <form action="" class="tm-edit-product-form" enctype="multipart/form-data" method="POST">
                  <div class="form-group mb-3">
                    <label for="name">Product Name </label>
                    <input type="text" name="p_nm" class="form-control validate" required />
                  </div>
                  <div class="form-group mb-3">
                    <label for="description">Description</label>
                    <textarea class="form-control validate" rows="3" name="desc" required></textarea>
                  </div>
                  <div class="form-group mb-3">
                    <label for="category">Category</label> 
                    <select class="custom-select tm-select-accounts" name="cate">
                       <option selected>Select category</option>
                      <option value="pumpkin">Pumpkin</option>
                      <option value="grain">Grain</option>
                      <option value="oilseed">Oilseed</option>
                    </select>
                  </div>
                   <div class="form-group mb-3">
                    <label for="price">Product Price </label>
                    <input type="text" name="pri1" class="form-control validate" required />
                  </div>   
              </div>
              <div class="col-xl-6 col-lg-6 col-md-12 mx-auto mb-4">
                <div class="tm-product-img-dummy mx-auto">
                  <i class="fas fa-cloud-upload-alt tm-upload-icon" onclick="document.getElementById('fileInput').click();"></i>
                </div>
                <div class="custom-file mt-3 mb-3">
                  <input type="file" name="uf" class="btn btn-primary btn-block mx-auto" class="form-control"/>
                  <!--input type="button" class="btn btn-primary btn-block mx-auto" value="UPLOAD PRODUCT IMAGE" onclick="document.getElementById('fileInput').click();" />-->
                </div>
              </div>
              <div class="col-12">
                <input type="submit" name="add" class="btn btn-primary btn-block text-uppercase" value="Add Product Now"/>
              </div>
            </form>
            </div>
          </div>
        </div>
      </div>
    </div>
	<?php
	error_reporting(E_ERROR | E_PARSE);
 $nm=$_POST['p_nm'];
 $ds=$_POST['desc'];
 $ct=$_POST['cate'];
 $price=$_POST['pri1'];
 $image = $_FILES["uf"]["name"];
    $tempname = $_FILES["uf"]["tmp_name"];
   // $folder = "./image/".$image;
 echo $image;
 //echo $folder;
$con = mysqli_connect("localhost", "root", "", "APMC");
if(isset ($_POST['add']))
{
	 $sql ="INSERT INTO pro(pnm,des,cat,pri,img) VALUES('$nm','$ds','$ct',$price,'$image')";
	 mysqli_query($con, $sql);
	 if (move_uploaded_file($tempname,'./image/'.$_FILES["uf"]["name"])) 
	 {
        echo "<h3>  Image uploaded successfully!</h3>";
	 }
	else 
	{
        echo "<h3>  Failed to upload image!</h3>";
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
                    </div>
                </div>
            </div>
        </div>
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
