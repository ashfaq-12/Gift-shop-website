<?php
include 'header.php';
$conn = mysqli_connect("localhost","root","","e_project");
if(isset($_POST["upd"])){
    $ind = $_POST["key"];
    $value = $_POST["p_qty"];
    $_SESSION["cart_pro"][$ind]["prod_quant"] =  $value;
}

?>


    <!-- Breadcrumb Section Begin -->
    <div class="breacrumb-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="breadcrumb-text product-more">
                        <a href="./home.html"><i class="fa fa-home"></i> Home</a>
                        <a href="./shop.html">Shop</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Breadcrumb Section Begin -->

    <!-- Shopping Cart Section Begin -->
    <section class="shopping-cart spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="cart-table">
                        <table>
                            <thead>
                                <tr>
                                    <th>Image</th>
                                    <th class="p-name">Product Name</th>
                                    <th>Price</th>
                                    <th>Quantity</th>
                                    <th>Update Cart</th>
                                    <th>Total</th>
                                    <th><i class="ti-close"></i></th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php

if(isset($_SESSION['cart_pro'])){
                                $sub_tot = 0;
                                foreach($_SESSION['cart_pro'] as $key=>$items){
                                    $id = $items['prod_id'];
                                    $p_qty = $items['prod_quant'];
                                    $sql = mysqli_query($conn,"SELECT * FROM `products` where `pro_id`= '$id'");
                                    $row = mysqli_fetch_assoc($sql);
                                    echo'
                                    <form method="post" action="">
                                    <tr>
                                        <td class="cart-pic first-row"><img class="w-75" src="admin_panel/'.$row['pro_image'].'"  alt=""></td>
                                        <td class="cart-title first-row">
                                            <h5>'.$row['pro_name'].'</h5>
                                        </td>
                                        <td class="p-price first-row">'.$row['pro_price'].' Rs.</td>
                                        <td class="qua-col first-row">
                                            <div class="quantity">
                                                <div class="">
                                                <input type="hidden" value="'.$key.'" name="key">
                                                    <input name="p_qty" type="number" value="'.$p_qty.'" class="form-control" min="1">
                                                </div>
                                            </div>
                                        </td>
                                        <td class="p-price first-row"><input type="submit" value="Update" name="upd" class="btn" style="background-color: #e7ab3c; font-size:16px; font-weight:700;"></td>
                                        <td class="total-price first-row">'.$p_qty*$row['pro_price'].' Rs.</td>
                                        <td class="close-td first-row"><i class="ti-close"></i></td>
                                    </tr>
                                    </form>
                                    ';
                                    $sub_tot +=$p_qty*$row['pro_price'];
                                }
                            }
                            else{
                                
                            }
                                ?>

                            </tbody>
                        </table>
                    </div>
                    <div class="row">
                        <div class="col-lg-4">
                            <div class="cart-buttons">
                                <a href="./index.php" class="primary-btn continue-shop">Continue shopping</a>
                            </div>
                        </div>
                        <div class="col-lg-4 offset-lg-4">
                            <div class="proceed-checkout">
                                <ul>
                                    <li class="subtotal">Subtotal <span><?php echo $sub_tot;?> Rs.</span></li>
                                    <li class="cart-total">Total <span><?php echo $sub_tot;?> Rs.</span></li>
                                </ul>
                                <a href="check-out.php" class="proceed-btn">PROCEED TO CHECK OUT</a>
                                </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Shopping Cart Section End -->

    <!-- Partner Logo Section Begin -->
    <div class="partner-logo">
        <div class="container">
            <div class="logo-carousel owl-carousel">
                <div class="logo-item">
                    <div class="tablecell-inner">
                        <img src="img/logo-carousel/logo-1.png" alt="">
                    </div>
                </div>
                <div class="logo-item">
                    <div class="tablecell-inner">
                        <img src="img/logo-carousel/logo-2.png" alt="">
                    </div>
                </div>
                <div class="logo-item">
                    <div class="tablecell-inner">
                        <img src="img/logo-carousel/logo-3.png" alt="">
                    </div>
                </div>
                <div class="logo-item">
                    <div class="tablecell-inner">
                        <img src="img/logo-carousel/logo-4.png" alt="">
                    </div>
                </div>
                <div class="logo-item">
                    <div class="tablecell-inner">
                        <img src="img/logo-carousel/logo-5.png" alt="">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Partner Logo Section End -->


    <!-- Js Plugins -->
    <script src="js/jquery-3.3.1.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery-ui.min.js"></script>
    <script src="js/jquery.countdown.min.js"></script>
    <script src="js/jquery.nice-select.min.js"></script>
    <script src="js/jquery.zoom.min.js"></script>
    <script src="js/jquery.dd.min.js"></script>
    <script src="js/jquery.slicknav.js"></script>
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/main.js"></script>
</body>

</html>
<?php
include 'footer.php';

?>