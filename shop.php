<?php
    include('admin/include/config.php');
?>

<!DOCTYPE html>
<html lang="en" dir="ltr">


<!-- Mirrored from metropolitanhost.com/themes/templatemoster/html/masala/shop.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 05 Aug 2022 05:57:37 GMT -->
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Shree Aai Foods - Shop</title>

  <!-- Vendor Stylesheets -->
  <link rel="stylesheet" href="assets/css/plugins/bootstrap.min.css">
  <link rel="stylesheet" href="assets/css/plugins/animate.min.css">
  <link rel="stylesheet" href="assets/css/plugins/magnific-popup.css">
  <link rel="stylesheet" href="assets/css/plugins/slick.css">
  <link rel="stylesheet" href="assets/css/plugins/slick-theme.css">
  <!-- Icon Fonts -->
  <link rel="stylesheet" href="assets/fonts/flaticon/flaticon.css">
  <link rel="stylesheet" href="assets/fonts/font-awesome/css/all.min.css">

  <!-- Organicz Style sheet -->
  <link rel="stylesheet" href="assets/css/style.css">
  <!-- Favicon -->
  <link rel="icon" type="image/png" sizes="32x32" href="favicon.ico">

</head>

<body>

  <!-- Preloader start -->
  <div class="ct-preloader">
    <img src="assets/img/preloader.svg" alt="preloader">
  </div>
  <!-- Preloader End -->

