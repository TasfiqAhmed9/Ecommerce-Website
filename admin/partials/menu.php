<?php 

    include('../config/constants.php'); 
    include('login-check.php');

?>


<html>
    <head>
        <title>product Order Website - Home Page</title>

        <link rel="stylesheet" href="../css/admin.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    </head>
    
    <body>
        <!-- Menu Section Starts -->
        <div class="menu text-center">
            <div class="wrapper">
                <ul>
                    <li><a href="index.php"><i class="fa fa-home"></i></a></li>
                    <li><a href="manage-admin.php"><i class="fa fa-user-alt"></i></a></li>
                    <li><a href="manage-category.php"><i class="fa fa-tags"></i>Categories</a></li>
                    <li><a href="manage-product.php"><i class="fa fa-box"></i>Product</a></li>
                    <li><a href="manage-order.php"><i class="fa fa-bag-shopping"></i>Order</a></li>
                    <li><a href="logout.php">Logout <i class="fa fa-right-from-bracket"></i></a></li>
                </ul>
            </div>
        </div>
        <!-- Menu Section Ends -->