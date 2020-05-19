<?php 
    $active='Shop';
    include 'navigation/header.php';
?>

<div id="content">

    <div class="container">
    
        <div class="col-md-12">

            <ul class="breadcrumb"><!-- breadcrumb Begin -->
                <li>
                    <a href="index.php">Home</a>
                </li>
                <li>
                    <a href="shop.php">Shop</a>
                </li>
                <li>
                    <a href="shop.php?device=<?php echo $device_id; ?>"><?php echo $device_title; ?></a>
                </li>
                <li>
                    <?php echo $product_title; ?>
                </li>

            </ul><!-- breadcrumb Finish -->

        </div>
        
        <div class="col-md-3"><!-- col-md-2 Begin -->
    
            <?php 

                include("navigation/sidebar.php");

            ?>
                
        </div><!-- col-md-2 Begin -->
        
        <div class="col-md-9"><!-- col-md-9 Begin -->
               <div id="productMain" class="row"><!-- row Begin -->
                   <div class="col-sm-9"><!-- col-sm-6 Begin -->
                       <h1 class="text-center"><?php echo $product_title; ?></h1>
                       <div id="mainImage"><!-- #mainImage Begin -->
                           <div id="myCarousel" class="carousel slide" data-ride="carousel"><!-- carousel slide Begin -->
                               <div class="carousel-inner">
                                   <div class="item active">
                                       <center><img class="img-responsive" src="images/Product-Images/<?php echo $product_img1; ?>" alt="Product 3-a"></center>
                                   </div>
                                   <div class="item">
                                       <center><img class="img-responsive" src="images/Product-Images/<?php echo $product_img2; ?>" alt="Product 3-b"></center>
                                   </div>
                                   <div class="item">
                                       <center><img class="img-responsive" src="images/Product-Images/<?php echo $product_img3; ?>" alt="Product 3-c"></center>
                                   </div>
                               </div>
                               
                               <ol class="carousel-indicators"><!-- carousel-indicators Begin -->
                                   <li data-target="#myCarousel" data-slide-to="0" class="active" ></li>
                                   <li data-target="#myCarousel" data-slide-to="1"></li>
                                   <li data-target="#myCarousel" data-slide-to="2"></li>
                               </ol><!-- carousel-indicators Finish -->
                               
                               <a href="#myCarousel" class="left carousel-control" data-slide="prev"><!-- left carousel-control Begin -->
                                   <span class="glyphicon glyphicon-chevron-left"></span>
                                   <span class="sr-only">Previous</span>
                               </a><!-- left carousel-control Finish -->
                               
                               <a href="#myCarousel" class="right carousel-control" data-slide="next"><!-- right carousel-control Begin -->
                                   <span class="glyphicon glyphicon-chevron-right"></span>
                                   <span class="sr-only">Previous</span>
                               </a><!-- right carousel-control Finish -->
                               
                           </div><!-- carousel slide Finish -->
                       </div><!-- mainImage Finish -->
                   </div><!-- col-sm-6 Finish -->
                   
                   <div class="col-sm-4"><!-- col-sm-6 Begin -->
                       <div class="box-details"><!-- box Begin -->

                           <form action="cart.php?<?php echo "product_id=$product_id"; ?>" class="form-horizontal" method="post"><!-- form-horizontal Begin -->
                               
                               <p class="price">$ <?php echo $product_price; ?></p>
                               
                               <p class="text-center buttons"><button class="btn btn-primary i fa fa-shopping-cart"> Add to cart</button></p>
                               
                           </form><!-- form-horizontal Finish -->
                           
                       </div><!-- box Finish -->
                       
                   </div><!-- col-sm-6 Finish -->
                   
               </div><!-- row Finish -->
               
               <div id="row same-heigh-row"><!-- #row same-heigh-row Begin -->
               
                    <div class="box-2"><!-- box same-height headline Begin -->
                    
                        <h3 class="text-center">You May Also Need</h3>
                
                    </div><!-- box same-height headline Finish -->

               </div><!-- #row same-heigh-row Finish -->
               
           </div><!-- col-md-9 Finish -->
        
    </div>
    
</div>

<?php 
    include 'navigation/footer.php';
?>