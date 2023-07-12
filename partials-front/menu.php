<?php include('config/constants.php'); ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <!-- Important to make website responsive -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <title>E-store Website</title>

    <!-- Link our CSS file -->
    <link rel="stylesheet" href="css/style.css">
</head>

<body>
    <!-- Navbar Section Starts Here -->
    <section class="navbar">
        <div class="container">
            <div class="logo">
                <a href="#" title="Logo">
                    <img src="images/Iogo.png" alt="Logo" class="img-responsive">
                </a>
            </div>

            <div class="menu text-right">
                <ul>
                    <li>
                        <a href="<?php echo SITEURL; ?>"><i class="fa fa-home"></i>Home</a>
                    </li>
                    <li>
                        <a href="<?php echo SITEURL; ?>categories.php"><i class="fa fa-tags"></i>Categories</a>
                    </li>
                    <li>
                        <a href="<?php echo SITEURL; ?>products.php"><i class="fa fa-box"></i>Products</a>
                    </li>
                    <li>
                        <a href="<?php echo SITEURL; ?>contact.php"><i class="fa fa-comment"></i>Contact</a>
                    </li>
                </ul>
            </div>

            <div class="clearfix"></div>
        </div>
    </section>
    <!-- Navbar Section Ends Here -->