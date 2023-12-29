<?php
echo ' <nav class="sidebar sidebar-offcanvas" id="sidebar">
<ul class="nav">
  <li class="nav-item">
    <a class="nav-link" href="../index.php">
      <i class="icon-grid menu-icon"></i>
      <span class="menu-title">Dashboard</span>
    </a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="customers.php">
    <i class="fa-solid fa-users menu-icon"></i>
      <span class="menu-title">Customers</span>
    </a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="lawyers.php">
    <i class="fa-solid fa-user-tie menu-icon"></i>
      <span class="menu-title">Lawyers</span>
    </a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="admins.php">
    <i class="fa-solid fa-user-gear menu-icon"></i>
      <span class="menu-title">Admins</span>
    </a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="appointments.php">
    <i class="fa-solid fa-calendar-check menu-icon"></i>
      <span class="menu-title">Appoinments</span>
    </a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="adminProfile.php">
    <i class="fa-solid fa-circle-user menu-icon"></i>
      <span class="menu-title">Admin Profile</span>
    </a>
  </li>
  <li class="nav-item">
    <a class="nav-link" data-toggle="collapse" href="#auth" aria-expanded="false" aria-controls="auth">
      <i class="icon-head menu-icon"></i>
      <span class="menu-title">User Pages</span>
      <i class="menu-arrow"></i>
    </a>
    <div class="collapse" id="auth">
      <ul class="nav flex-column sub-menu">
        <li class="nav-item"> <a class="nav-link" href="pages/samples/login.html"> Login </a></li>
        <li class="nav-item"> <a class="nav-link" href="pages/samples/register.html"> Register </a></li>
      </ul>
    </div>
  </li>
</ul>
</nav>';
?>