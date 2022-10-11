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
          <li class="nav-item">
            <a href="<?php echo base_url('member/dashboard') ?>" class="nav-link ">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Dashboard                
              </p>
            </a>
          </li>                   
          <li class="nav-item">
            <a href="<?php echo base_url('member/pemesanan') ?>" class="nav-link ">
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
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Komfirmasi Pemesan</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Komfirmasi Pemesan</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">

      <!-- Default box -->
      <div class="card">
        <div class="card-header">
          <h3 class="card-title">Pemesan</h3>
          <?= $this->session->flashdata('message'); ?>  
          <div class="card-tools">
            <button type="button" class="btn btn-tool" data-card-widget="collapse" data-toggle="tooltip" title="Collapse">
              <i class="fas fa-minus"></i></button>
            <button type="button" class="btn btn-tool" data-card-widget="remove" data-toggle="tooltip" title="Remove">
              <i class="fas fa-times"></i></button>
          </div>
        </div>
        <div class="card-body">
            <table class="table table-striped">
                <thead>
                  <tr>                    
                    <th>No</th>
                    <th>Kode Pemesanan</th>
                    <th>Nama</th>                    
                    <th>Tiket</th>
                    <th>Event</th>
                    <th>Total</th>  
                    <th>Action</th>   
                    <th> *Note </th>               
                  </tr>
                </thead>
                <tbody>
                  <?php
                  $i=1;
                  foreach ($data as $pp): ?>
                  <tr>
                    <td><?php echo $i ?></td>
                    <td><?php echo $pp->kode_pemesanan ?></td>
                    <td ><?php echo $pp->nama_pemesan ?></td>                    
                    <td><?php echo $pp->qty_tiket ?></td>                    
                    <td><?php 
                    $str = $pp->nama_event;
                    if (strlen($str) > 12){
                       $str = substr($str, 0, 13) . '...';
                    }
                    echo $str;
                    ?></td>
                    <td><?php echo $pp->total ?></td>
                    <!-- <span class="badge bg-primary">Detail</span> -->
                    <td>
                        <?php
                        if($pp->status == 0):?>
                        <!-- data-toggle="modal" data-target="#exampleModal" -->
                        <a href="<?php echo base_url()?>member/pemesanan/stat_aktif/<?php echo $pp->kode_pemesanan;?>"><span class="badge bg-warning">Belum Di Bayar</span></a>                        
                        <?php else: ?>
                          <span class="badge bg-info">Sudah Di Bayar</span>                           
                        <?php endif;?>
                    </td>
                    <td>
                    <?php
                        if($pp->status == 0):?>
                            <small class="text-muted"> Klik Di sini Jika Sudah Melakukan Transaksi</small>
                        <?php else: ?>
                          - 
                        <?php endif;?></td>
                    </td>
                  </tr>                         
                  <?php $i++; endforeach; ?>                  
                </tbody>
              </table>
        </div>
        <!-- /.card-body -->
        <div class="card-footer">
          Footer
        </div>
        <!-- /.card-footer-->
      </div>
      <!-- /.card -->

    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  
  <!-- Modal it self -->
  

  <!-- /. Modat it self -->
  
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
