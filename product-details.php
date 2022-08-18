<?php
    include('assets/include/config.php');
$id=$_GET['id'];
?>

<!DOCTYPE html>
<html lang="en" dir="ltr">


<!-- Mirrored from metropolitanhost.com/themes/templatemoster/html/masala/product-details.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 05 Aug 2022 05:59:07 GMT -->
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Shree Aai Foods - Products</title>

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
  <link rel="icon" type="image/png" sizes="32x32" href="assets\img\logo\footer_logo.png">

</head>

<body>

  <!-- Preloader start -->
  <div class="ct-preloader">
  <img src="assets/img/logo/LOGO.png" alt="preloader"  style="margin: auto; width="180px" height="180px">
    
  </div>
  <!-- Preloader End -->
<!-- partial:partia/__sidenav.html -->
    <aside class="sigma_aside sigma_aside-right sigma_aside-right-panel sigma_aside-bg">
        <div class="sidebar">
            <div class="sidebar-widget widget-logo">
                <img src="assets/img/logo.png" class="mb-30" alt="img">
                <p>Curabitur non nulla sit amet nisl tempus convallis quis ac lectus. Donec rutrum congue leo eget malesuada. Praesent sapien massa, convallis a pellentesque nec, egestas non nisi.</p>
            </div>
            <!-- Instagram Start -->
            <div class="sidebar-widget widget-ig">
                <h5 class="widget-title">Instagram</h5>
                <div class="row">
                    <div class="col-lg-4 col-md-4 col-sm-4 col-6">
                        <a href="#" class="sigma_ig-item">
                            <img src="assets/img/ig/7.jpg" alt="ig">
                        </a>
                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-4 col-6">
                        <a href="#" class="sigma_ig-item">
                            <img src="assets/img/ig/8.jpg" alt="ig">
                        </a>
                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-4 col-6">
                        <a href="#" class="sigma_ig-item">
                            <img src="assets/img/ig/9.jpg" alt="ig">
                        </a>
                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-4 col-6">
                        <a href="#" class="sigma_ig-item">
                            <img src="assets/img/ig/10.jpg" alt="ig">
                        </a>
                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-4 col-6">
                        <a href="#" class="sigma_ig-item">
                            <img src="assets/img/ig/11.jpg" alt="ig">
                        </a>
                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-4 col-6">
                        <a href="#" class="sigma_ig-item">
                            <img src="assets/img/ig/12.jpg" alt="ig">
                        </a>
                    </div>
                </div>
            </div>
            <!-- Instagram End -->
            <!-- Social Media Start -->
            <div class="sidebar-widget">
                <h5 class="widget-title">Follow Us</h5>
                <div class="sigma_post-share">
                    <ul class="sigma_sm square light">
                        <li>
                            <a href="#">
                                <i class="fab fa-facebook-f"></i>
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <i class="fab fa-linkedin-in"></i>
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <i class="fab fa-twitter"></i>
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <i class="fab fa-youtube"></i>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
            <!-- Social Media End -->
        </div>
    </aside>
    <div class="sigma_aside-overlay aside-trigger-right"></div>
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
                    <a href="index.php">About Us</a>
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
  <div class="subheader bg-cover dark-overlay dark-overlay-2" style="background-image: url('assets/img/banner/subheader.webp')">
    <div class="absolute-subheader">
    <div class="container">
      <div class="subheader-inner">
        <h1>Product Details</h1>
        <nav aria-label="breadcrumb">
          <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="index.php">Home</a></li>
            <li class="breadcrumb-item active" aria-current="page">Product Details</li>
          </ol>
        </nav>
        <img src="assets/img/veg/8.webp" class="image-1" alt="img">
        <img src="assets/img/veg/5.webp" class="image-2" alt="img">
      </div>
    </div>
  </div>
  </div>
  <!-- Subheader End -->

  <section class="section product-single extra-padding pb-0">
    <div class="container">

      <div class="row">
      <?php
            $sql=mysqli_query($conn,"select * from products where id='$id'");   
            while($arr=mysqli_fetch_array($sql)){
            ?>
        <div class="col-lg-6 col-md-6">

          <!-- Main Thumb -->
          <div class="product-thumb">
            <img src="admin/dist/img/images/<?php echo $arr['file'] ?>" alt="detail">
          </div>
          <!-- /Main Thumb -->

        </div>
        <div class="col-lg-6 col-md-6">
          <div class="product-content">

            <!-- Product Title -->
            <h2 class="title"><?php echo $arr['masala_name'];?></h2>
            <!-- /Product Title -->

            

            <!-- Product Short Description -->
            <p><?php echo $arr['short_description'];?></p>
            <!-- /Product Short Description -->
           
            <!-- Product Meta -->
            <ul class="product-meta">
              <li>
                <span>Categories: </span>
                <div class="product-meta-item">
                  <a href="#"><?php echo $arr['categories'];?></a>
                </div>
              </li>
              <li>
                <span>Tags: </span>
                <div class="product-meta-item">
                  <a href="#"><?php echo $arr['tags'];?></a>,
                  <!-- <a href="#">Spiceie</a>,
                  <a href="#">Kitchen Ware</a> -->
                </div>
              </li>
              <div class="product-meta-item">
                  <label>Description:</label> <br>
                <span><?php echo $arr['description'];?></span>
            </div>
              
            </ul>
            <!-- /Product Meta -->
          </div>
        </div>
        <?php } ?>
      </div>
    </div>
  </section>

  <!-- Related Products Start -->
  <section class="section section-pading pt-0 related">
    <div class="container">
      <h4>Related Products </h4>
      
      <div class="row">
      <?php
            $sql=mysqli_query($conn,"select * from products limit 3");   
            while($arr=mysqli_fetch_array($sql)){
            ?>
        <div class="col-lg-4 col-md-6">
          <div class="ct-product">
            <div class="ct-product-thumbnail">
            <img src="admin/dist/img/images/<?php echo $arr['file'] ?>" alt="detail">
              <!-- <a href="#"><img src="assets/img/products/2.webp" alt="product"></a> -->
              <div class="ct-product-controls">
                <a href="product-details.php?id=<?php echo $arr['id'] ?>" class="btn-custom secondary">Read More<i class="fas fa-arrow-right"></i> </a>
              </div>
            </div>
            <div class="ct-product-body">
              <h5 class="product-title"> <a href="product-details.php?id=<?php echo $arr['id'] ?>"><?php echo $arr['masala_name'];?></a> </h5>
            </div>
          </div>
        </div>
        <?php } ?>
      </div>
    </div>
  </section>
  <!-- Related Products End -->

 
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


<!-- Mirrored from metropolitanhost.com/themes/templatemoster/html/masala/product-details.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 05 Aug 2022 05:59:07 GMT -->
</html>
