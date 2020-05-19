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
                       
            <?php
                   
                if(!isset($_GET['device'])){
                       
                    if(!isset($_GET['types'])){
                           
                        $per_page=6;
                           
                        if(isset($_GET['page'])){
                               
                            $page = $_GET['page'];
                               
                        }else{
                               
                            $page = 1;
                               
                        }
                               
                            $start_from = ($page-1) * $per_page;
                            $get_products = "select * from product order by 1 DESC LIMIT $start_from,$per_page";
                            $run_product = mysqli_query($con,$get_products);
                               
                            while($row_products = mysqli_fetch_array($run_product)){
                                   
                                $pro_id = $row_products['product_id'];
                                $pro_title = $row_products['product_title'];
                                $pro_price = $row_products['product_price'];
                                $pro_img1 = $row_products['product_image1'];
                                   
                                echo"
                                   
                                <div class='col-md-4 col-md-6 center-responsive'>
                                    <div class='product'>
                                       
                                        <a href = 'details.php?product_id=$pro_id'>
                                            <img class='img-responsive' src='images/Product-Images/$pro_img1'></a>
                                            
                                            <div class='text'>
                                            
                                                <h3><a href='details.php?product_id=$pro_id'> $pro_title </a></h3>
                                                
                                                <p class='price'>$ $pro_price</p>
                                                <p class='button'>
                                                
                                                    <a class='btn btn-default' href = 'details.php?product_id=$pro_id'>View Details</a>
                                                    
                                                    <a class='btn btn-primary' href = 'cart.php?product_id=$pro_id'> 
                                                    
                                                        <i class='fa fa-shopping-cart'></i> Add To Cart</a>
                                                    
                                                </p>
                                                
                                            </div>
                                    </div>
                                </div>
                                    
                                ";
                            }
            ?>
            
        </div>

        <center>
                <ul class="pagination"><!-- pagination begin -->
                       
                    <?php
                           
                        $query = "select * from product";
                        $result = mysqli_query($con,$query);
                        $total_records = mysqli_num_rows($result);
                        $total_pages = ceil($total_records / $per_page);
                           
                            echo"
                                
                                <li>
                                    <a href='shop.php?page=1'> ".'First'." </a>
                                </li>
                                
                            ";
                            
                            for($i=1; $i<=$total_pages; $i++){
                                    
                                echo"
                                    <li>
                                        <a href='shop.php?page=".$i."'> ".$i." </a>
                                    </li>
                                ";
                            };
                           
                                echo"
                                
                                    <li>
                                        <a href='shop.php?page=$total_pages'> ".'Last'." </a>
                                    </li>
                                
                                ";
                            }
                        }
                    ?>
                    
                </ul><!-- pagination finish -->
            </center>
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