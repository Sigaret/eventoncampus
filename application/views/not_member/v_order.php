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

        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-10"> 
                    <!-- Simple Card -->
                    <?php
                      foreach ($data as $e ):
                    ?>   
                    <div class="card shadow-sm border-4 mt-2">
                        
                        <div class="card-body">
                            <h3 class="card-title font-weight-bold"><?php echo $e->nama_event ?></h3>
                            <p class="card-text text-muted">
                            <?php echo $e->type_event ?>
                            </p>
                            <hr>
                            <div class="row ">
                                <div class="col-lg-4 ">
                                    <p class="card-text text-muted font-weight-bold"> Di Selenggarakan :</p>
                                    <img class="rounded-circle shadow ml-3" src="<?php echo base_url();?>member(css)/profile/<?php echo $e->foto_prof ?>" width="100">
                                    <!-- <br><p class="card-text">John Doe</p> -->
                                </div>
                                <div class="col-lg-4">
                                    <p class="card-text text-muted font-weight-bold"> Tanggal dan Waktu :</p>
                                    <p class="card-text text-left text-muted  ">
                                        <i class="fa fa fa-calendar fa-md" aria-hidden="true"></i>
                                        <?php echo $e->tanggal ?>
                                    </p>
                                    <p class="card-text text-left text-muted ">
                                        <i class="fa fa fa-clock fa-md" aria-hidden="true"></i>
                                        <?php echo $e->waktu ?>
                                    </p>
                                </div>
                                <div class="col-lg-4">
                                    <p class="card-text text-muted font-weight-bold"> Lokasi :</p>
                                    <p class="card-text text-left text-muted ">
                                        <i class="fa fa fa-map fa-md" aria-hidden="true"></i>
                                        <?php echo $e->lokasi ?>
                                    </p>
                                </div>
                            </div>                       
                        </div>
                    </div>
                    <div class="col-lg-12 info-panel">
                        <h3 class="card-title text-muted ">Personal Info</h3>
                        <?= $this->session->flashdata('message'); ?>  
                        <form action='<?php echo base_url()?>order/index/<?php echo $e->id_event;?>/<?php echo $e->id_py;?>' method="post">
                            <div class="form-group">
                              <h4 for="title" class="card-text text-muted font-weight-bold">Nama Lengkap :</h4>
                              <input  type="hidden" name="qty" value="<?php echo $qty ?>">
                              <input  type="hidden" name="jumlah" value="<?php echo $jumlah ?>">
                              <input type="text" name="nama_lkp" id="nama_lkp"  class="form-control ipcyan" placeholder="">
                              <?php echo form_error('nama_lkp','<small class="text-danger pl-3">','</small>'); ?>
                            </div>
                            <div class="form-group">
                                <h4 for="title" class="card-text text-muted font-weight-bold">Email :</h4>
                                <input type="text" name="email" name="email" class="form-control ipcyan" placeholder="">
                                <?php echo form_error('email','<small class="text-danger pl-3">','</small>'); ?>
                              </div>
                            <div class="form-group">
                                <h4 for="title" class="card-text text-muted font-weight-bold">No Wa :</h4>
                                <input type="text" name="nowa" class="form-control ipcyan" id="nowa"  onkeypress='validate(event)' placeholder="">
                                <?php echo form_error('nowa','<small class="text-danger pl-3">','</small>'); ?>
                              </div>                                                          
                              <h4 class="card-title text-muted ">Pilih Bank Di Bawah Ini :</h4>
                              <div class="form-group">                                       
                                    <div class="paymentWrap">
                                        <div class="btn-group paymentBtnGroup btn-group-justified" data-toggle="buttons">
                                            <?php                                                 
                                                foreach ($datab as $bb):                                                                                                                                                                                                
                                                     if ($bb->nama_bank == 'BCA'):  ?>
                                                        <label class="btn paymentMethod active">                                                
                                                            <div class="method visa"></div>
                                                            <input type="radio" name="options" value="<?php echo $bb->id_bank?>" > 
                                                        </label>
                                                   <?php elseif ($bb->nama_bank == 'BRI'): ?>
                                                        <label class="btn paymentMethod">
                                                            <div class="method master-card"></div>
                                                            <input type="radio" name="options" value="<?php echo $bb->id_bank?>"> 
                                                        </label>
                                                     <?php elseif ($bb->nama_bank == 'MANDIRI'): ?>
                                                        <label class="btn paymentMethod">
                                                            <div class="method amex"></div>
                                                            <input type="radio" name="options" value="<?php echo $bb->id_bank?>">
                                                        </label>
                                                     <?php elseif ($bb->nama_bank == 'BNI'): ?>
                                                        <label class="btn paymentMethod">
                                                            <div class="method vishwa"></div>
                                                            <input type="radio" name="options" value="<?php echo $bb->id_bank?>">
                                                        </label>
                                                     <?php else : ?>
                                                        -
                                                     <?php endif;?>                                                     
                                                <?php endforeach;?>
                                        </div>        
                                    </div>   
                                    <?php echo form_error('options','<small class="text-danger pl-3">','</small>'); ?>                                      
                              </div>
                              <div class="form-group">
                                <h4 class="card-title text-muted ">Pemesanan Kamu :</h4>   
                                <!-- table -->
                                        <table class="table">
                                            <thead class="thead-white">
                                            <tr>                                                
                                                <th scope="col"> Tiket Yang Di pIlih	</th>
                                                <th scope="col"> Jumlah	</th>
                                                <th scope="col"> Harga	</th>
                                            </tr>
                                            </thead>
                                            <tbody>
                                            <tr>                                                
                                                <td> 
                                                <?php  
                                                            $str = $e->nama_event;
                                                            if (strlen($str) > 12){
                                                               $str = substr($str, 0, 13) . '...';
                                                            }
                                                            echo $str;
                                                ?>
                                                </td>
                                                <td> <?php 
                                                    
                                                        echo $qty;                                                    
                                                ?>
                                                </td>
                                                <td> <?php echo $harga ?> </td>
                                            </tr>
                                            <tr>                                                
                                                <td colspan="2"> Total Pemayaran    </td>
                                                <td> <?php echo $jumlah ?> </td>                                                
                                            </tr>
                                            </tbody>
                                        </table>
                              </div>
                              <div class="text-center">
                                <button type="submit" name="tambah" class="btn btn-cyan text-light btn-lg btn-block w-100">BELI TIKET</button>
                        </div>
                          </form>
                    </div>
                    <?php endforeach; ?>    
                </div>
            </div>                
        </div>

       
    <!-- footer -->
