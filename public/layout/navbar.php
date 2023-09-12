<?php 
include 'header.php';
include 'sidebar.php';
?>
  <body>
    <div class="container-scroller">
      <nav class="navbar default-layout col-lg-12 col-12 p-0 fixed-top d-flex flex-row">
        <div class="text-center navbar-brand-wrapper d-flex align-items-top justify-content-center bg-light">
          <a class="navbar-brand brand-logo text-dark" href="view/dashboard/index.php">
            <img src="assets\images\auth\logo.png">
             <h3 class="p-2">SG</h3></a>
          <a class="navbar-brand brand-logo-mini" href="index.php"></a>
        </div>
        <div class="navbar-menu-wrapper d-flex align-items-center">
          <ul class="navbar-nav">
            <li class="nav-item font-weight-semibold d-none d-lg-block px-3 text-capitalize"><?= $user_roll ?> : Panel</li>
            <li class="nav-item font-weight-semibold d-none d-lg-block px-3">Date : <?= date('d-M-Y'); ?> </li>
            <li class="nav-item font-weight-semibold d-none d-lg-block px-3">Help : +91 8888666999</li>
            

          </ul>
          <form class="ml-auto search-form d-none d-md-block" action="#">
            <div class="form-group">
            </div>
          </form>
          <ul class="navbar-nav ml-auto">
      
            <li class="nav-item dropdown d-none d-xl-inline-block user-dropdown">
              <a class="nav-link dropdown-toggle" id="UserDropdown" href="#" data-toggle="dropdown" aria-expanded="false">
                <img class="img-xs rounded-circle" src="assets/images/faces/face8.jpg" alt="Profile image"> </a>
              <div class="dropdown-menu dropdown-menu-right navbar-dropdown" aria-labelledby="UserDropdown">
                <div class="dropdown-header text-center">
                  <img class="img-md rounded-circle" src="assets/images/faces/face8.jpg" alt="Profile image">
                  <p class="mb-1 mt-3 font-weight-semibold">Allen Moreno</p>
                  <p class="font-weight-light text-muted mb-0">allenmoreno@gmail.com</p>
                </div>
                <a class="dropdown-item">My Profile <span class="badge badge-pill badge-danger">1</span><i class="dropdown-item-icon ti-dashboard"></i></a>
                <a class="dropdown-item btn border text-center btn-danger" href="logout.php">Sign Out<i class="dropdown-item-icon ti-power-off"></i></a>
              </div>
            </li>
          </ul>
          <button class="navbar-toggler navbar-toggler-right d-lg-none align-self-center" type="button" data-toggle="offcanvas">
            <span class="mdi mdi-menu"></span>
          </button>
        </div>
      </nav>
      