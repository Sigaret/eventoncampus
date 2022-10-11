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
                <div class="row">
                <!-- Simple Card -->
                <?php
                      foreach ($datap as $pp ):
                            foreach ($datab as $bb ):
                    ?>   
                <div class="card shadow-sm border-0 mt-2">                    
                    <div class="card-body">
                        <a href="<?php echo base_url('Home')?>"><p class="card-text text-muted"><i class="fas fa-backward" ></i> Back To Home</p></a>
                        <h3 class="card-title font-weight-bold">Terima Kasih Atas Pemesan Anda</h3>
                        <p class="card-text text-muted">
                        Silahkan lakukan Transfer pembayaran sebesar Rp.<?php echo $pp->total ?> ke rekening di bawah ini   <br>
                        Mohon transfer tepat sesuai nilai yang di minta jangan dibulakan agar memudahkan croscek data pembayaran.
                        Invoice ini juga kita kirim ke Email Anda.                            
                        </p>              
                        <div class="col-lg-6">                                
                            <table class="table">                                                                
                                <tr>                                                
                                    <td > No Rekening</td>
                                    <td class="font-weight-bold" > <?php echo $bb->no_rek ?></td>                                    
                                </tr>                                                                
                                <tr>                                                
                                    <td> Atas Nama </td>
                                    <td class="font-weight-bold" >  <?php echo $bb->atas_nama ?> </td>                                    
                                </tr>
                                <tr>                                                
                                    <td> Jumlah Transfer</td>
                                    <td class="font-weight-bold" > <?php echo $pp->total ?>  </td>                                                                    
                                <tr>
                                <tr>                                                
                                    <td> Invoice	  </td>
                                    <td class="font-weight-bold" > <?php echo $pp->kode_pemesanan ?>  </td>                                                                    
                                <tr>                                                                                                                                                                                                                                                                          
                            </table>                                                                                
                        </div>    
                        <div class="col-lg-6">                            
                                <?php
                                $generator = new Picqer\Barcode\BarcodeGeneratorPNG();
                                echo '<img src="data:image/png;base64,' . base64_encode($generator->getBarcode($pp->kode_pemesanan, $generator::TYPE_CODE_128)) . '">';
                                ?>
                        </div>           
                </div>
                </div> 
                <?php 
                    endforeach;
                endforeach; ?>  
            </div>
            </div>
        </div>                
    </div>
    <!-- minimal footer -->
<!--     
        <footer class="bg-gray pb-5 pt-4 stiky fixed-bottom ">
                <div class="row justify-content-center text-center">
                    <div class="col-lg-12">			
                            <div class="ml-5">
                            <p class="card-text text-left text-muted  ">
                                <i class="fas fa-ticket-alt fa-4x" aria-hidden="true"></i>
                                
                            </p>                        
                    </div>
                </div>
        </footer> -->


    
<!-- Javascript -->
<!-- Javascript -->
<script src="<?php echo base_url();?>not_member(css)/assets/js/vendor/jquery.min.js" type="text/javascript"></script>
<script src="<?php echo base_url();?>not_member(css)/assets/js/vendor/popper.min.js" type="text/javascript"></script>
<script src="<?php echo base_url();?>not_member(css)/assets/js/vendor/bootstrap.min.js" type="text/javascript"></script>
<script src="<?php echo base_url();?>not_member(css)/assets/js/functions.js" type="text/javascript"></script>

<script>
    $('.carousel').on('slide.bs.carousel', function (event) { var height = $(event.relatedTarget).height(); var $innerCarousel = $(event.target).find('.carousel-inner'); $innerCarousel.animate({ height: height }); });
</script>

</body>
        