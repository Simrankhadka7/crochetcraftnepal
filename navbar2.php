<div class="container d-flex justify-content-between">

      <div class="logo">
        <h1><a href="index.php">CrochetCraft_Nepal</a></h1>
        <!-- Uncomment below if you prefer to use an image logo -->
        <!-- <a href="index.html"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->
      </div>

      <nav id="navbar" class="navbar">
        <ul>
          <li><a class="nav-link scrollto" href="index.php #hero">Home</a></li>
          <li><a class="nav-link scrollto" href="index.php #about">About</a></li>
          <li><a class="nav-link scrollto" href="index.php #services">Services</a></li>
          <li><a class="nav-link scrollto" href="index.php #contact">Contact</a></li>
          <li class="dropdown"><a href="#"><span>More</span> <i class="bi bi-chevron-down"></i></a>
            <ul>
            <li><a href="Display_product.php">View Products</a></li>  

            <?php if(!isset($_SESSION['ticket'])) { ?>

            <li><a href="login.php">Login</a></li>
              <li><a href="sign_up.php">Sign Up</a></li>
              <?php } else{ ?>
                <li><a href="dashboard.php">Dashboard</a></li>  
              <li><a href="add_products.php">Add Products</a></li>
              <li><a href="logout.php">Logout</a></li>
              <?php }?>

            </ul>
          </li>
          
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->

    </div>