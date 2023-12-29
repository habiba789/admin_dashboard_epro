<?php
echo '<nav class="navbar col-lg-12 col-12 p-0 fixed-top d-flex flex-row">
<div class="text-center navbar-brand-wrapper d-flex align-items-center justify-content-center">
  <a class="navbar-brand brand-logo mr-5" href="index.php"><img src="../images/logo.svg" class="mr-2" alt="logo"/></a>
  <a class="navbar-brand brand-logo-mini" href="index.php"><img src="../images/logo-mini.svg" alt="logo"/></a>
</div>
<div class="navbar-menu-wrapper d-flex align-items-center justify-content-end">
  <button class="navbar-toggler navbar-toggler align-self-center" type="button" data-toggle="minimize">
    <span class="icon-menu"></span>
  </button>
  
  <ul class="navbar-nav navbar-nav-right">
    <li class="nav-item nav-profile dropdown">
      <a class="nav-link dropdown-toggle" href="#" data-toggle="dropdown" id="profileDropdown">
        <img src="../images/faces/face28.jpg" alt="profile"/>
      </a>
      <div class="dropdown-menu dropdown-menu-right navbar-dropdown" aria-labelledby="profileDropdown">
        <a class="dropdown-item">
          <i class="ti-settings text-primary"></i>
          Settings
        </a>
        <a class="dropdown-item">
          <i class="ti-power-off text-primary"></i>
          Logout
        </a>
      </div>
    </li>

  </ul>
 
</div>
</nav>';
?>

