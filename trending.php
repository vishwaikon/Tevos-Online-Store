<?php
    session_start();
    $message=[];
    include('dbconnection.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="static/bootstrap-5.1.1-dist/css/bootstrap.min.css">
    <script src="static/bootstrap-5.1.1-dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="static/css/style.css">
    <title>Trevos::Products</title>
</head>
<body>
    <main role="main" class="container">
        <?php include'includes/navbar.php'; ?>

        <hr class=" col-8 offset-2 mb-3">
        <h5 class="text-center"><strong>Trending products</strong></h5>
        <section class="text-center mt-5 mb-5">
            
            <div class="ms-lg-5 ps-lg-5">

                <div class="row">
                 
                    <div class="col-lg-2 col-md-6 mb-5">
                      
                            <div class="card">
                           
                            <img src="media/images/lenovotab.jpg" alt="Lenovo Tab" >
                       
                            <div class="card-body text-center">
                                <h5><strong>Lenovo Tablet</strong></h5>
                                <h6 class="orange"><strong>$200</strong></h6>
                            </div>
                           
                        </div>
                       
                    </div>
                  
                    <div class="col-lg-2 col-md-5 offset-lg-1 mb-5">
                        
                        <div class="card">
                      
                            <img src="media/images/m1_macbook.jfif" alt="Macbook" >
                           
                            <div class="card-body text-center">
                                <h5><strong>Macbook M1 Pro</strong></h5>
                                <h6 class="orange"><strong>$900</strong></h6>
                            </div>
                            
                        </div>
                   
                    </div>
                
                    <div class="col-lg-2 col-md-5 offset-lg-1 mb-5">
                       
                        <div class="card">
                          
                            <img src="media/images/Smart_Watch.jpg" alt="Smart Watch" >
                           
                            <div class="card-body text-center">
                                <h5><strong>Smart watch</strong></h5>
                                <h6 class="orange"><strong>$100</strong></h6>
                            </div>
                          
                        </div>
                      
                    </div>
             
                    <div class="col-lg-2 col-md-5 offset-lg-1 mb-5">
                      
                        <div class="card">
                            
                            <img src="media/images/Beats_Headphone.jpg" alt="Beast Headphones" >
                          
                            <div class="card-body text-center">
                                <h5><strong>Beats Headphone</strong></h5>
                                <h6 class="orange"><strong>$240</strong></h6>
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