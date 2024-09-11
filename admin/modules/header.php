<?php
    if(isset($_GET['dangxuat'])&&$_GET['dangxuat']==1){
        unset($_SESSION['dangnhap']);
        header('Location:login.php');
    }
?>




        <div class="wrapper">

<header class="main-header">
  <!-- Logo -->
  <a href="http://localhost/CarBreezy/index.php" class="logo">
    <!-- mini logo for sidebar mini 50x50 pixels -->
    <span class="logo-mini"><b>Br</b>C</span>
    <!-- logo for regular state and mobile devices -->
    <span class="logo-lg"><b>Breezy</b>Car</span>
  </a>
  <!-- Header Navbar: style can be found in header.less -->
  <nav class="navbar navbar-static-top">
    <!-- Sidebar toggle button-->
    <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
      
      <span class="icon-bar"></span>
      <span class="icon-bar"></span>
      <span class="icon-bar"></span>
    </a>

    
  </nav>
</header>

<!-- =============================================== -->

