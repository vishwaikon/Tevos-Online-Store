<?php
    session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="static/bootstrap-5.1.1-dist/css/bootstrap.min.css">
    <script src="static/bootstrap-5.1.1-dist/js/bootstrap.bundle.min.js"></script>
    <script src="static/bootstrap-5.1.1-dist/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="static/css/style.css">
    <title>Tevos::Electronic Store</title>
</head>
<body>
    <main role="main" class="container">
        <?php include'includes/navbar.php'; ?>
        <?php include'includes/flashMessage.php'; ?>
        
        
        <div id="carouselExampleControls" class="carousel carousel-dark slide carousel-fade mb-5" data-bs-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="media/images/Smart_Watch.jpg" class="d-block w-20" alt="Smart Watch">
                    <h5 class="text-center mt-4"><strong>Smart Watch</strong></h>
                    <h6 class="text-center orange"><strong>$100</strong></h6>
                </div>
                <div class="carousel-item">
                    <img src="media/images/Mavic_Digi_i.jpg" class="d-block w-20" alt="Mavic Digi i">
                    <h5 class="text-center mt-4"><strong>Mavic Digi Drone</strong></h5>
                    <h6 class="text-center orange"><strong>$900</strong></h6>
                </div>
                <div class="carousel-item">
                    <img src="media/images/Beats_Headphone.jpg" class="d-block w-20" alt="Beats Headphones">
                    <h5 class="text-center mt-4"><strong>Beats Headphones</strong></h5>
                    <h6 class="text-center orange"><strong>$240</strong></h6>
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>

        
        <section class="text-center mb-5">
            <hr class=" col-8 offset-2 mb-3">
            <h4 class="ht-brands mb-4"><strong>Hot Products</strong></h4>
            
            <div class="ms-lg-5 ps-lg-5">
                
                <div class="row">
                    
                    <div class="col-lg-2 col-md-6 mb-5">
                        
                            <div class="card">
                            
                            <img src="media/images/samsungfold.jpg" alt="Samsung fold" >
                            
                            
                            <div class="card-body text-center">
                                <h5><strong>Sasung Fold</strong></h5>
                                <h6 class="orange"><strong>$400</strong></h6>
                            </div>
                           
                        </div>
                    
                    </div>
                    
                    <div class="col-lg-2 col-md-5 offset-lg-1 mb-5">
                    
                        <div class="card">
                          
                            <img src="media/images/Beats_Headphone.jpg" alt="Beats Headphones" >
                          
                            <div class="card-body text-center">
                                <h5><strong>Beats Headphone</strong></h5>
                                <h6 class="orange"><strong>$240</strong></h6>
                            </div>
                      
                        </div>
                   
                    </div>
                   
                    <div class="col-lg-2 col-md-5 offset-lg-1 mb-5">
                 
                        <div class="card">
                            
                            <img src="media/images/m1_macbook.jfif" alt=" Macbook" >
                           
                            <div class="card-body text-center">
                                <h5><strong>Mackbook pro M1</strong></h5>
                                <h6 class="orange"><strong>$900</strong></h6>
                            </div>
                    
                        </div>
                     
                    </div>
              
                    <div class="col-lg-2 col-md-5 offset-lg-1 mb-5">
                       
                        <div class="card">
                   
                            <img src="media/images/Smart_Watch.jpg" alt=" Smart Watch" >
                       
                            <div class="card-body text-center">
                                <h5><strong>Smart Watch</strong></h5>
                                <h6 class="orange"><strong>$100</strong></h6>
                            </div>
                           
                        </div>
                       
                    </div>
                 
                </div>
                
            </div>
           
        </section>
    </main>
    <?php include'includes/footer.php'; ?>

</body>
</html>