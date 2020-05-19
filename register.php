<?php 
    $active='Home';
    include 'navigation/header.php';
?>
    <div class="jumbotron" id="hot"><!-- #hot Begin -->
       
        <div class="box"><!-- box Begin -->

            <div class="container"><!-- container Begin -->

                <div class="col-md-12"><!-- col-md-12 Begin -->

                    <h2>
                        Create an Account
                    </h2>
                
                </div><!-- col-md-12 Finish -->

            </div><!-- container Finish -->

        </div><!-- box Finish -->
       
    </div><!-- #hot Finish -->

    <div class="container">
        <form action="register.php" method="POST" enctype="multipart/form-data"> <!-- Form begin -->
            
            <div class="form-group">
                <label for="email">First Name:</label>
                <input type="text" class="form-control" name="c_fName" required>
            </div>
            
            <div class="form-group">
                <label for="email">Last Name:</label>
                <input type="text" class="form-control" name="c_lName" required>
            </div>
            
            <div class="form-group">
                <label for="email">Phone:</label>
                <input type="number" class="form-control" name="c_phone" required>
            </div>
            
            <div class="form-group">
                <label for="email">Email address:</label>
                <input type="email" class="form-control" name="c_email" required>
            </div>
            
            <div class="form-group">
                <label for="pwd">Password:</label>
                <input type="password" class="form-control" name="c_pass" required>
            </div>
            <br>
            <button type="submit" name="register" class="btn btn-primary btn-lg">Create</button>
        </form>  <!-- Form End -->
    </div>
<br>

<?php 
    include 'navigation/footer.php';
?>

<?php
    if(isset($_POST['register'])){
        $c_fName = $_POST['c_fName'];
        $c_lName = $_POST['c_lName'];
        $c_phone = $_POST['c_phone'];
        $c_email = $_POST['c_email'];
        $c_pass = password_hash($_POST['c_pass'],PASSWORD_DEFAULT);
        
        $create_customer = "INSERT INTO customer (customer_fname, customer_lname, customer_phone, customer_email, customer_pass) VALUES 
        ('$c_fName','$c_lName','$c_phone','$c_email','$c_pass')";

        $run_customer = mysqli_query($con, $create_customer);

        //Check if the create successful
        if(!$run_customer){
            echo "<script>alert('Some Thing Go Wrong')</script>";
            echo "<script>window.open('register.php','_self')";
        }else{
            $_SESSION['customer_email']=$c_email;
            echo "<script>alert('You have been registered Successfully')</script>";
            echo "<script>window.open('index.php','_self')</script>";
        }
    }
?>