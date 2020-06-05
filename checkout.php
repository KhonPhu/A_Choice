<?php 

    $active='Login';

?>
   
           
<?php 

if(!isset($_SESSION['customer_email'])){
    
    include("login.php");
    
}else{
    
    include("payment_option.php");
    
}

?>
           
          
   