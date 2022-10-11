<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8"/>
<link rel="apple-touch-icon" sizes="76x76" href="./assets/img/favicon.ico">
<link rel="icon" type="image/png" href="./assets/img/favicon.ico">
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"/>
<title>Event On Campus</title>
<meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no' name='viewport'/>
    
<!-- Fonts -->
<link href="https://fonts.googleapis.com/css?family=Nunito:300,300i,400,600,700" rel="stylesheet">
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
<link href="https://fonts.googleapis.com/css?family=Viga&display=swap" rel="stylesheet"> 
    

 <!-- Bootstrap CSS -->
 <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">


<!-- CSS -->
<link href="<?php echo base_url();?>not_member(css)/assets/css/main.css" rel="stylesheet"/>
<link href="<?php echo base_url();?>not_member(css)/assets/css/vendor/aos.css" rel="stylesheet"/>
<link href="<?php echo base_url();?>not_member(css)/assets/css/mycss.css" rel="stylesheet"/>
    
</head>    
<body>
     <!--Navbar  -->
         <!--Navbar  -->
        <!-- navbar dark -->
<nav class="navbar  navbar-expand-lg navbar-light  bg-cyan ">
    <div class="container">
        <a class="navbar-brand" href="<?php echo base_url('Home')?>">

            <i class="fas fa-file mr-2"></i>EventOnCampus</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown-1" aria-controls="navbarNavDropdown-1" aria-expanded="false" aria-label="Toggle navigation" >
                <span class="navbar-toggler-icon"></span>
            </button>
        <div class="collapse navbar-collapse" id="navbarNavDropdown-1">
            <div class="col-lg-5">
                <form action="<?php echo base_url('search/hasil')?>" action="GET">
                        <ul class="navbar-nav md-12 .mr-auto">                                                        
                            <!-- <input type="text" class="form-control input-round"  id="search"placeholder="Search"> fa fa-search-->
                            
                                <div class="inputWithIcon">
                                    <input type="text" class ="form-control iput input-round" name="search"  placeholder="Cari Nama Event, Nama Penyelenggara, Tipe Event">
                                            <i class="fa fa fa-search fa-lg fa-fw" aria-hidden="true"></i>
                                    </div>    
                                <input type="submit" name="submit" value="Submit" hidden>                                                  
                        </ul>
                        </form>
                    </div>
            <ul class="navbar-nav ml-auto d-flex align-items-center">
                    <!-- <li class="nav-item active"><a class="nav-link" href="#home" id="home">HOME <span class="sr-only">(current)</span></a></li>
                    <li class="nav-item dropdown"><a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">CATEGORY</a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                            <a class="dropdown-item" href="soal.html">Soal</a>
                            <a class="dropdown-item" href="modul.html">Modul</a>
                            <a class="dropdown-item" href="jm.html">Jurnal/Makalah</a>
                        </div>
                        <li class="nav-item"><a class="nav-link" href="donate.html" id="donate">DONATE <span class="fa fa-heart"></span> </a></li>
                    </li> -->
            <!-- </ul> -->
            <!-- <ul class=""> -->
                    <li class="nav-item active" >
                    <span class="nav-link" ">
                    <a class="btn btn-info btn-round " href="<?php echo base_url('login')?>"><i class="fas fa-sign-in-alt"></i> LOGIN</a>  
                    </span>
                    </li>
            </ul>
        </div>
    </div>
    </nav><!-- Akhir Navbar -->
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-10">                
                    <div class="col-lg-12 info-panel">
                        <center><h3 class="card-title text-muted ">Regitrasi</h3></center>
                        <form action='<?php echo base_url('login/auth')?>' method="post">
                        <div class="form-group">
                                <h4 for="title" class="card-text text-muted font-weight-bold">Nama Organisasi :</h4>
                                <input type="text" class="form-control ipcyan" name="fullname" id="exampleInputPassword1" placeholder="Full Name" value="<?php echo set_value('fullname') ?>" >  
                                <?php echo form_error('fullname','<small class="text-danger pl-3">','</small>'); ?>
                        </div>
                            <div class="form-group">
                                <h4 for="title" class="card-text text-muted font-weight-bold">Email :</h4>
                                <input type="text" class="form-control ipcyan" name="emailreg"  id="exampleInputPassword1" placeholder="E-mail" value="<?php echo set_value('emailreg') ?>" >
                                <?php echo form_error('emailreg','<small class="text-danger pl-3">','</small>'); ?>
                            </div>
                            <div class="form-group">
                                <h4 for="title" class="card-text text-muted font-weight-bold">Password :</h4>
                                <input type="password" class="form-control ipcyan" id="password1" name="password1" placeholder="Password" >
                                <?php echo form_error('password1','<small class="text-danger pl-3">','</small>'); ?> 
                              </div>                              
                            <div class="form-group">
                                <h4 for="title" class="card-text text-muted font-weight-bold">Repeat Password :</h4>
                                <input type="password" class="form-control ipcyan" id="password2" name="password2" placeholder="Repeat Password"  >
                              </div>                                                          
                              <div class="text-center">
                                <button type="submit" name="tambah" class="btn btn-cyan text-light btn-lg btn-block w-100">DAFTAR</button>
                        </div>
                          </form>
                    </div>
    
                </div>
            </div>                
        </div>


       
    <!-- footer -->
<footer class="pb-5 pt-4 top bg-cyan sticky " >
        <div class="container">
            <div class="row justify-content-center text-center">
                <div class="col-md-12">			
                    <span class="d-block mt-3 text-black">©	2019 Anchor Bootstrap UI Kit, made with <i class="fas fa-heart text-danger"></i> by <a target="_blank" href="https://www.wowthemes.net">WowThemes.net</a>. 
                    </span>
                </div>
            </div>
        </div>
</footer>
            <!-- Akhir Footer -->

<!-- Javascript -->
<script src="<?php echo base_url();?>not_member(css)/assets/js/vendor/jquery.min.js" type="text/javascript"></script>
<script src="<?php echo base_url();?>not_member(css)/assets/js/vendor/popper.min.js" type="text/javascript"></script>
<script src="<?php echo base_url();?>not_member(css)/assets/js/vendor/bootstrap.min.js" type="text/javascript"></script>
<script src="<?php echo base_url();?>not_member(css)/assets/js/functions.js" type="text/javascript"></script>

<script>
    $('.carousel').on('slide.bs.carousel', function (event) { var height = $(event.relatedTarget).height(); var $innerCarousel = $(event.target).find('.carousel-inner'); $innerCarousel.animate({ height: height }); });
</script>

</body>
    
</html>

