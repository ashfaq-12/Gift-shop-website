<?php
    $conn = mysqli_connect("localhost","root","","e_project");
   include 'header.php';
?>



    <!-- my account -->
    <div class="container">
    <div class="wrapper bg-white mt-sm-5 mb-5">
    <h4 class="pb-4 border-bottom">Account Settings</h4>
    <div class="d-flex align-items-start py-3 border-bottom">
        <img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAIcAAAB4CAMAAADv/RH0AAAAY1BMVEX///8AAADv7++hoaHo6Oj4+Pj19fUjIyPU1NSoqKjg4ODl5eWQkJDa2toSEhI0NDRXV1eIiIi0tLROTk7IyMi+vr48PDx2dnabm5t9fX1oaGgLCwtDQ0NgYGBubm4sLCwcHBxNhN51AAADdElEQVRoge2b2XKjQAxFoc2O2Rfj3f//lQE7EPAA3RISdtVwH5OqzKnu1nbFaNqmTZv+R1nCSV3XzT1hfozBTw+Z3sk+7Z0PQIiix9Cx7IN1Kcyq/JeiUXhbk6SIximeOhgrURjxDEWts7sKRjpP0ei0wpFUcgxdv3jcGIkKRh05zM/1qIZRPxLWE1E8jeeJ+HwYCk/0T5ngwghCCId+ZMIwRzL5rFIeDqWI7evMUoMN2K002nNwAGKlE8NTFQgMjgMBv45GEXmhsS4YDvqQCVAYekbNoVxYhrKpLwaaw1oVtBi+jeRIaDlyJIZ+peVwsRwRbW7fYzl060s4aFP74Us4bhvHQN/yPr4lXnZYDJs2f6DzaUyKoXkPJAfx8GDi2iD6RgiZyELqMRf5QEpiDM2aMMQkoreGUBnEpncfPAwHx6h9RXBwuEKIA+FxHuCjA48lJObc2zHtWDA0rYBhEJeWnkBV985o5kKyO+cWBGCREQ+Ub7JUQZg8Oi1tU5Ja9OY8FF6sh+19KzzW7FVWzJj4VIqmGzu3N57L8sjh1RtbpzqjUrbJrVPYum7mrHV4+b0T8VwX3ckqrv/XeURtohaTARy1V+Hcf39CdDf5wL7dtWOAX43tK29dtPaMChLz8j2Xx116spzkYp+7X4TRtejqmjGYQw/LZ5gR/yXpTYqGk1ZJrb2be71/bPdmgcdLQcZtoGp+Zh3ZqmbLwmaqwD6Ok1Eg3NGMGy8BcSYwaoXXYqScWkEylVsWNAGSUcG+pYP20yiSuaEPb2CeZjFeKo+7p47yuRM7yoCWgirCNSQWdsKfFG6BiXeAJoVJrKj1k0yImoc2ouZ0A2Mg108ygQ8ENVXLBU4iDK+00QOa3jHDvYqA04TAuT9yAS/Gv8v/JEoZrBNx4Lt8Nd1hVgQbB7DIbBxDBdh1rVSwacbgihfgebDlD2gzpNITrsHBVF/A+wfk5x5SQQcqwfRQTzAM9HcnMoGtXfRicF5g38xkyWSILSpLxCCGS5YOFWPuMqSyEIHB8VJxMz/9geD2QsFZ/pdBwlogqE8bpxWhPwXBfkQ3Lrz3LyjbwyWrbYcuqy5bGuZUINUijLpTJXkjD4K9EEHUJCRbGC9ZdDn2tPkMle+W2JxWurTLdSPf3zKQlXkuT0nOs+E3LUuoyvrcf+zbtGkTu34ATjExM4Xq1qAAAAAASUVORK5CYII="
            class="img" alt="">
        <div class="pl-sm-4 pl-2" id="img-section">
            <b>MY ACCOUNT</b>
        </div>
    </div>
    <?php 
        $user_id = $_SESSION['cust_id'];
        $sql = mysqli_query($conn,"SELECT * FROM `customers` where `id` = '$user_id'");
        $res = mysqli_fetch_assoc($sql);
    ?>
    <div class="py-2">
        <form action="" method="post">
        <div class="row py-2">
            <div class="col-md-6">
                <label for="firstname">User Name</label>
                <input type="text" class="bg-light form-control" value="<?php echo $res['cust_name']; ?>">
            </div>
            <div class="col-md-6">
                <label for="email">Email Address</label>
                <input disabled type="text" class="bg-light form-control" value="<?php echo $res['cust_email']; ?>">
            </div>
        </div>
        <div class="row py-2">
        <div class="col-md-6 pt-md-0 pt-3" id="lang">
                <label for="password">Password</label>
                <input type="text" class="bg-light form-control" value="<?php echo $res['cust_pass']; ?>">
            </div>
            <div class="col-md-6 pt-md-0 pt-3">
                <label for="phone">Phone Number</label>
                <input type="tel" class="bg-light form-control" value="<?php echo $res['cust_contact']; ?>">
            </div>
        </div>
        <div class="row py-2">
            <div class="col-md-6">
            <label for="country">Country</label>
            <input type="text" disabled class="bg-light form-control" placeholder="Pakistan">
            </div>
            <div class="col-md-6 pt-md-0 pt-3">
                <label for="address">Street Address</label>
                <input type="text" class="bg-light form-control" value="<?php echo $res['cust_address']; ?>">
            </div>
            
        </div>
        <div class="py-3 pb-4">
            <button name="upd_user" class="btn btn-warning mr-3">Save Changes</button>
        </div>
        </form>
    </div>
</div>
</div>

            <!-- my account -->

            <!-- Footer Section Begin -->
    <footer class="footer-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-3">
                    <div class="footer-left">
                        <div class="footer-logo">
                            <a href="#"><img src="img/footer-logo.png" alt=""></a>
                        </div>
                        <ul>
                            <li>Address: 60-49 Road 11378 New York</li>
                            <li>Phone: +65 11.188.888</li>
                            <li>Email: hello.colorlib@gmail.com</li>
                        </ul>
                        <div class="footer-social">
                            <a href="#"><i class="fa fa-facebook"></i></a>
                            <a href="#"><i class="fa fa-instagram"></i></a>
                            <a href="#"><i class="fa fa-twitter"></i></a>
                            <a href="#"><i class="fa fa-pinterest"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-2 offset-lg-1">
                    <div class="footer-widget">
                        <h5>Information</h5>
                        <ul>
                            <li><a href="#">About Us</a></li>
                            <li><a href="#">Checkout</a></li>
                            <li><a href="#">Contact</a></li>
                            <li><a href="#">Serivius</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-2">
                    <div class="footer-widget">
                        <h5>My Account</h5>
                        <ul>
                            <li><a href="#">My Account</a></li>
                            <li><a href="#">Contact</a></li>
                            <li><a href="#">Shopping Cart</a></li>
                            <li><a href="#">Shop</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="newslatter-item">
                        <h5>Join Our Newsletter Now</h5>
                        <p>Get E-mail updates about our latest shop and special offers.</p>
                        <form action="#" class="subscribe-form">
                            <input type="text" placeholder="Enter Your Mail">
                            <button type="button">Subscribe</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <div class="copyright-reserved">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="copyright-text">
Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | Developed By Fardeen Ik
                        </div>
                        <div class="payment-pic">
                            <img src="img/payment-method.png" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- Footer Section End -->


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