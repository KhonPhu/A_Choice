<?php 
    $active='Home';
    include 'navigation/header.php';
    include ("db/db.php");
?>
    
<body>
    
    <div class="carousel slide" id="myCarousel" data-ride="carousel"><!-- carousel slide Begin -->

        <ol class="carousel-indicators"><!-- carousel-indicators Begin -->
                   
            <li class="active" data-target="#myCarousel" data-slide-to="0"></li>
            <li data-target="#myCarousel" data-slide-to="1"></li>
            <li data-target="#myCarousel" data-slide-to="2"></li>
            <li data-target="#myCarousel" data-slide-to="3"></li>
               
        </ol><!-- carousel-indicators Finish -->
               
        <div class="carousel-inner"><!-- carousel-inner Begin -->
                   
            <?php
            
            // First Carousel Image
                $get_carousel = "select * from carousel LIMIT 0,1";
            
                $run_carousel = mysqli_query($con,$get_carousel);
            
                while($row_carousel=mysqli_fetch_array($run_carousel)){
                    
                    $carousel_name = $row_carousel['carousel_name'];
                    $carousel_image = $row_carousel['carousel_image'];
                    
                    echo "
                    
                        <div class='item active'>
                        
                            <img src='images/slides_images/$carousel_image'>
                        
                        </div>
                    
                    ";
                    
                }
            
            // Other Carousel Images
            $get_carousel = "select * from carousel LIMIT 1,3";
            
                $run_carousel = mysqli_query($con,$get_carousel);
            
                while($row_carousel=mysqli_fetch_array($run_carousel)){
                    
                    $carousel_name = $row_carousel['carousel_name'];
                    $carousel_image = $row_carousel['carousel_image'];
                    
                    echo "
                    
                        <div class='item'>
                        
                            <img src='images/slides_images/$carousel_image'>
                        
                        </div>
                    
                    ";
                    
                }
            
            ?>
               
        </div><!-- carousel-inner Finish -->
               
        <a href="#myCarousel" class="left carousel-control" data-slide="prev"><!-- left carousel-control Begin -->
                   
            <span class="glyphicon glyphicon-chevron-left"></span>
            <span class="sr-only">Previous</span>
               
        </a><!-- left carousel-control Finish -->
               
        <a href="#myCarousel" class="right carousel-control" data-slide="next"><!-- left carousel-control Begin -->
                   
            <span class="glyphicon glyphicon-chevron-right"></span>
            <span class="sr-only">Next</span>
                
        </a><!-- right carousel-control Finish -->
           
       </div><!-- carousel slide Finish -->
    
   <div id="content"><!-- #content Begin -->
       
       <div class="jumbotron" id="hot"><!-- #hot Begin -->
       
               <div class="box"><!-- box Begin -->

                   <div class="container"><!-- container Begin -->

                       <div class="col-md-12"><!-- col-md-12 Begin -->

                           <h2>
                               New Release
                           </h2>
                       </div><!-- col-md-12 Finish -->

                   </div><!-- container Finish -->

               </div><!-- box Finish -->
       
           </div><!-- #hot Finish -->
       
       <div class="container"><!-- container Begin -->

           <div id="content" class="container"><!-- container Begin -->

               <div class="row"><!-- row Begin -->
                       
                    <?php getPro(); ?>
                   
               </div><!-- row Finish -->

           </div><!-- container Finish -->
               
           <div id="content" class="container"><!-- container Begin -->
               
               <div class="jumbotron" id="hot"><!-- #hot Begin -->
       
                   <div class="box"><!-- box Begin -->

                       <div class="container"><!-- container Begin -->

                           <div class="col-md-12"><!-- col-md-12 Begin -->

                               <h2>
                                   Shop By Brands
                               </h2>
                               
                           </div><!-- col-md-12 Finish -->

                       </div><!-- container Finish -->

                   </div><!-- box Finish -->
       
               </div><!-- #hot Finish -->

               <div class="row"><!-- row Begin -->
                       
                   <div class="col-md-3">
        
                       <div class="brand-logo">

                           <a href="shop.php?device=1"><img class="img-responsive" src="images/Device/Apple.png"></a>
                           
                       </div>
                       
                   </div>
                       
                   <div class="col-md-3">
        
                       <div class="brand-logo">

                           <a href="shop.php?device=2"><img class="img-responsive" src="images/Device/Samsung.png"></a>
                           
                       </div>
                       
                   </div>
                       
                   <div class="col-md-3">
        
                       <div class="brand-logo">

                           <a href="shop.php?device=3"><img class="img-responsive" src="images/Device/BlackBerry.png"></a>
                           
                       </div>
                       
                   </div>
                       
                   <div class="col-md-3">
        
                       <div class="brand-logo">

                           <a href="shop.php?device=4"><img class="img-responsive" src="images/Device/Huawei.png"></a>
                           
                       </div>
                       
                   </div>
                   
                   <div class="col-md-3">
        
                       <div class="brand-logo">

                           <a href="shop.php?device=8"><img class="img-responsive" src="images/Device/HTC.jpg"></a>
                           
                       </div>
                       
                   </div>

                   <div class="col-md-3">
        
                       <div class="brand-logo">

                           <a href="shop.php?device=6"><img class="img-responsive" src="images/Device/Google.jpg"></a>
                           
                       </div>
                       
                   </div>

                   <div class="col-md-3">
        
                       <div class="brand-logo">

                           <a href="shop.php?device=5"><img class="img-responsive" src="images/Device/Sony.jpg"></a>
                           
                       </div>
                       
                   </div>

                   <div class="col-md-3">
        
                       <div class="brand-logo">

                           <a href="shop.php?device=7"><img class="img-responsive" src="images/Device/Motorola.jpg"></a>
                           
                       </div>
                       
                   </div>
               </div><!-- row Finish -->

           </div><!-- container Finish -->
           
           </div><!-- col-md-9 Finish -->
           
       </div>
    
</body>

<?php
    include 'navigation/footer.php';
?>

    