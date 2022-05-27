  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top">
    <div class="container d-flex align-items-center">

      <h1 class="logo me-auto"><a href="/userPanel/index.php">User Panel</a></h1>
      <!-- Uncomment below if you prefer to use an image logo -->
      <!-- <a href="index.html" class="logo me-auto"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->

      <nav id="navbar" class="navbar order-last order-lg-0">
        <ul>
          <li><a class="nav-link scrollto active" href="#hero">Home</a></li>
          <li><a class="nav-link scrollto" href="/userPanel/user/users-profile.php">Profile</a></li>
          <li><a class="nav-link scrollto" href="/userPanel/user/pages-register.php">Register</a></li>
          <li><a class="nav-link scrollto" href="/userPanel/user/login.php">Login</a></li>
          <li class="dropdown"><a href="#"><span>medicines</span> <i class="bi bi-chevron-down"></i></a>
            <ul>
              <li><a href="/userPanel/user/add-medicine.php">add medicines</a></li>
              <li><a href="/userPanel/user/list-medicine.php">View medicines</a></li>
            </ul>
          </li>
          <li class="dropdown"><a href="#"><span>Orders</span> <i class="bi bi-chevron-down"></i></a>
            <ul>
              <li><a href="/userPanel/user/add-orders.php">Make Order</a></li>
              <li><a href="/userPanel/user/list-orders.php">View Order</a></li>
            </ul>
          </li>
          <form method="POST" action="<?php $_SERVER['PHP_SELF'] ?>">
            <div class="col-auto">
              <button name="logout" class="btn btn-danger">logout</button>
            </div>
          </form>
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->

    </div>


  </header><!-- End Header -->