<?php 

    ob_start(); // Start output buffering
    session_start();

    define("APPURL", "http://localhost/coffee-blend");
    define("IMAGEPRODUCTS", "http://localhost/coffee-blend/admin-panel/products-admins/images");


    $current_page = basename($_SERVER['SCRIPT_NAME']); 
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Secangkir Coopitiam</title>
    <link rel="icon" type="image/x-icon" href="../favicon/favicon.ico">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Josefin+Sans:400,700" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Great+Vibes" rel="stylesheet">

    <link rel="stylesheet" href="<?php echo APPURL; ?>/css/open-iconic-bootstrap.min.css">
    <link rel="stylesheet" href="<?php echo APPURL; ?>/css/animate.css">
    
    <link rel="stylesheet" href="<?php echo APPURL; ?>/css/owl.carousel.min.css">
    <link rel="stylesheet" href="<?php echo APPURL; ?>/css/owl.theme.default.min.css">
    <link rel="stylesheet" href="<?php echo APPURL; ?>/css/magnific-popup.css">

    <link rel="stylesheet" href="<?php echo APPURL; ?>/css/aos.css">

    <link rel="stylesheet" href="<?php echo APPURL; ?>/css/ionicons.min.css">

    <link rel="stylesheet" href="<?php echo APPURL; ?>/css/bootstrap-datepicker.css">
    <link rel="stylesheet" href="<?php echo APPURL; ?>/css/jquery.timepicker.css">

    <link rel="stylesheet" href="<?php echo APPURL; ?>/css/flaticon.css">
    <link rel="stylesheet" href="<?php echo APPURL; ?>/css/icomoon.css">
    <link rel="stylesheet" href="<?php echo APPURL; ?>/css/style.css">
    <script src="<?php echo APPURL; ?>/js/logout.js"></script>

  </head>
  <body>
  	<nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
	    <div class="container">
	      <a class="navbar-brand" href="<?php echo APPURL; ?>">Secangkir<small>Coopitiam</small></a>
	      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
	        <span class="oi oi-menu"></span> Menu
	      </button>
	      <div class="collapse navbar-collapse" id="ftco-nav">
          <ul class="navbar-nav ml-auto">
              <li class="nav-item <?php echo ($current_page == 'index.php') ? 'active' : ''; ?>">
                  <a href="<?php echo APPURL; ?>" class="nav-link">Home</a>
              </li>
              <li class="nav-item <?php echo ($current_page == 'menu.php') ? 'active' : ''; ?>">
                  <a href="<?php echo APPURL;?>/menu.php" class="nav-link">Menu</a>
              </li>
              <li class="nav-item <?php echo ($current_page == 'services.php') ? 'active' : ''; ?>">
                  <a href="<?php echo APPURL;?>/services.php" class="nav-link">Services</a>
              </li>
              <li class="nav-item <?php echo ($current_page == 'about.php') ? 'active' : ''; ?>">
                  <a href="<?php echo APPURL;?>/about.php" class="nav-link">About</a>
              </li>
              <li class="nav-item <?php echo ($current_page == 'contact.php') ? 'active' : ''; ?>">
                  <a href="<?php echo APPURL;?>/contact.php" class="nav-link">Contact</a>
              </li>

              <?php if(isset($_SESSION['username'])) : ?>
                        <li class="nav-item cart">
                            <a href="<?php echo APPURL; ?>/products/cart.php" class="nav-link">
                                <span class="icon icon-shopping_cart"></span>
                            </a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                <?php echo $_SESSION['username']; ?>
                            </a>
                            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <li><a class="dropdown-item" href="<?php echo APPURL;?>/users/bookings.php">Your Bookings</a></li>
                                <li><a class="dropdown-item" href="<?php echo APPURL;?>/users/orders.php">Your Orders</a></li>
                                <li><hr class="dropdown-divider"></li>
                                <li><a class="dropdown-item logout-link" href="<?php echo APPURL; ?>/auth/logout.php">Logout</a></li>
                            </ul>
                        </li>
                    <?php else: ?>
                        <li class="nav-item" <?php echo ($current_page == 'auth/login.php') ? 'active' : ''; ?>><a href="<?php echo APPURL; ?>/auth/login.php" class="nav-link">Login</a></li>
                        <li class="nav-item" <?php echo ($current_page == 'auth/register.php') ? 'active' : ''; ?>><a href="<?php echo APPURL; ?>/auth/register.php" class="nav-link">Register</a></li>
                    <?php endif; ?>
                </ul>
            </div>
        </div>
    </nav>
    <!-- END nav -->