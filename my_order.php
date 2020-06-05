<?php 
    
    $active='Account';
    include("navigation/header.php");

?>
    <div id="content"><!-- #content Begin -->
       <div class="container"><!-- container Begin -->
       
        <div class="col-md-12">
       
            <ul class="breadcrumb"><!-- breadcrumb Begin -->
       
            <li>
                <a href="index.php">Home</a>
            </li>
            <li>
                Checkout
            </li>

            </ul><!-- breadcrumb Finish -->

        </div>
           
        <div class="col-md-9"><!-- col-md-9 Begin -->
           
           <?php 
           
           if(!isset($_SESSION['customer_email'])){
               
               include("customer/customer_login.php");
               
           }else{
               
               include("payment_option.php");
               
           }
           
           ?>

        </div>
        
        </div><!-- container Finish -->

    </div><!-- #content Finish -->
    
    <?php 
    
    include("navigation/footer.php");
    
    ?>
    

<?php 

if(isset($_POST['register'])){
    
    $c_name = $_POST['c_name'];
    
    $c_email = $_POST['c_email'];
    
    $c_pass = $_POST['c_pass'];
    
    $c_country = $_POST['c_country'];
    
    $c_city = $_POST['c_city'];
    
    $c_contact = $_POST['c_contact'];
    
    $c_address = $_POST['c_address'];
    
    $c_image = $_FILES['c_image'];
    
    $c_image_tmp = $_FILES['c_image']['tmp_name'];
    
    $c_ip = getRealIpUser();
    
    move_uploaded_file($c_image_tmp,"customer/customer_images/$c_image");
    
    $insert_customer = "insert into customers 
    (customer_name,customer_email,customer_pass,customer_country,customer_city,customer_contact,customer_address,customer_image,customer_ip) values 
    ('$c_name','$c_email','$c_pass','$c_country','$c_city','$c_contact','$c_address','$c_image','$c_ip')";
    
    $run_customer = mysqli_query($con,$insert_customer);
    
    $sel_cart = "select * from cart where ip_add='$c_ip'";
    
    $run_cart = mysqli_query($con,$sel_cart);
    
    $check_cart = mysqli_num_rows($run_cart);
    
    if($check_cart > 0)
    {
        //if register have items in cart
        
        $_SESSION['customer_email']=$c_email;
        
        echo "<script>alert('You have been Registered Successfully')</script>";
        
        echo "<script>window.open('checkout.php','_self')</script>";
        
    }else{
        
        //if register without item in cart
        
        $_SESSION['customer_email']=$c_email;
        
        echo "<script>alert('You have been Registered Successfully')</script>";
        
        echo "<script>window.open('index.php','_self')</script>";
        
    }
        
}

?>