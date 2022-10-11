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
                <?php
                      foreach ($data as $e ):
                ?>                
                <div class="card shadow-sm border-0 mt-2">
                    <img class="card-img-top" src="<?php echo base_url();?>member(css)/poster/<?php echo $e->poster ?>" alt="Card image cap">
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
                    <nav>
                        <div class="nav nav-tabs nav justify-content-center" id="nav-tab" role="tablist">
                          <a class="nav-item nav-link active" id="nav-home-tab" data-toggle="tab" href="#nav-home" role="tab" aria-controls="nav-home" aria-selected="true">Dekripsi Event</a>
                          <a class="nav-item nav-link" id="nav-profile-tab" data-toggle="tab" href="#nav-profile" role="tab" aria-controls="nav-profile" aria-selected="false">Info Tiket</a>
                        </div>
                      </nav>
                      <div class="tab-content" id="nav-tabContent">
                        <div class="tab-pane fade show active" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab">
                        <?php echo $e->deksp ?>
                        </div>
                        <div class="tab-pane fade" id="nav-profile" role="tabpanel" aria-labelledby="nav-profile-tab">                                                        
                            <form action="<?php echo base_url()?>order/index/<?php echo $e->id_event;?>/<?php echo $e->id_py;?>" method="POST">
                                <div class="col-lg-12 mt-4">
                                    <div class="row">                                                                            
                                        <div class="col-lg-5">
                                            <div class="toket">
                                            <div class="row">
                                            <div class="col-lg-4">
                                                    Tiket 
                                                </div>
                                                <div class="col-lg 6 ml-3">
                                                <?php  
                                                            $str = $e->nama_event;
                                                            if (strlen($str) > 12){
                                                               $str = substr($str, 0, 13) . '...';
                                                            }
                                                            echo $str;
                                                ?>
                                                </div>
                                            </div>
                                            </div>
                                        </div>                
                                        <div class="col-lg-3 mt-3">                                            
                                                <h4 class="card-text font-weight-bold text-muted">* Rp.<?php echo $e->harga ?></h4>                                            
                                        </div>   
                                        <div class="col-lg-3 mt-3">
                                                <input type="number" id="qty" name="qty" step="1" placeholder="QTY" min="1" max="<?php echo $e->qty ?>">                
                                        </div>
                                    </div>
                                   <div class="col-lg-12 mt-4">
                                    <button type="submit" class="btn btn-cyan btn-round btn-block shadow-sm">Pesan</button>
                                   </div>
                                </div>  
                            </form>     
                            <?php endforeach; ?>                     
                        </div>                        
                      </div>                                            
        
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
<script src="<?php echo base_url();?>not_member(css)/assets/js/vendor/jquery.min.js" type="text/javascript"></script>
<script src="<?php echo base_url();?>not_member(css)/assets/js/vendor/popper.min.js" type="text/javascript"></script>
<script src="<?php echo base_url();?>not_member(css)/assets/js/vendor/bootstrap.min.js" type="text/javascript"></script>
<script src="<?php echo base_url();?>not_member(css)/assets/js/functions.js" type="text/javascript"></script>

<script>
    $('.carousel').on('slide.bs.carousel', function (event) { var height = $(event.relatedTarget).height(); var $innerCarousel = $(event.target).find('.carousel-inner'); $innerCarousel.animate({ height: height }); });
</script>
<script>

// $(function(){
//         $('#qty').on('change',function(){
//               alert($(this).val());
//         });
//     })

</script>

</body>
        