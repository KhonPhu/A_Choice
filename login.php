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

      $validate_customer = mysqli_num_rows($run_customer);

      $row = mysqli_fetch_array($run_customer);

      // Login Validation
      if($validate_customer == 1){
        
        if(password_verify($c_pass, $row["customer_pass"])){
          $_SESSION['customer_email']=$row["customer_fname"];
          $_SESSION['customer_id']=$row["customer_id"];
          echo "<script>alert('Logged in Successfully')</script>";
          echo "<script>window.open('index.php','_self')</script>";
        }else{
          echo "<script>alert('Invalid Password')</script>";
          exit();
        }
      }else{
        echo "<script>alert('User is not Available')</script>";
        exit();
      }
    }
?>