<?php 
    $active='Profile';
    include 'navigation/header.php';

global $con;
$get_customer = "select * from customer where customer_id='".$_SESSION['customer_id']."'";
$run_customer = mysqli_query($con,$get_customer);

$row = mysqli_fetch_array($run_customer);
$customer_id = $row['customer_id'];
$customer_fname = $row['customer_fname'];
$customer_lname = $row['customer_lname'];
$customer_email = $row['customer_email'];
$customer_phone = $row['customer_phone'];
$customer_image = $row['customer_image'];

?>

<div class="jumbotron" id="hot"><!-- #hot Begin -->
       
    <div class="box"><!-- box Begin -->

        <div class="container"><!-- container Begin -->

            <div class="col-md-12"><!-- col-md-12 Begin -->

                <h2>
                    My Account
                </h2>
                
            </div><!-- col-md-12 Finish -->

        </div><!-- container Finish -->

    </div><!-- box Finish -->
       
</div><!-- #hot Finish -->

<div class="container" >
        
        <div class="box"><!-- box Begin -->
            
            <div class="box-header"><!-- box-header Begin -->
                
                <form action="profile.php" method="POST" enctype="multipart/form-data">

                    <div class="form-group"><!-- col-md-3 Begin -->
                        
                        <?php echo "<img class='img-responsive' src='images/customer_images/$customer_image' style='width:200px ; height:200px'>" ?> 
                        
                        <input type="file" name="c_image" class="form-control form-height-custom" style="width:200px">
                
                    </div><!-- col-md-3 Begin -->

                    <div class="form-group">
                        <label for="fname">First Name:</label>
                        <input type="text" class="form-control" id="fname" name="fname" value="<?php echo $row['customer_fname'];?>">
                    </div>

                    <div class="form-group">
                        <label for="lname">Last Name:</label>
                        <input type="text" class="form-control" id="lname" name="lname" value="<?php echo $row['customer_lname'];?>">
                    </div>

                    <div class="form-group">
                        <label for="phone">Phone:</label>
                        <input type="number" class="form-control" id="phone" name="phone" value="<?php echo $row['customer_phone'];?>">
                    </div>

                    <div class="form-group">
                        <label for="email">Email address:</label>
                        <input type="email" class="form-control" id="email" name="email" value="<?php echo $row['customer_email'];?>">
                    </div>

                    <button type="submit" name="update" value="update" class="btn btn-primary">Save</button>
                </form>
            
            </div><!-- col-md-3 Begin -->
        
        </div>
    
</div>
<?php

if( isset($_POST['fname']) )
{
    $customer_fname= $_POST['fname'];
    $id  = $_SESSION['customer_id'];
    $sql = "update customer set customer_fname='$customer_fname' where customer_id=$id";
    $res = mysqli_query($con,$sql)
                                or die("Could not update".mysqli_error($con));
    echo "<meta http-equiv='refresh' content='0;url=index.php'>";
}

if( isset($_POST['lname']) )
{
    $customer_lname= $_POST['lname'];
    $id  = $_SESSION['customer_id'];
    $sql = "update customer set customer_lname='$customer_lname' where customer_id=$id";
    $res = mysqli_query($con,$sql) 
                                or die("Could not update".mysqli_error($con));
    echo "<meta http-equiv='refresh' content='0;url=index.php'>";
}

if( isset($_POST['email']) )
{
    $customer_email= $_POST['email'];
    $id  = $_SESSION['customer_id'];
    $sql = "update customer set customer_email='$customer_email' where customer_id=$id";
    $res = mysqli_query($con,$sql) 
                                or die("Could not update".mysqli_error($con));
    echo "<meta http-equiv='refresh' content='0;url=index.php'>";
}

if( isset($_POST['phone']) )
{
    $customer_phone= $_POST['phone'];
    $id  = $_SESSION['customer_id'];
    $sql = "update customer set customer_phone='$customer_phone' where customer_id=$id";
    $res = mysqli_query($con,$sql) 
                                or die("Could not update".mysqli_error($con));
    echo "<meta http-equiv='refresh' content='0;url=index.php'>";
}

if( isset($_POST['c_image']) )
{
    // $customer_image= $_POST['c_image'];
    $id  = $_SESSION['customer_id'];
    $customer_image = $_FILES['c_image']['name'];
    $customer_image_tmp = $_FILES['c_image']['tmp_name'];
    move_uploaded_file ($customer_image_tmp,"images/customer_images/$customer_image");
    if( isset($_POST['update']) )
    {
        $sql = "update customer set customer_image='$customer_image' where customer_id=$id";
        $res = mysqli_query($con,$sql) 
                                or die("Could not update".mysqli_error($con));
        echo "<meta http-equiv='refresh' content='0;url=index.php'>";
    }
}


?>
    
<?php 
    include 'navigation/footer.php';
?>