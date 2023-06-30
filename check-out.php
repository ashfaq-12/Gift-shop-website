<?php
include 'header.php';
$conn = mysqli_connect("localhost","root","","e_project");
if(!isset($_SESSION['cust_id'] )){
    echo '<script>alert("Please Login First");</script>';
    // echo '<script>window.location.href = "PHP project/adminlogin.php";</script>';   
}
?>

    <!-- Breadcrumb Section Begin -->
    <div class="breacrumb-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="breadcrumb-text product-more">
                        <a href="index.php"><i class="fa fa-home"></i> Home</a>
                        <a href="shop.php">Shop</a>
                        <span>Check Out</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Breadcrumb Section Begin -->

    <!-- Shopping Cart Section Begin -->
    <section class="checkout-section spad">
        <div class="container">
            <?php
            $cust_id = $_SESSION['cust_id'];
            $run_query= mysqli_query($conn,"SELECT * FROM `customers` where `id`= '$cust_id'");
            $res = mysqli_fetch_assoc($run_query);  
            echo'           
            <form method="post" action="" class="checkout-form">
                <div class="row">
                    <div class="col-lg-6">
                        <h4>Biiling Details</h4>
                        <div class="row">
                            <div class="col-lg-12">
                                <label for="fir">Name<span>*</span></label>
                                <input disabled name="u_name" required type="text" id="fir" value="'.$res['cust_name'].'">
                            </div>
                            <div class="col-lg-12">
                                <label for="cun">Country<span>*</span></label>
                                <input disabled type="text" id="cun" value="Pakistan">
                            </div>
                            <div class="col-lg-12">
                                <label for="street">Street Address<span>*</span></label>
                                <input disabled required type="text" id="street" class="street-first" value="'.$res['cust_address'].'">
                            </div>
                            <div class="col-lg-12">
                                <label for="town">Town / City<span>*</span></label>
                                <input disabled required type="text" id="town" value="'.$res['cust_city'].'">
                            </div>
                            <div class="col-lg-6">
                                <label for="email">Email Address<span>*</span></label>
                                <input disabled type="text" id="email" value="'.$res['cust_email'].'">
                            </div>
                            <div class="col-lg-6">
                                <label for="phone">Phone<span>*</span></label>
                                <input disabled type="text" id="phone" value="+'.$res['cust_contact'].'">
                            </div>
                            <input type="hidden" value="1" name="order_status">
                            <div class="col-lg-12">
                            <label for="pay-method">Payment Method<span>*</span></label>
                            ';
                            $pay_opt = mysqli_query($conn,"SELECT * FROM `payment_type`");
                            while($pay_option = mysqli_fetch_assoc($pay_opt)){
                                echo '
                                
                            <div class="form-check mt-2">
                            <input value="'.$pay_option ['pay_id'].'" class="form-check-input h-50" type="radio" name="flexRadioDefault" id="flexRadioDefault1" checked>
                            <label class="form-check-label" for="flexRadioDefault1">
                            '.$pay_option['pay_type'].'
                            </label>
                            </div>
                            
                                ';
                            }

                        echo'
                        </div>  
                        </div>
                    </div>';
                    
                    echo'
                    <div class="col-lg-6">
                        <div class="place-order">
                            <h4>Your Order</h4>
                            <div class="order-total">
                            <ul class="order-table">
                            <li>Product <span>Total</span></li>';
                            $sub_tot =0;
                        foreach($_SESSION['cart_pro'] as $items){
                        $id = $items['prod_id'];
                        $p_qty = $items['prod_quant'];
                        $sql = mysqli_query($conn,"SELECT * FROM `products` where `pro_id`= '$id'");
                        $row = mysqli_fetch_assoc($sql);
                        $sub_tot +=$p_qty*$row['pro_price'];
                            echo'
                            
                                <li class="fw-normal">'.$row['pro_name'].' x '.$p_qty.' <span>'.$p_qty*$row['pro_price'].'</span></li>
                                ';}
                                echo'                                  
                                <li class="fw-normal">Subtotal <span>'.$sub_tot.' Rs.</span></li>
                                    <li class="total-price">Total <span>'.$sub_tot.' Rs.</span></li>
                                    
                                </ul>
                                <div class="order-btn">
                                    <button name="checkout" type="submit" class="site-btn place-btn">Place Order</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </form>';
            ?>
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

if(isset($_POST['checkout'])){
    $rec_id= time()."-";
    $rec_id .= $_POST["flexRadioDefault"];
    $pay_type = $_POST["flexRadioDefault"];
    $order_status = $_POST['order_status'];
    $date = date("l jS \of F Y h:i:s A");

    foreach($_SESSION["cart_pro"] as $temp){
        $rec_id .= $temp["prod_id"];
    
}  

    foreach($_SESSION["cart_pro"] as $temp){
         
            $p_id = $temp["prod_id"];

    

    $order_conf = mysqli_query($conn,"INSERT INTO `orders`(`reciept_id`, `user_id`, `prod_id`, `total_quan`, `total_amount`, `order_date`, `payment_type`, `order_status`) VALUES ('$rec_id','$cust_id','$p_id','$p_qty','$sub_tot','$date','$pay_type','$order_status')");
}  


echo '<script>window.location.href="./index.php";</script>';
}
?>