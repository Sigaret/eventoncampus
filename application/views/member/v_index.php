<!DOCTYPE html>
<!--
This is a starter template page. Use this page to start your new project from
scratch. This page gets rid of all links and provides the needed markup only.
-->
<html lang="en">
<head> 
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta http-equiv="x-ua-compatible" content="ie=edge">

  <title>Dashborad - Event On Campus</title>  
  <!-- Font Awesome Icons -->
  
  <link rel="stylesheet" href="<?php echo base_url();?>member(css)/plugins/fontawesome-free/css/all.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="<?php echo base_url();?>member(css)/dist/css/adminlte.min.css">
  <!-- Google Font: Source Sans Pro -->
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
</head>
<body class="hold-transition sidebar-mini">
<div class="wrapper">

  <!-- Navbar -->
  <nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="<?php echo base_url('member/dashboard') ?>" class="nav-link">Home</a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="<?php echo base_url('member/add_event') ?>"><button type="button" class="btn btn-block btn-warning">Buat Event</button></a>
      </li>
    </ul>

    <!-- SEARCH FORM
    <form class="form-inline ml-3">
      <div class="input-group input-group-sm">
        <input class="form-control form-control-navbar" type="search" placeholder="Search" aria-label="Search">
        <div class="input-group-append">
          <button class="btn btn-navbar" type="submit">
            <i class="fas fa-search"></i>
          </button>
        </div>
      </div>
    </form> -->

    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto">
      <!-- Messages Dropdown Menu -->

      <li class="nav-item">
        <a class="nav-link" href="<?php echo base_url('login/logout') ?>" ><i class="fas fa-sign-out-alt"></i> Sign Out</a>
      </li>
    </ul>
  </nav>
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="index3.html" class="brand-link">
      <!-- <img src="dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3"
           style="opacity: .8"> -->
      <span class="brand-text font-weight-light">Event On Campus</span>
    </a>

    <!-- Sidebar --> 
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="<?php echo base_url();?>member(css)/profile/<?php echo $user['foto_prof'] ?> " class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="#" class="d-block"><?php echo $user['nama_org'] ?></a>
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-item has-treeview menu-open">
            <a href="<?php echo base_url('member/dashboard') ?>" class="nav-link active">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Dashboard                
              </p>
            </a>
          </li>     
          <li class="nav-item">
            <a href="<?php echo base_url('member/pemesanan') ?>" class="nav-link">
              <i class="nav-icon fas fa-users"></i>
              <p>
                Komfirmasi Pemesan                
              </p>
            </a>
          </li> 
          <li class="nav-item ">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-user-circle"></i>
              <p>
                Profil 
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="<?php echo base_url('member/profile/ubahpass') ?>" class="nav-link ">
                  <i class="fas fa-lock nav-icon"></i>
                  <p>Ubah Password</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="<?php echo base_url('member/profile/profilefull') ?>" class="nav-link">
                  <i class="fas fa-credit-card nav-icon"></i>
                  <p>Lengkapi Profil Kamu</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="<?php echo base_url('member/profile/akunbank') ?>" class="nav-link">
                  <i class="fas fa-money-check-alt nav-icon"></i>
                  <p>Rekening Bank</p>
                </a>
              </li>
            </ul>
          </li>                               
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">Selamat Datang , <?php echo $user['nama_org'] ?></h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Dashboard</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <div class="content">
      <div class="container-fluid">
        <!-- =========================================================== -->
        <h5 class="mt-4 mb-2">Info Event</h5>
        <div class="row">
          <div class="col-md-3 col-sm-6 col-12">
            <div class="info-box bg-info">
              <span class="info-box-icon"><i class="fas fa-wallet"></i></span>
                <?php foreach($datat as $pd): ?>
              <div class="info-box-content">
                <span class="info-box-text">Pendapatan</span>
                <span class="info-box-number">Rp.<?php echo $pd->total ?></span>                                
              </div>
                <?php endforeach;?>
              <!-- /.info-box-content -->
            </div>
            <!-- /.info-box -->
          </div>
          <!-- /.col -->
          <div class="col-md-3 col-sm-6 col-12">
            <div class="info-box bg-success">
              <span class="info-box-icon"><i class="fas fa-ticket-alt"></i></span>
                  <?php foreach($datatj as $tj): ?>
              <div class="info-box-content">
                <span class="info-box-text">Tiket Terjual</span>
                <span class="info-box-number"><?php echo $tj->qty_tiket ?></span>
              </div>
                  <?php endforeach; ?>
              <!-- /.info-box-content -->
            </div>
            <!-- /.info-box -->
          </div>
          <!-- /.col -->
          <!-- /.col -->
          <div class="col-md-3 col-sm-6 col-12">
            <div class="info-box bg-danger">
              <span class="info-box-icon"><i class="fas fa-user-plus"></i></span>

              <div class="info-box-content">
                <span class="info-box-text">Pembeli</span>
                <span class="info-box-number"><?php echo $pembeli ?></span>
          
              </div>
              <!-- /.info-box-content -->
            </div>
            <!-- /.info-box -->
          </div>
          <!-- /.col -->
        </div>
        <!-- /.row -->
        <h3 class="mt-4 mb-4">Event Kamu</h3>

        <div class="row">
          <!-- /.col ../dist/img/user1-128x128.jpg-->
          <?php
                if (empty($data)):
          ?>
                <h1 class="display-3">Kamu Belum Bikin Event</h1>
          <?php else:
                 foreach ($data as $e)  :
                 ?>          
                 <div class="col-md-4">
                        <!-- Author Card -->
                        <div class="card shadow-sm border-0 mt-3">
                         <a href="#"><img class="card-img-top" style="max-height: 270px;" src="<?php echo base_url();?>member(css)/poster/<?php echo $e->poster ?>" alt="Card image cap"></a>
                          <div class="card-body text-center">
                              <!-- <img class="rounded-circle shadow mt-neg5" src="./assets/img/demo/avatar.png" width="70"> -->
                              <!-- <h6 class="card-title text-muted">Nama Penyelenggara</h6> -->
                              <strong><h5><p class="card-text"><?php echo $e->nama_event; ?></p></h5></strong>                                                                                     
                          </div>
                          <div class="card-footer">
                            <div class="row">
                              <div class="col-sm-4 border-right">
                                <div class="description-block">
                                  <h5 class="description-header">3,200</h5>
                                  <span class="description-text">Pembeli</span>
                                </div>
                                <!-- /.description-block -->
                              </div>
                              <!-- /.col -->
                              <div class="col-sm-4 border-right">
                                <div class="description-block">
                                  <h5 class="description-header"></h5>
                                  <span class="description-text"></span>
                                </div>
                                <!-- /.description-block -->
                              </div>
                              <!-- /.col -->
                              <div class="col-sm-4">
                                <div class="description-block">
                                  <h5 class="description-header"><?php echo $e->qty; ?></h5>
                                  <span class="description-text">Sisa Tiket</span>
                                </div>
                                <!-- /.description-block -->
                              </div>
                              <!-- /.col -->
                            </div>
                            <!-- /.row -->
                          </div>
                       </div>    
               </div>   
          <?php endforeach;
                endif;
          ?>                  
        </div>        
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
    <div class="p-3">
      <h5>Title</h5>
      <p>Sidebar content</p>
    </div>
  </aside>
  <!-- /.control-sidebar -->

  <!-- Main Footer -->
  <footer class="main-footer">
    <!-- To the right -->
    <div class="float-right d-none d-sm-inline">
      Anything you want
    </div>
    <!-- Default to the left -->
    <strong>Copyright &copy; 2014-2019 <a href="https://adminlte.io">AdminLTE.io</a>.</strong> All rights reserved.
  </footer>
</div>
<!-- ./wrapper -->

<!-- REQUIRED SCRIPTS -->

<!-- jQuery -->
<script src="<?php echo base_url();?>member(css)/plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="<?php echo base_url();?>member(css)/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- AdminLTE App -->
<script src="<?php echo base_url();?>member(css)/dist/js/adminlte.min.js"></script>
</body>
</html>
