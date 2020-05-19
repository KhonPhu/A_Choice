<?php

    session_start();

    session_destroy();

    echo "<script>alert('User Logged Out')</script>";
    echo "<script>window.open('index.php','_self')</script>";

?>