<?php
session_start();
$conn = mysqli_connect("localhost","root","","e_project");

?>

<!DOCTYPE html>
<html lang="eng">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="Fashi Template">
    <meta name="keywords" content="Fashi, unica, creative, html">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Ai Gift Galleria</title>

    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css?family=Muli:300,400,500,600,700,800,900&display=swap" rel="stylesheet">

    <!-- Css Styles -->
    <link rel="stylesheet" href="css/bootstrap.min.css" type="text/css">
    <link rel="stylesheet" href="css/font-awesome.min.css" type="text/css">
    <link rel="stylesheet" href="css/themify-icons.css" type="text/css">
    <link rel="stylesheet" href="css/elegant-icons.css" type="text/css">
    <link rel="stylesheet" href="css/owl.carousel.min.css" type="text/css">
    <link rel="stylesheet" href="css/nice-select.css" type="text/css">
    <link rel="stylesheet" href="css/jquery-ui.min.css" type="text/css">
    <link rel="stylesheet" href="css/slicknav.min.css" type="text/css">
    <link rel="stylesheet" href="css/style.css" type="text/css">
    <link rel="stylesheet" href="css/responsive_media.css" type="text/css">
    <link rel="stylesheet" href="css/product_view.css" type="text/css">
</head>

<style>
    .logo img{
        position: relative;
        bottom:30px;
        width:100px;
        height:100px;
    }
</style>

<body>
    <!-- Page Preloder -->
    <div id="preloder">
        <div class="loader"></div>
    </div>

    <!-- Header Section Begin -->
    <header class="header-section">
        
        <div class="container">
            <div class="inner-header">
                <div class="row">
                    <div class="col-lg-2 col-md-2">
                        <div class="logo">
                            <a href="index.php">
                                <img src="img/logo2.png" alt="">
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-7 col-md-7">
                        <div class="advanced-search">
                            <div class="input-group">
                                <form action="" method="post">
                                <input name="search_key" type="text" placeholder="What do you need?">
                                <button name="search" type="submit"><i class="ti-search"></i></button>
                                </form>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 text-right col-md-3" >
                        <ul class="nav-right">
                            <li class="heart-icon">
                                <a href="#">
                                    <i class="icon_heart_alt"></i>
                                </a>
                            </li>
                            <li class="cart-icon">
                                <a href="./shopping-cart.php">
                                    <i class="icon_bag_alt"></i>
                                </a>
                                <div class="cart-hover">
                                    <div class="select-items">
                                        <table>
                                            <tbody>
                                                <?php
                                                $sub_tot =0;
                                                if(isset($_SESSION['cart_pro'])){
                                                    foreach($_SESSION['cart_pro'] as $items){
                                                    $id = $items['prod_id'];
                                                    $p_qty = $items['prod_quant'];
                                                    $sql = mysqli_query($conn,"SELECT * FROM `products` where `pro_id`= '$id'");
                                                    $row = mysqli_fetch_assoc($sql);
                                                    $sub_tot +=$p_qty*$row['pro_price'];
                                                    $_SESSION['sub_tot'] = $sub_tot;
                                                echo'
                                                <tr>
                                                    <td class="si-pic"><img src="./admin_panel/'.$row['pro_image'].'" alt="'.$row['pro_name'].'" style="heigth: 100px; width:100px" ></td>
                                                    <td class="si-text">
                                                        <div class="product-selected">
                                                            <p>'.$row['pro_name'].' x '.$p_qty.'</p>
                                                            <h6>Rs. '.$row['pro_price'].'</h6>
                                                        </div>
                                                    </td>
                                                </tr>';
                                            }}
                                            else{
                                            }?>
                                            </tbody>
                                        </table>
                                    </div>
                                    <div class="select-total">
                                        <span>total:</span>
                                        <h5>Rs. <?php if(isset($_SESSION['cart_pro'])){ echo $_SESSION['sub_tot'];} else {} ?></h5>
                                    </div>
                                    <div class="select-button">
                                        <a href="./shopping-cart.php" class="primary-btn view-card">VIEW CART</a>
                                    </div>
                                </div>
                            </li>
                            <li class="cart-price">Rs. <?php if(isset($_SESSION['cart_pro'])){ echo $_SESSION['sub_tot'];} else {echo '0.00';} ?></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="nav-item">
            <div class="container">
                <div class="nav-depart">
                    <div class="depart-btn">
                        <i class="ti-menu"></i>
                        <span>All Categories</span>
                        <ul class="depart-hover">
                            <?php
                                $conn = mysqli_connect("localhost","root","","e_project");
                                $sql = mysqli_query($conn,"SELECT * FROM `category`");
                            while($res = mysqli_fetch_assoc($sql)){
                                echo '
                                <li><a href="./product_page.php?p_id='.$res['cat_id'].'">'.$res['cat_name'].'</a></li>
                                ';
                            }
                            ?>
                        </ul>
                    </div>
                </div>
                <nav class="nav-menu mobile-menu">
                    <ul>
                        <li><a href="./index.php">Home</a></li>
                        <li><a href="./shop.php">Shop</a></li>
                        <li><a href="./new_Arrival.php">New Arrivals✨</a></li>
                        <li><a href="./sale.php">⚡SALE !!⚡</a></li>
                        <li><a href="./contact.php">Contact</a></li>
                        <li><a style="border-right: none;" href="#">user</a>
                            <ul class="dropdown">
                                <li><a href="./shopping-cart.php">Shopping Cart</a></li>
                                <li><a href="./check-out.php">Checkout</a></li>
                                <?php if(isset($_SESSION['cust_id'] )){
                                    echo '<li><a href="./myaccount.php">My Account</a></li>';
                                }?>
                               
                                
                                <li><a href="./register.php">Register</a></li>
                                <li><a href="./login.php">Login</a></li>
                            </ul>
                        </li>
                    </ul>
                </nav>
                <div id="mobile-menu-wrap"></div>
            </div>
        </div>
    </header>
    <!-- Header End -->

<?php

if (isset($_POST['search'])) {
   $search_key = $_POST['search_key'];
   $_SESSION['search_key'] = $search_key;
   echo '<script>window.location.href="/fashi-master/shop.php";</script>';
}
    


?>