<!-- partial:partia/__sidenav.html -->
    
    <!-- partial -->
    <!-- Aside (Mobile Navigation) -->
    <aside class="sigma_aside sigma_aside-left">
        <a class="navbar-brand" href="index.php"> <img src="assets/img/logo/LOGO.png" alt="logo"> </a>
        <div class="aside-scroll">
            <ul>
                <li class="menu-item">
                    <a href="index.php">Home</a>
                </li>
                <li class="menu-item">
                    <a href="about-us.php">About Us</a>
                </li>
                <li class="menu-item">
                    <a href="shop.php">Shop</a>
                </li>
                <li class="menu-item">
                    <a href="contact-us.php">Contact Us</a>
                </li>
            </ul>
        </div>
    </aside>
    <div class="sigma_aside-overlay aside-trigger-left"></div>
    <!-- Header Start -->
    <?php include("assets/include/header.php"); ?>

    <!-- Header End -->

  <!-- Subheader Start -->
  <div class="subheader bg-cover dark-overlay dark-overlay-2" style="background-image: url('assets/img/subheader.webp')">
    <div class="absolute-subheader">
    <div class="container">
      <div class="subheader-inner">
        <h1>Shop</h1>
        <nav aria-label="breadcrumb">
          <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="index.php">Home</a></li>
            <li class="breadcrumb-item active" aria-current="page">Shop</li>
          </ol>
        </nav>
         <img src="assets/img/veg/8.webp" class="image-1" alt="img">
        <img src="assets/img/veg/5.webp" class="image-2" alt="img">
      </div>
    </div>
  </div>
  </div>
  <!-- Subheader End -->

  <section class="section section-padding extra-padding posts">
    <div class="container">
      <div class="row">
        <div class="col-lg-12">
          <div class="row">
            <!-- Product Start -->
            <?php
            $sql=mysqli_query($conn,"select * from products");   
            while($arr=mysqli_fetch_array($sql)){
            ?>
            <div class="col-md-4">
              <div class="ct-product">
                <div class="ct-product-thumbnail">
                  <a href="product-details.php?id=<?php echo $arr['id'] ?>"><img src="admin/dist/img/images/<?php echo $arr['file'] ?>" alt="product"></a>
                  <div class="ct-product-controls">
                    <a href="product-details.php?id=<?php echo $arr['id'] ?>" class="btn-custom secondary">Buy Now <i class="fas fa-arrow-right"></i> </a>
                  </div>
                </div>
                <div class="ct-product-body">
                  <h5 class="product-title"> <a href="product-details.php?id=<?php echo $arr['id'] ?>"><?php echo $arr['masala_name'];?></a> </h5>
                </div>
              </div>
              
            </div>
            <?php } ?>
            <!-- Product End -->

            <!-- Product Start -->
            <!-- <div class="col-md-4">
              <div class="ct-product">
                <div class="ct-product-thumbnail">
                  <a href="product-details.php"><img src="assets/img/products/5.png" alt="product"></a>
                  <div class="ct-product-controls">
                    <a href="product-details.php" class="btn-custom secondary">Select Options <i class="fas fa-arrow-right"></i> </a>
                  </div>
                </div>
                <div class="ct-product-body">
                  <h5 class="product-title"> <a href="product-details.html">Beconscious</a> </h5>
                </div>
              </div>
            </div> -->
            <!-- Product End -->

            <!-- Product Start -->
            <!-- <div class="col-md-4">
              <div class="ct-product">
                <div class="ct-product-thumbnail">
                  <a href="product-details.php"><img src="assets/img/products/1.png" alt="product"></a>
                  <div class="ct-product-controls">
                    <a href="product-details.php" class="btn-custom secondary">Select Options <i class="fas fa-arrow-right"></i> </a>
                  </div>
                </div>
                <div class="ct-product-body">
                  <h5 class="product-title"> <a href="product-details.php">Clove</a> </h5>
                </div>
              </div>
            </div> -->
            <!-- Product End -->

            <!-- Product Start -->
            <!-- <div class="col-md-4">
              <div class="ct-product">
                <div class="ct-product-thumbnail">
                  <a href="product-details.php"><img src="assets/img/products/6.png" alt="product"></a>
                  <div class="ct-product-controls">
                    <a href="product-details.php" class="btn-custom secondary">Buy Now<i class="fas fa-arrow-right"></i> </a>
                  </div>
                </div>
                <div class="ct-product-body">
                  <h5 class="product-title"> <a href="product-details.php">Chilli Powder</a> </h5>
                </div>
              </div>
            </div> -->
            <!-- Product End -->

            <!-- Product Start -->
            <!-- <div class="col-md-4">
              <div class="ct-product">
                <div class="ct-product-thumbnail">
                  <a href="product-details.php"><img src="assets/img/products/3.png" alt="product"></a>
                  <div class="ct-product-controls">
                    <a href="product-details.php" class="btn-custom secondary">Buy Now <i class="fas fa-arrow-right"></i> </a>
                  </div>
                </div>
                <div class="ct-product-body">
                  <h5 class="product-title"> <a href="product-details.php">Sesame Seeds</a> </h5>
                </div>
              </div>
            </div> -->
            <!-- Product End -->

            <!-- Product Start -->
            <!-- <div class="col-md-4">
              <div class="ct-product">
                <div class="ct-product-thumbnail">
                  <a href="product-details.php"><img src="assets/img/products/7.png" alt="product"></a>
                  <div class="ct-product-controls">
                    <a href="product-details.php" class="btn-custom secondary">Select Options <i class="fas fa-arrow-right"></i> </a>
                  </div>
                </div>
                <div class="ct-product-body">
                  <h5 class="product-title"> <a href="product-details.html">Lemon</a> </h5>
                </div>
              </div>
            </div> -->
            <!-- Product End -->

          </div>
        </div>
      </div>
    </div>
  </section>


  <!-- Footer Start -->
  <?php include ("assets/include/footer.php"); ?>
  <!-- Footer End -->

  <!-- Vendor Scripts -->
  <script src="assets/js/plugins/jquery-3.4.1.min.js"></script>
  <script src="assets/js/plugins/popper.min.js"></script>
  <script src="assets/js/plugins/waypoint.js"></script>
  <script src="assets/js/plugins/bootstrap.min.js"></script>
  <script src="assets/js/plugins/jquery.magnific-popup.min.js"></script>
  <script src="assets/js/plugins/jquery.slimScroll.min.js"></script>
  <script src="assets/js/plugins/imagesloaded.min.js"></script>
  <script src="assets/js/plugins/jquery.steps.min.js"></script>
  <script src="assets/js/plugins/jquery.countdown.min.js"></script>
  <script src="assets/js/plugins/isotope.pkgd.min.js"></script>
  <script src="assets/js/plugins/slick.min.js"></script>

  <!-- Organicz Scripts -->
  <script src="assets/js/main.js"></script>

</body>


<!-- Mirrored from metropolitanhost.com/themes/templatemoster/html/masala/shop.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 05 Aug 2022 05:58:31 GMT -->
</html>
