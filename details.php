<?php 
    $active='Shop';
    include 'navigation/header.php';
?>

<?php

    $product_id = $_GET['product_id'];
    
    $get_product = "select * from product where product_url='$product_id'";
    
    $run_product = mysqli_query($con,$get_product);

    $check_product = mysqli_num_rows($run_product);
    
    $row_products = mysqli_fetch_array($run_product);
    
    $device_id = $row_products['device_id'];

    $type_id = $row_products['type_id'];
    
    $pro_title = $row_products['product_title'];

    $pro_url = $row_products['product_url'];
    
    $pro_price = $row_products['product_price'];
    
    $pro_desc = $row_products['product_desc'];
    
    $pro_img1 = $row_products['product_image1'];
    
    $pro_img2 = $row_products['product_image2'];
    
    $pro_img3 = $row_products['product_image3'];

    $get_device = "select * from by_device where device_id='$device_id'";
    
    $run_device = mysqli_query($con,$get_device);
    
    $row_device = mysqli_fetch_array($run_device);
    
    $device_title = $row_device['device_title'];

    $get_type = "select * from by_type where type_id='$type_id'";
    
    $run_type = mysqli_query($con,$get_type);
    
    $row_type = mysqli_fetch_array($run_type);
    
    $type_title = $row_type['type_title'];

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
                    <?php echo $pro_title; ?>
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
                       <h1 class="text-center"><?php echo $pro_title; ?></h1>
                       <div id="mainImage"><!-- #mainImage Begin -->
                           <div id="myCarousel" class="carousel slide" data-ride="carousel"><!-- carousel slide Begin -->
                               <div class="carousel-inner">
                                   <div class="item active">
                                       <img class="img-responsive" src="images/Product-Images/<?php echo $pro_img1; ?>" alt="Product 3-a">
                                   </div>
                                   <div class="item">
                                       <img class="img-responsive" src="images/Product-Images/<?php echo $pro_img2; ?>" alt="Product 3-b">
                                   </div>
                                   <div class="item">
                                       <img class="img-responsive" src="images/Product-Images/<?php echo $pro_img3; ?>" alt="Product 3-c">
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
                                   <span class="sr-only">Next</span>
                               </a><!-- right carousel-control Finish -->
                               
                           </div><!-- carousel slide Finish -->
                       </div><!-- mainImage Finish -->
                   </div><!-- col-sm-6 Finish -->
                   
                   <div class="col-sm-6"><!-- col-sm-6 Begin -->
                       <div class="box-details"><!-- box Begin -->

                           <?php add_cart(); ?>

                           
                           
                           <form action="details.php?add_cart=<?php echo $pro_url; ?>" class="form-horizontal" method="post"><!-- form-horizontal Begin -->
                               
                           <div class="form-group">
                                    <label class="col-md-5 control-label">Share Product</label>

                                    <!-- Load Facebook SDK for JavaScript -->
                                  <div id="fb-root"></div>
                                      <script>(function(d, s, id) {
                                        var js, fjs = d.getElementsByTagName(s)[0];
                                        if (d.getElementById(id)) return;
                                        js = d.createElement(s); js.id = id;
                                        js.src = "https://connect.facebook.net/en_US/sdk.js#xfbml=1&version=v3.0";
                                        fjs.parentNode.insertBefore(js, fjs);
                                      }(document, 'script', 'facebook-jssdk'));</script>
                                    
                                
                                <div class="col-md-7">
                                  
                                    <!-- Your twitter share button code -->
                                    
                                    <a href="https://twitter.com/share?hashtags=https://a-choice.000webhostapp.com/Genuine-Sony-Xperia-Z1-Charging-Dock-DK31" class="twitter-share-button" data-size="large" data-show-count="false">Tweet</a><script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script>
                                    
                                    <!-- Your facebook share button code -->
                                    <div class="fb-share-button"
                                        data-href="https://a-choice.000webhostapp.com/Genuine-Sony-Xperia-Z1-Charging-Dock-DK31" 
                                        data-layout="button" 
                                        data-size="large">
                                    </div>
                                  
                                </div>

                            </div>
                                </div>

                               <div class="form-group">
                                    <label class="col-md-5 control-label">Products Quantity</label>

                                    <div class="col-md-7">
                                        <select name="product_qty" id="" class="form-control">
                                            <option>1</option>
                                            <option>2</option>
                                            <option>3</option>
                                            <option>4</option>
                                        </select>
                                    </div>
                                </div>

                               <p class="price">$ <?php echo $pro_price; ?></p>
                               
                               <p class="text-center buttons"><button class="btn btn-primary i fa fa-shopping-cart"> Add to cart</button></p>   

                           </form><!-- form-horizontal Finish -->
                           
                       </div><!-- box Finish -->
                       
                   </div><!-- col-sm-6 Finish -->
                   
               </div><!-- row Finish -->
               
               <div id="row same-heigh-row"><!-- #row same-heigh-row Begin -->
               
                    <div class="box-2"><!-- box same-height headline Begin -->
                    
                        <h3 class="text-center">You May Also Need</h3>
                
                    </div><!-- box same-height headline Finish -->

                    <?php 
                   
                    $get_products = "select * from product order by rand() LIMIT 0,4";
                   
                    $run_products = mysqli_query($con,$get_products);
                   
                    while($row_products=mysqli_fetch_array($run_products)){
                       
                       $pro_id = $row_products['product_id'];
                       
                       $pro_title = $row_products['product_title'];

                       $pro_url = $row_products['product_url'];
                       
                       $pro_price = $row_products['product_price'];
                       
                       $pro_img1 = $row_products['product_image1'];

                       $pro_img2 = $row_products['product_image2'];

                       $pro_img2 = $row_products['product_image3'];
                       
                       echo "
                       
                        <div class='col-md-3 col-sm-6 center-responsive'><!-- col-md-3 col-sm-6 center-responsive Begin -->
                        <div class='product same-height'><!-- product same-height Begin -->
                            <a href='$pro_url'>
                                <img class='img-responsive' src='images/Product-Images/$pro_img1' alt='Product 6'>
                                </a>
                                
                                <div class='text'><!-- text Begin -->
                                    <h3><a href='$pro_url'> $pro_title </a></h3>
                                    
                                    <p class='price'>$$pro_price</p>
                                    
                                </div><!-- text Finish -->
                                
                            </div><!-- product same-height Finish -->
                        </div><!-- col-md-3 col-sm-6 center-responsive Finish -->
                   
                       ";
                       
                    }
                   
                   ?>

               </div><!-- #row same-heigh-row Finish -->
               
           </div><!-- col-md-9 Finish -->
        
    </div>
    
</div>

<?php 
    include 'navigation/footer.php';
?>
