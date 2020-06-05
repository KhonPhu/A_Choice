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
                    General
                </li>

            </ul><!-- breadcrumb Finish -->

        </div>
    
    
    
    <div class="col-md-3"><!-- col-md-3 Begin -->
   
               <?php 

                include("navigation/sidebar.php");

                ?>
            
    </div><!-- col-md-3 Begin -->
        
    <div class="col-md-9">    
        <div class="row"><!-- row Begin -->

        <div class="jumbotron" id="hot"><!-- #hot Begin -->
       
            <div class="box"><!-- box Begin -->

                <div class="container"><!-- container Begin -->

                    <div class="col-md-12"><!-- col-md-12 Begin -->

                        <center><!-- center Begin -->

                            <h2> NO PRODUCT FOUND</h2>
                                                    
                        <center><!-- center Begin -->
                
                    </div><!-- col-md-12 Finish -->

                </div><!-- container Finish -->

            </div><!-- box Finish -->
            
        </div><!-- #hot Finish -->
            
        </div>
        
        <?php
        
            getCatDevice();
            getCatType();
        ?>
        
        </div><!-- row Finish -->
    </div><!-- col-md-9 Finish -->
</div><!-- content finish -->

<?php 
    include 'navigation/footer.php';
?>