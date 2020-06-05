<?php 
    $active='Home';
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
                    Shopping Cart
                </li>

            </ul><!-- breadcrumb Finish -->

        </div>
        
        <div id="cart" class="col-md-9"><!-- col-md-9 Begin -->
               
               <div class="box"><!-- box Begin -->
                   
                   <form action="cart.php" method="post" enctype="multipart/form-data"><!-- form Begin -->
                       
                       <h1>Shopping Cart</h1>

                       <?php
                       
                       $ip_add = getRealIpUser();
                       
                       $select_cart = "select * from cart where ip_add='$ip_add'";
                       
                       $run_cart = mysqli_query($con,$select_cart);
                       
                       $count = mysqli_num_rows($run_cart);
                       
                       ?>

                       <p class="text-muted">You currently have <?php echo $count; ?> item(s) in your cart</p>
                       
                       <div class="table-responsive"><!-- table-responsive Begin -->
                           
                           <table class="table"><!-- table Begin -->
                               
                               <thead><!-- thead Begin -->
                                   
                                   <tr><!-- tr Begin -->
                                       
                                       <th colspan="2">Product</th>
                                       <th>Quantity</th>
                                       <th>Unit Price</th>
                                       <th colspan="1">Delete</th>
                                       <th colspan="2">Sub-Total</th>
                                       
                                   </tr><!-- tr Finish -->
                                   
                               </thead><!-- thead Finish -->
                               
                               <tbody><!-- tbody Begin -->

                               <?php 
                                   
                                   $total = 0;
                                   
                                   while($row_cart = mysqli_fetch_array($run_cart)){
                                       
                                    $pro_id = $row_cart['p_id'];

                                    $product_qty = $row_cart['qty'];
                                    
                                    $get_products = "select * from product where product_url='$pro_id'";
                                    
                                    $run_products = mysqli_query($con,$get_products);
                                    
                                    while($row_products = mysqli_fetch_array($run_products)){
                                        
                                        $product_title = $row_products['product_title'];
                                        
                                        $product_img1 = $row_products['product_image1'];
                                        
                                        $product_price = $row_products['product_price'];

                                        $pro_url = $row_products['product_url'];
                                        
                                        $sub_total = $row_products['product_price']*$product_qty;

                                        $_SESSION['qty'] = $product_qty;
                                        
                                        $total += $sub_total;
                                   
                                   ?>
                                   
                                   <tr><!-- tr Begin -->
                                       
                                       <td>
                                           
                                           <img class="img-responsive" src="images/Product-Images/<?php echo $product_img1; ?>" alt="Product 3a">
                                           
                                       </td>
                                       
                                       <td>
                                           
                                           <a href="<?php echo $pro_url; ?>"> <?php echo $product_title; ?> </a>
                                           
                                       </td>
                                       
                                       <td>
                                           
                                           <?php echo $product_qty; ?>
                                           
                                       </td>

                                       <td>
                                           
                                           <?php echo $product_price; ?>
                                           
                                       </td>
                                       
                                       <td>
                                           
                                           <input type="checkbox" name="remove[]" value="<?php echo $pro_id; ?>">
                                           
                                       </td>
                                       
                                       <td>
                                           
                                           $<?php echo $sub_total; ?>
                                           
                                       </td>
                                       
                                   </tr><!-- tr Finish -->
                                   
                                   <?php } } ?>
                                   
                               </tbody><!-- tbody Finish -->
                               
                               <tfoot><!-- tfoot Begin -->
                                   
                                   <tr><!-- tr Begin -->
                                       
                                       <th colspan="5">Total</th>
                                       <th colspan="2">$<?php echo $total; ?></th>
                                       
                                   </tr><!-- tr Finish -->
                                   
                               </tfoot><!-- tfoot Finish -->
                               
                           </table><!-- table Finish -->
                           
                       </div><!-- table-responsive Finish -->
                       
                       <div class="box-footer"><!-- box-footer Begin -->
                           
                           <div class="pull-left"><!-- pull-left Begin -->
                               
                               <a href="shop.php" class="btn btn-default"><!-- btn btn-default Begin -->
                                   
                                   <i class="fa fa-chevron-left"></i> Continue Shopping
                                   
                               </a><!-- btn btn-default Finish -->
                               
                           </div><!-- pull-left Finish -->
                           
                           <div class="pull-right"><!-- pull-right Begin -->
                               
                               <button type="submit" name="update" value="Update Cart" class="btn btn-default"><!-- btn btn-default Begin -->
                                   
                                   <i class="fa fa-refresh"></i> Update Cart
                                   
                               </button><!-- btn btn-default Finish -->
                               
                               <a href="checkout.php" class="btn btn-primary">
                                   
                                   Proceed Checkout <i class="fa fa-chevron-right"></i>
                                   
                               </a>
                               
                           </div><!-- pull-right Finish -->
                           
                       </div><!-- box-footer Finish -->
                       
                   </form><!-- form Finish -->
                   
               </div><!-- box Finish -->

               <!-- Begin, Update Cart function-->                  
               <?php 
               
                function update_cart(){
                    
                    global $con;
                    
                    if(isset($_POST['update'])){
                        
                        foreach($_POST['remove'] as $remove_id){
                            
                            $delete_product = "delete from cart where p_id='$remove_id'";
                            
                            $run_delete = mysqli_query($con,$delete_product);
                            
                            if($run_delete){
                                
                                echo "<script>window.open('cart.php','_self')</script>";
                                
                            }
                            
                        }
                        
                    }
                    
                }
               
               echo @$up_cart = update_cart();
               
               ?><!-- Finish, Update Cart function-->
               
           </div><!-- col-md-9 Finish -->
    
    </div>
    
</div>





<?php 
    include 'navigation/footer.php';
?>