<!-- <footer class="pb-5 pt-4 top bg-cyan sticky " >
        <div class="container">
            <div class="row justify-content-center text-center">
                <div class="col-md-12">			
                    <span class="d-block mt-3 text-black">©	2019 Anchor Bootstrap UI Kit, made with <i class="fas fa-heart text-danger"></i> by <a target="_blank" href="https://www.wowthemes.net">WowThemes.net</a>. 
                    </span>
                </div>
            </div>
        </div>
</footer> -->
            <!-- Akhir Footer -->

<!-- Javascript -->
<script src="<?php echo base_url();?>not_member(css)/assets/js/vendor/jquery.min.js" type="text/javascript"></script>
<script src="<?php echo base_url();?>not_member(css)/assets/js/vendor/popper.min.js" type="text/javascript"></script>
<script src="<?php echo base_url();?>not_member(css)/assets/js/vendor/bootstrap.min.js" type="text/javascript"></script>
<script src="<?php echo base_url();?>not_member(css)/assets/js/functions.js" type="text/javascript"></script>

<script>
    $('.carousel').on('slide.bs.carousel', function (event) { var height = $(event.relatedTarget).height(); var $innerCarousel = $(event.target).find('.carousel-inner'); $innerCarousel.animate({ height: height }); });
</script>
<script>
  function validate(evt) {
  var theEvent = evt || window.event;

  // Handle paste
  if (theEvent.type === 'paste') {
      key = event.clipboardData.getData('text/plain');
  } else {
  // Handle key press
      var key = theEvent.keyCode || theEvent.which;
      key = String.fromCharCode(key);
  }
  var regex = /[0-9]|\./;
  if( !regex.test(key) ) {
    theEvent.returnValue = false;
    if(theEvent.preventDefault) theEvent.preventDefault();
  }
}
</script>
</body>
    
</html>

