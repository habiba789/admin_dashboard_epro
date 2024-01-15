<?php
session_start();
require_once "../config.php";
// require_once "includes/headlinks.php";
// require_once "includes/header.php";
if(isset($_SESSION['userType']) && $_SESSION['userType'] === "customer"){
  if(isset($_SESSION['id'])){
    $custId = $_SESSION['id'];
    $findCust = "SELECT * FROM customers WHERE id = '$custId'";
    $custResult = mysqli_query($conn, $findCust);
    if(mysqli_num_rows($custResult)>0){
      $custRow = mysqli_fetch_assoc($custResult);
      $custName = $custRow['custName'];
      $custEmail = $custRow['email'];
      $custPassword = $custRow['password'];
      $custContact = $custRow['contact'];
      $custLocation = $custRow['location'];
    }
  }
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta content="width=device-width, initial-scale=1.0" name="viewport">

<title>Suprimo | User Dashboard</title>
<meta content="" name="description">
<meta content="" name="keywords">

<!-- Favicons -->
<link href="assets/img/favicon.png" rel="icon">
<link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

<!-- Google Fonts -->
<link href="https://fonts.gstatic.com" rel="preconnect">
<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

<!-- Vendor CSS Files -->
<link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
<link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
<link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
<link href="assets/vendor/quill/quill.snow.css" rel="stylesheet">
<link href="assets/vendor/quill/quill.bubble.css" rel="stylesheet">
<link href="assets/vendor/remixicon/remixicon.css" rel="stylesheet">
<link href="assets/vendor/simple-datatables/style.css" rel="stylesheet">

<!-- Template Main CSS File -->
<link href="assets/css/style.css" rel="stylesheet">

<!-- =======================================================
* Template Name: NiceAdmin
* Updated: Nov 17 2023 with Bootstrap v5.3.2
* Template URL: https://bootstrapmade.com/nice-admin-bootstrap-admin-html-template/
* Author: BootstrapMade.com
* License: https://bootstrapmade.com/license/
======================================================== -->
</head>

<body>
<header id="header" class="header fixed-top d-flex align-items-center">
  <div class="d-flex align-items-center justify-content-between">
    <a href="index.html" class="logo d-flex align-items-center">
      <img src="assets/images/logo.png" alt="" />
    </a>
  </div>
  <!-- End Logo -->
  <nav class="header-nav-items">
    <ul class="d-flex align-items-center">
      <li>
        <a href="../index.php" class="active">Home</a>
      </li>
      <li>
        <a href="../about.php">About</a>
      </li>
      <li>
        <a href="../practice-area.php">Practice Area</a>
      </li>
      <li>
        <a href="../attorneys.php">Attorneys</a>
      </li>
      <li>
        <a href="../blog.php">News</a>
      </li>
      <li>
        <a href="../contact.php">Contact</a>
      </li>
    </ul>
  </nav>

  <nav class="header-nav ms-auto">
    <ul class="d-flex align-items-center">

      <li class="nav-item dropdown pe-3">
        <a
          class="nav-link nav-profile d-flex align-items-center pe-0"
          href="#"
          data-bs-toggle="dropdown"
        >
          <img
            src="../images/male_dummy.png"
            alt="Profile"
            class="rounded-circle"
          />
          <span class="d-none d-md-block dropdown-toggle ps-2"
            > <?php echo $custName;?> </span
          > </a
        ><!-- End Profile Iamge Icon -->

        <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow profile">
          <li class="dropdown-header">
            <h6><?php echo $custName;?></h6>
          </li>
          <li>
            <hr class="dropdown-divider" />
          </li>

          <li>
            <a
              class="dropdown-item d-flex align-items-center"
              href="userpanel.php"
            >
              <i class="bi bi-person"></i>
              <span>My Profile</span>
            </a>
          </li>
          <li>
            <hr class="dropdown-divider" />
          </li>
          <li>
            <a
              class="dropdown-item d-flex align-items-center"
              href="logout.php"
            >
              <i class="bi bi-box-arrow-right"></i>
              <span>Sign Out</span>
            </a>
          </li>
        </ul>
        <!-- End Profile Dropdown Items -->
      </li>
      <!-- End Profile Nav -->
    </ul>
  </nav>
  <!-- End Icons Navigation -->
</header>

<main id="main" class="main">

<div class="pagetitle">
 <h3>Welcome <?php echo $custName;?></h3>
</div><!-- End Page Title -->

<section class="section profile">
  <div class="row">
    <div class="col-xl-4">

      <div class="card">
        <div class="card-body profile-card pt-4 d-flex flex-column align-items-center">

          <img src="../images/male_dummy.png" alt="Profile" class="rounded-circle">
          <h2><?php echo $custName;?></h2>
          <div class="social-links mt-2">
            <a href="#" class="twitter"><i class="bi bi-twitter"></i></a>
            <a href="#" class="facebook"><i class="bi bi-facebook"></i></a>
            <a href="#" class="instagram"><i class="bi bi-instagram"></i></a>
            <a href="#" class="linkedin"><i class="bi bi-linkedin"></i></a>
          </div>
        </div>
      </div>

    </div>

    <div class="col-xl-8">

      <div class="card">
        <div class="card-body pt-3">
          <!-- Bordered Tabs -->
          <ul class="nav nav-tabs nav-tabs-bordered">

            <li class="nav-item">
              <button class="nav-link active" data-bs-toggle="tab" data-bs-target="#profile-overview">Overview</button>
            </li>

            <li class="nav-item">
              <button class="nav-link" data-bs-toggle="tab" data-bs-target="#profile-edit">Edit Profile</button>
            </li>

          </ul>
          <div class="tab-content pt-2">

            <div class="tab-pane fade show active profile-overview" id="profile-overview">

              <h5 class="card-title">Profile Details</h5>

              <div class="row">
                <div class="col-lg-3 col-md-4 label ">Full Name</div>
                <div class="col-lg-9 col-md-8"><?php echo $custName; ?></div>
              </div>

              <div class="row">
                <div class="col-lg-3 col-md-4 label">Email</div>
                <div class="col-lg-9 col-md-8"><?php echo $custEmail; ?></div>
              </div>
              
              <div class="row">
                <div class="col-lg-3 col-md-4 label">Password</div>
                <div class="col-lg-9 col-md-8"><?php echo $custPassword; ?></div>
              </div>

              
              <div class="row">
                <div class="col-lg-3 col-md-4 label">Contact</div>
                <div class="col-lg-9 col-md-8"><?php echo $custContact; ?></div>
              </div>
              
              <div class="row">
                <div class="col-lg-3 col-md-4 label">Location</div>
                <div class="col-lg-9 col-md-8"><?php echo $custLocation; ?></div>
              </div>

            </div>

            <div class="tab-pane fade profile-edit pt-3" id="profile-edit">

              <!-- Profile Edit Form -->
              <form method="post">

                <!-- <div class="row mb-3">
                  <label class="col-md-4 col-lg-3 col-form-label">Profile Image</label>
                  <div class="col-md-8 col-lg-9">
                    <input name="userImage" type="file" class="form-control" id="fullName">
                  </div>
                </div> -->

                <div class="row mb-3">
                  <label for="fullName" class="col-md-4 col-lg-3 col-form-label">Full Name</label>
                  <div class="col-md-8 col-lg-9">
                    <input name="fullName" type="text" class="form-control" id="fullName" value="<?php echo $custName; ?>">
                  </div>
                </div>

                <div class="row mb-3">
                  <label for="company" class="col-md-4 col-lg-3 col-form-label">Email</label>
                  <div class="col-md-8 col-lg-9">
                    <input name="username" type="email" class="form-control" id="company" value="<?php echo $custEmail; ?>">
                  </div>
                </div>

                <div class="row mb-3">
                  <label for="Country" class="col-md-4 col-lg-3 col-form-label">Password</label>
                  <div class="col-md-8 col-lg-9">
                    <input name="country" type="text" class="form-control" id="Country" value="<?php echo $custPassword; ?>">
                  </div>
                </div>

                <div class="row mb-3">
                  <label for="Address" class="col-md-4 col-lg-3 col-form-label">Contact</label>
                  <div class="col-md-8 col-lg-9">
                    <input name="address" type="text" class="form-control" id="Address" value="<?php echo $custContact; ?>">
                  </div>
                </div>

                <div class="row mb-3">
                  <label for="Email" class="col-md-4 col-lg-3 col-form-label">Location</label>
                  <div class="col-md-8 col-lg-9">
                    <input name="email" type="text" class="form-control" id="Email" value="<?php echo $custLocation; ?>">
                  </div>
                </div>

                <div class="text-center">
                  <button type="submit" class="btn btn-primary" name="updateForm">Save Changes</button>
                </div>
              </form><!-- End Profile Edit Form -->

            </div>

          </div><!-- End Bordered Tabs -->

        </div>
      </div>

    </div>
  </div>
</section>

</main><!-- End #main -->
<!-- Vendor JS Files -->
<script src="assets/vendor/apexcharts/apexcharts.min.js"></script>
<script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="assets/vendor/chart.js/chart.umd.js"></script>
<script src="assets/vendor/echarts/echarts.min.js"></script>
<script src="assets/vendor/quill/quill.min.js"></script>
<script src="assets/vendor/simple-datatables/simple-datatables.js"></script>
<script src="assets/vendor/tinymce/tinymce.min.js"></script>
<script src="assets/vendor/php-email-form/validate.js"></script>

<!-- Template Main JS File -->
<script src="assets/js/main.js"></script>

</body>

</html>

<?php

?>