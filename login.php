<?php 
    $active='Login';
    include 'navigation/header.php';
?>
    <div class="jumbotron" id="hot"><!-- #hot Begin -->
       
        <div class="box"><!-- box Begin -->

            <div class="container"><!-- container Begin -->

                <div class="col-md-12"><!-- col-md-12 Begin -->

                    <h2>
                        Login
                    </h2>
                
                </div><!-- col-md-12 Finish -->

            </div><!-- container Finish -->

        </div><!-- box Finish -->
       
</div><!-- #hot Finish -->
    
    <div class="container">
        <form action="login.php" method="POST">
          <div class="form-group">
            <label for="username">Username:</label>
            <input type="email" class="form-control" name="c_email" required>
          </div>
          <div class="form-group">
            <label for="password">Password:</label>
            <input type="password" class="form-control" name="c_pass" required>
          </div>
          <div class="checkbox">
            <label><input type="checkbox"> Remember me</label>
          </div>
          <button type="submit" name="login" class="btn btn-primary">Login</button>
        </form>
    </div>
<br>

<?php 
    include 'navigation/footer.php';
?>

<?php
    if(isset($_POST['login'])){
      $c_email = $_POST['c_email'];
      $c_pass = $_POST['c_pass'];
        
      $select_customer = "select * from customer where customer_email='$c_email' LIMIT 1";
      
      $run_customer = mysqli_query($con, $select_customer);

      $get_ip = getRealIpUser();

      $validate_customer = mysqli_num_rows($run_customer);

      $row = mysqli_fetch_array($run_customer);

      $select_cart = "select * from cart ip_add='$get_ip'";
    
      $run_cart = mysqli_query($con,$select_cart);
    
      $check_cart = mysqli_num_rows($run_cart);

      // Login Validation
      if($validate_customer == 1 AND $check_cart == 0){
        
        if(password_verify($c_pass, $row["customer_pass"])){

          $_SESSION['customer_email']=$row["customer_fname"];
          $_SESSION['customer_id']=$row["customer_id"];
          echo "<script>alert('Logged in Successfully')</script>";
          echo "<script>window.open('my_order.php','_self')</script>";

        }
      }else if($validate_customer == 1){

        echo "<script>alert('Logged in Successfully')</script>";
        echo "<script>window.open('index.php','_self')</script>";

      }else{
        
        echo "<script>alert('Invalid Password')</script>";
        exit();

      }
    }
?>