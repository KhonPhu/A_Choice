<?php
    include ("db/db.php");


    //Begin getRealIpUser function
    function getRealIpUser(){
        switch(true){
            case(!empty($_SERVER['HTTP_X_REAL_IP'])) : return $_SERVER['HTTP_X_REAL_IP'];
            case(!empty($_SERVER['HTTP_CLIENT_IP'])) : return $_SERVER['HTTP_CLIENT_IP'];
            case(!empty($_SERVER['HTTP_X_FORWARDED_FOR'])) : return $_SERVER['HTTP_X_FORWARDED_FOR'];
            
            default : return $_SERVER['REMOTE_ADDR'];

        }
    }
    //Finish getRealIpUser function

    //Begin add_cart function
    
    function add_cart(){
        
        global $con;

        if(isset($_GET['add_cart'])){

            $ip_add = getRealIpUser();

            $p_id = $_GET['add_cart'];

            $product_qty = $_POST['product_qty'];

            $check_product = "select * from cart where ip_add='$ip_add' AND p_id='$p_id'";

            $run_check = mysqli_query($con,$check_product);

            if(mysqli_num_rows($run_check)>0){
                
                echo "<script>alert('$pro_id')</script>";
                
                echo "<script>window.open('details.php?product_id=$p_id','_self')</script>";
            
            }else{

                $get_price ="select * from product where product_url='$p_id'";

                $run_price = mysqli_query($con,$get_price);

                $row_price = mysqli_fetch_array($run_price);

                $pro_price = $row_price['product_price'];
                
                $query = "INSERT INTO cart (p_id, ip_add, qty) VALUES ('$p_id','$ip_add','$product_qty')";

                $run_query = mysqli_query($con,$query);

                echo "<script>window.open('cart.php?product_id=$p_id','_self')</script>";
            }
        }
    }
    
    //Finish add_cart function

    //Begin, Make Category Dynamically
    function getDevices(){
        
        global $con;
        
        $get_device = "select * from by_device";

        $run_device = mysqli_query($con,$get_device);

        while($row_device=mysqli_fetch_array($run_device)){

            $device_id = $row_device['device_id'];

            $device_title = $row_device['device_title'];

            echo "

                <li>
                
                    <a href='shop.php?device=$device_id'> $device_title </a>
                
                </li>
            
            ";

        }
    }

    function getTypes(){
        
        global $con;
        
        $get_type = "select * from by_type";

        $run_type = mysqli_query($con,$get_type);

        while($row_type=mysqli_fetch_array($run_type)){

            $type_id = $row_type['type_id'];

            $type_title = $row_type['type_title'];

            echo "

                <li>
                
                    <a href='shop.php?types=$type_id'> $type_title </a>
                
                </li>
            
            ";

        }
    }//Finish, Make Category Dynamically


    //Begin, Make Product Image dynamically
    function getPro(){
        
        global $con;
        
        $get_pro = "select * from product order by 1 DESC LIMIT 0,6";

        $run_pro = mysqli_query($con,$get_pro);

        while($row_pro=mysqli_fetch_array($run_pro)){

            $product_id = $row_pro['product_id'];

            $product_title = $row_pro['product_title'];

            $product_url = $row_pro['product_url'];

            $product_price = $row_pro['product_price'];

            $product_image = $row_pro['product_image1'];

            echo "

            <div class='col-md-4 col-md-6 center-responsive'>
        
                <div class='product'>

                    <a href='$product_url'><img class='img-responsive' src='images/Product-Images/$product_image'></a>

                    <div class='text'>

                        <h3><a href='$product_url'>$product_title</a></h3>

                        <p class='price'>$ $product_price</p>

                        <p class='button'><a class='btn btn-default' href='$product_url'>View Details</a>

                            <a class='btn btn-primary' href='$product_url'><i class='fa fa-shopping-cart'></i> Add to Cart</a>

                        </p>

                    </div>
                    
                </div>
                
            </div>
            
            ";

        }
    }//Finish, Make Product Image dynamically


    // Begin side bar get production by device function //
    function getCatdevice()
    {
        global $con;
        
        if(isset($_GET['device'])){
            
            $device_id = $_GET['device'];
            
            $get_device = "select * from by_device where device_id = '$device_id'";
            
            $run_device = mysqli_query($con,$get_device);
            
            $row_device = mysqli_fetch_array($run_device);
            
            $device_title = $row_device['device_title'];
            
            $device_desc = $row_device['device_desc'];
            
            $get_products = "select * from product where device_id = '$device_id'";
            
            $run_products = mysqli_query($con,$get_products);
            
            $count = mysqli_num_rows($run_products);
            
            
            while($row_products = mysqli_fetch_array($run_products))
            {
                $product_id = $row_products['product_id'];
            
                $product_title = $row_products['product_title'];

                $product_url = $row_products['product_url'];
            
                $product_price = $row_products['product_price'];
                
                $product_desc = $row_products['product_desc'];
            
                $product_img1 = $row_products['product_image1'];
                
                echo "
            
                <div class='col-md-4 col-sm-6 center-responsive'>

                    <div class='product'>

                        <a href='$product_url'>

                            <img class='img-responsive' src='images/Product-Images/$product_img1'>

                        </a>

                        <div class='text'>

                            <h3><a href='$product_url'>$product_title</a></h3>

                            <p class='price'>$ $product_price</p>

                            <p class='button'><a class='btn btn-default' href='$product_url'>View Details</a>

                                <a class='btn btn-primary' href='cart.php?product_id=$product_id'><i class='fa fa-shopping-cart'></i> Add to Cart</a>

                            </p>

                        </div>

                    </div>

                </div>

                ";
            }
        }
        
        
    }// Finish side bar get production by device function //

    // Begin side bar get production by type function //
    function getCattype()
    {
        global $con;
        
        if(isset($_GET['types'])){
            
            $type_id = $_GET['types'];
            
            $get_type = "select * from by_type where type_id = '$type_id'";
            
            $run_type = mysqli_query($con,$get_type);
            
            $row_type = mysqli_fetch_array($run_type);
            
            $type_title = $row_type['type_title'];
            
            $type_desc = $row_type['type_desc'];
            
            $get_products = "select * from product where type_id = '$type_id'";
            
            $run_products = mysqli_query($con,$get_products);
            
            $count = mysqli_num_rows($run_products);
            
            
            while($row_products = mysqli_fetch_array($run_products))
            {
                $product_id = $row_products['product_id'];
            
                $product_title = $row_products['product_title'];

                $product_url = $row_products['product_url'];
            
                $product_price = $row_products['product_price'];
                
                $product_desc = $row_products['product_desc'];
            
                $product_img1 = $row_products['product_image1'];
                
                echo "
            
                <div class='col-md-4 col-sm-6 center-responsive'>

                    <div class='product'>

                        <a href='$product_url'>

                            <img class='img-responsive' src='images/Product-Images/$product_img1'>

                        </a>

                        <div class='text'>

                            <h3><a href='$product_url'>$product_title</a></h3>

                            <p class='price'>$ $product_price</p>

                            <p class='button'><a class='btn btn-default' href='$product_url'>View Details</a>

                                <a class='btn btn-primary' href='cart.php?product_id=$product_id'><i class='fa fa-shopping-cart'></i> Add to Cart</a>

                            </p>

                        </div>

                    </div>

                </div>

                ";
            }
        }
        
        
    }// Finish side bar get production by type function //


    //Begin, Search function

    function searchPro()
    {
        global $con;

        if(isset($_GET["search"])){

            $search_wd = $_GET["search"];

            $sql="SELECT * FROM product WHERE product_keyword LIKE '%$search_wd%'";

            $results= mysqli_query($con,$sql);

            if(mysqli_num_rows($results) > 0){

                while($row_products = mysqli_fetch_array($results)){

                    $product_id = $row_products['product_id'];
                
                    $product_title = $row_products['product_title'];

                    $product_url = $row_products['product_url'];
                
                    $product_price = $row_products['product_price'];
                
                    $product_img1 = $row_products['product_image1'];
                    
                    echo "
                
                    <div class='col-md-4 col-sm-6 center-responsive'>

                        <div class='product'>

                            <a href='$product_url'>

                                <img class='img-responsive' src='images/Product-Images/$product_img1'>

                            </a>

                            <div class='text'>

                                <h3><a href='$product_url'>$product_title</a></h3>

                                <p class='price'>$ $product_price</p>

                                <p class='button'><a class='btn btn-default' href='$product_url'>View Details</a>

                                    <a class='btn btn-primary' href='cart.php?product_id=$product_id'><i class='fa fa-shopping-cart'></i> Add to Cart</a>

                                </p>

                            </div>

                        </div>

                    </div>

                    ";    
                }
            }else{

                echo "<script>alert('No Result')</script>";

                echo "<script>window.open('shop.php','_self')</script>";

            }
        }
    }//FInish, Search function

    
?>