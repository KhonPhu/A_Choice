<?php
    session_start();
    include ("db/db.php");
    include ("function/function.php");
?>

<?php
    
if(isset($_GET['product_id'])){
        
        $product_id = $_GET['product_id'];
        
        $get_product = "select * from product where product_id = '$product_id'";
        
        $run_product = mysqli_query($con,$get_product);
        
        $row_product = mysqli_fetch_array($run_product);
        
        $device_id = $row_product['device_id'];
    
        $product_title = $row_product['product_title'];
    
        $product_price = $row_product['product_price'];
    
        $product_desc = $row_product['product_desc'];
    
        $product_img1 = $row_product['product_image1'];
    
        $product_img2 = $row_product['product_image2'];
    
        $product_img3 = $row_product['product_image3'];
    
        $get_device = "select * from by_device where device_id = '$device_id'";
        
        $run_device = mysqli_query($con,$get_device);
        
        $row_device = mysqli_fetch_array($run_device);
        
        $device_title = $row_device['device_title'];
}

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>A Choice</title>
    <link rel="stylesheet" href="https://code.jquery.com/ui/1.10.3/themes/smoothness/jquery-ui.css" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="font-awsome/css/font-awesome.min.css">
    <link rel="stylesheet" href="styles/style.css">
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
    <script src="js/index.js"></script>
    <link rel="icon" href="images/favicon.ico" type="image/ico">

    <!-- Facebook -->
    <meta property="og:url"           content="https://a-choice.000webhostapp.com/" />
    <meta property="og:type"          content="website" />
    <meta property="og:title"         content="A Choice" />
    <meta property="og:description"   content="Sharing" />
    <meta property="og:image"         content="https://a-choice.000webhostapp.com/images/Product-Images/Genuine_Sony_Xperia_Z1_Charging_Dock_DK31_1.jpg" />
    
    <!-- Twitter -->
    <meta name="twitter:card" content="summary">
    <meta name="twitter:url" content="https://a-choice.000webhostapp.com/">
    <meta name="twitter:title" content="A Choice">
    <meta name="twitter:description" content="Sharing">
    <meta name="twitter:image" content="https://a-choice.000webhostapp.com/Genuine_Sony_Xperia_Z3_Charging_Dock_DK48_1.jpg">   

</head>

<header>
    
    <div id="top"><!-- Top Begin -->
       
       <div class="container"><!-- container Begin -->
           
           <div class="col-md-6 offer"><!-- col-md-6 offer Begin -->
               
               <a href="#" id="confirm" class="btn btn-success btn-sm" onclick="myFunction()">
               
                    <?php
                    
                        if(!isset($_SESSION['customer_email'])){
                            echo "Welcome: User";
                        }else{
                            echo "Welcome: " . $_SESSION['customer_email'] . "";
                        }
                    
                    ?>

               </a>
                              
           </div><!-- col-md-6 offer Finish -->
           
           <div class="col-md-6"><!-- col-md-6 Begin -->
               
               <ul class="menu"><!-- cmenu Begin -->
                   
                   <li>
                       <a href="cart.php">Cart</a>
                   </li>
                   <li>
                       <a href="register.php">Register</a>
                   </li>
                   <li>
                       <a href="login.php">
                       
                            <?php
                            
                                if(!isset($_SESSION['customer_email'])){
                                    echo "<a href='login.php'> Login </a>";
                                }else{
                                    echo "<a href='logout.php'> Logout </a>";
                                }
                            
                            ?>
                       
                       </a>
                   </li>
                   <li>

                   <?php

                        if(!isset($_SESSION['customer_email'])){

                            echo"<a href='login.php'><img src='images/dummy-image.png' id='avatar'></a>";

                        }else{

                            echo"<a href='profile.php'><img src='images/dummy-image.png' id='avatar'></a>";
                        }
                        
                   ?>

                   </li>
                   
               </ul><!-- menu Finish -->
               
           </div><!-- col-md-6 Finish -->
           
       </div><!-- container Finish -->
       
   </div><!-- Top Finish -->
    
    <div id="navbar" class="navbar navbar-default"><!-- navbar navbar-default Begin -->
       
       <div class="container"><!-- container Begin -->
           
           <div class="navbar-header"><!-- navbar-header Begin -->
               
               <a href="index.php" class="navbar-device home"><!-- navbar-device home Begin -->
                   
                   <img src="images/achoice-logo.png" id="logo" alt="A Choice Logo" class="hidden-xs">
                   <img src="images/achoice-logo-mobile.png" id="logo-mobile" alt="A choice Logo Mobile" class="visible-xs">
                   
               </a><!-- navbar-device home Finish -->
                              
           </div><!-- navbar-header Finish -->
           
           <div class="navbar-collapse collapse" id="navigation"><!-- navbar-collapse collapse Begin -->
               
               <div class="padding-nav"><!-- padding-nav Begin -->
                   
                   <ul class="nav navbar-nav left"><!-- nav navbar-nav left Begin -->
                       
                       <li>
                           <a href="index.php">Home</a>
                       </li>
                       <li>
                           <a href="shop.php">Shop</a>
                       </li>
                       <li>
                           <a href="contact.php">Contact Us</a>
                       </li>
                       <li>
                           <a href="fag.php">FAG</a>
                       </li>
                       
                   </ul><!-- nav navbar-nav left Finish -->
                   
               </div><!-- padding-nav Finish -->
                                
               <div class="search-container" id="search"><!-- collapse clearfix Begin -->
                   
                   <form method="get" action="shop.php" class="navbar-form"><!-- navbar-form Begin -->
                       
                       <div class="input-group"><!-- input-group Begin -->
                           
                           <input type="text" class="form-control" placeholder="Search" name="search" required>
                           
                           <span class="input-group-btn"><!-- input-group-btn Begin -->
                           
                           <button type="submit" value="Search" class="btn btn-primary"><!-- btn btn-primary Begin -->
                               
                               <i class="fa fa-search"></i>
                               
                           </button><!-- btn btn-primary Finish -->
                           
                           </span><!-- input-group-btn Finish -->
                           
                       </div><!-- input-group Finish -->
                       
                   </form><!-- navbar-form Finish -->
                   
               </div><!-- collapse clearfix Finish -->
               
           </div><!-- navbar-collapse collapse Finish -->
           
       </div><!-- container Finish -->
       
   </div><!-- navbar navbar-default Finish -->
</header>
