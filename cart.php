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
                       <p class="text-muted">You currently have 3 item(s) in your cart</p>
                       
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
                                   
                                   <tr><!-- tr Begin -->
                                       
                                       <td>
                                           
                                           <img class="img-responsive" src="images/slides_images/Beats-Headphone.png">
                                           
                                       </td>
                                       
                                       <td>
                                           
                                           <a href="#">Beats Headphone</a>
                                           
                                       </td>
                                       
                                       <td>
                                          
                                           2
                                           
                                       </td>
                                       
                                       <td>
                                           
                                           $50
                                           
                                       </td>
                                        
                                       
                                       <td>
                                           
                                           <input type="checkbox" name="remove[]">
                                           
                                       </td>
                                       
                                       <td>
                                           
                                           $100
                                           
                                       </td>
                                       
                                   </tr><!-- tr Finish -->
                                   
                               </tbody><!-- tbody Finish -->
                               
                               <tbody><!-- tbody Begin -->
                                   
                                   <tr><!-- tr Begin -->
                                       
                                       <td>
                                           
                                           <img class="img-responsive" src="images/slides_images/Phone-Controller.png">
                                           
                                       </td>
                                       
                                       <td>
                                           
                                           <a href="#">Phone Controller</a>
                                           
                                       </td>
                                       
                                       <td>
                                          
                                           2
                                           
                                       </td>
                                       
                                       <td>
                                           
                                           $50
                                           
                                       </td>
                                       
                                       
                                       <td>
                                           
                                           <input type="checkbox" name="remove[]">
                                           
                                       </td>
                                       
                                       <td>
                                           
                                           $100
                                           
                                       </td>
                                       
                                   </tr><!-- tr Finish -->
                                   
                               </tbody><!-- tbody Finish -->
                               
                               <tbody><!-- tbody Begin -->
                                   
                                   <tr><!-- tr Begin -->
                                       
                                       <td>
                                           
                                           <img class="img-responsive" src="images/slides_images/Portable-Charger.png">
                                           
                                       </td>
                                       
                                       <td>
                                           
                                           <a href="#">Portable Charger</a>
                                           
                                       </td>
                                       
                                       <td>
                                          
                                           2
                                           
                                       </td>
                                       
                                       <td>
                                           
                                           $50
                                           
                                       </td>
                                       
                                       
                                       <td>
                                           
                                           <input type="checkbox" name="remove[]">
                                           
                                       </td>
                                       
                                       <td>
                                           
                                           $100
                                           
                                       </td>
                                       
                                   </tr><!-- tr Finish -->
                                   
                               </tbody><!-- tbody Finish -->
                               
                               <tfoot><!-- tfoot Begin -->
                                   
                                   <tr><!-- tr Begin -->
                                       
                                       <th colspan="5">Total</th>
                                       <th colspan="2">$300</th>
                                       
                                   </tr><!-- tr Finish -->
                                   
                               </tfoot><!-- tfoot Finish -->
                               
                           </table><!-- table Finish -->
                           
                       </div><!-- table-responsive Finish -->
                       
                       <div class="box-footer"><!-- box-footer Begin -->
                           
                           <div class="pull-left"><!-- pull-left Begin -->
                               
                               <a href="index.php" class="btn btn-default"><!-- btn btn-default Begin -->
                                   
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
               
           </div><!-- col-md-9 Finish -->
    
    </div>
    
</div>





<?php 
    include 'navigation/footer.php';
?>