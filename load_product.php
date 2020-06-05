
<!-- Load product by Price -->
<?php  
                
    $con = mysqli_connect("localhost","root","","accessories_store");
    
    if(isset($_POST["price"]))  
    {  
            $output = '';  
            $query = "SELECT * FROM product WHERE product_price <= ".$_POST['price']." ORDER BY product_price desc";  
            $result = mysqli_query($con, $query);  
            if(mysqli_num_rows($result) > 0)  
            {  
                while($row_products = mysqli_fetch_array($result)){
                                   
                    $pro_id = $row_products['product_id'];
                    $pro_title = $row_products['product_title'];
                    $pro_url = $row_products['product_url'];
                    $pro_price = $row_products['product_price'];
                    $pro_img1 = $row_products['product_image1'];
                       
                    echo"
                       
                    <div class='col-md-4 col-md-6 center-responsive'>
                        <div class='product'>
                           
                            <a href = '$pro_url'>
                                <img class='img-responsive' src='images/Product-Images/$pro_img1'></a>
                                
                                <div class='text'>
                                
                                    <h3><a href='$pro_url'> $pro_title </a></h3>
                                    
                                    <p class='price'>$ $pro_price</p>
                                    <p class='button'>
                                    
                                        <a class='btn btn-default' href = '$pro_url'>View Details</a>
                                        
                                        <a class='btn btn-primary' href = 'cart.php?product_id=$pro_id'> 
                                        
                                            <i class='fa fa-shopping-cart'></i> Add To Cart</a>
                                        
                                    </p>
                                    
                                </div>
                        </div>
                    </div>
                        
                    ";
                }  
            }  
            else  
            { 
                echo "<script>window.open('blank.php','_self')</script>";
            }  
              
    }  
    
?>  