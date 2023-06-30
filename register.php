<?php

include 'header.php';
?>

    <!-- Breadcrumb Section Begin -->
    <div class="breacrumb-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="breadcrumb-text">
                        <a href="#"><i class="fa fa-home"></i> Home</a>
                        <span>Register</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Breadcrumb Form Section Begin -->

    <!-- Register Section Begin -->
    <div class="register-login-section spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 offset-lg-3">
                    <div class="register-form">
                        <h2>Register</h2>
                        <form action="" method="post">
                            <div class="group-input">
                                <label for="username">Username *</label>
                                <input required name="cust_name" type="text" id="username">
                            </div>
                            <div class="group-input">
                                <label for="email">e-mail address *</label>
                                <input required name="cust_email" type="text" id="email">
                            </div>
                            <div class="group-input">
                                <label for="contact">contact *</label>
                                <input required name="cust_contact" type="tel" pattern="[9,2]{2}-[0-9]{10}" id="contact" placeholder="92-1234567890">
                            </div>
                            <div class="group-input">
                                <label for="city">City *</label>
                                <select required class="w-100" name="cust_city" style="border: 1px solid #e7ab3c; height:50px; border-radius:5px;">
                                    <option value="Karachi">Karachi</option>
                                    <option value="Lahore">Lahore</option>
                                    <option value="Islamabad">Islamabad</option>
                                </select>
                            </div>
                            <div class="group-input">
                                <label for="cust_add">Customer address *</label>
                                <textarea class="w-100" required name="cust_address" type="text" id="" style="border: 1px solid #e7ab3c; height:50px; border-radius:5px;"></textarea>
                            </div>
                            <div class="group-input">
                                <label for="pass">Password *</label>
                                <input required name="cust_pass" type="password" id="pass"><i class="fa fa-eye" aria-hidden="true" id="togglePassword" style="margin-left: -30px; cursor: pointer;"></i>
                            </div>
                            <div class="group-input">
                                <label for="con-pass">confirm password *</label>
                                <input required type="password" id="con-pass"><i class="fa fa-eye" aria-hidden="true" id="con_togglePassword" style="margin-left: -30px; cursor: pointer;"></i>
                            </div>
                            <button name="reg" type="submit" class="site-btn register-btn">REGISTER</button>
                        </form>
                        <div class="switch-login">
                            <a href="./login.html" class="or-login">Or Login</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Register Form Section End -->
    
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
    <script>
    const togglePassword = document.querySelector('#togglePassword');
  const password = document.querySelector('#pass');

  togglePassword.addEventListener('click', function (e) {
    // toggle the type attribute
    const type = password.getAttribute('type') === 'password' ? 'text' : 'password';
    password.setAttribute('type', type);
    // toggle the eye slash icon
    this.classList.toggle('fa-eye-slash');
});
</script>
    
</body>
<?php

include 'footer.php';

$conn = mysqli_connect("localhost","root","","e_project");

if(isset($_POST['reg'])){
    $cust_name = $_POST['cust_name'];
    $cust_email = $_POST['cust_email'];
    $cust_contact = $_POST['cust_contact'];
    $cust_pass = $_POST['cust_pass'];
    $cust_add = $_POST['cust_address'];
    $cust_city = $_POST['cust_city'];

    $fetch = "SELECT * FROM `customers` where `cust_email`='$cust_email' AND `cust_pass`='$cust_pass' AND `cust_contact`='$cust_contact'";
    $sql = mysqli_query($conn,$fetch);
    if($row = mysqli_fetch_assoc($sql) > 1){
        echo '<script>alert("user already exist");</script>';
    }
    else{
        $fetch = "SELECT * FROM `customers` where `cust_contact`='$cust_contact'";
        $sql = mysqli_query($conn,$fetch);
        if($row = mysqli_fetch_assoc($sql) > 1){
            echo '<script>alert("account already registered with this contact");</script>';
        }
        else{
            $reg = "INSERT INTO `customers`(`cust_name`, `cust_email`, `cust_contact`, `cust_pass`, `cust_address`, `cust_city`) VALUES ('$cust_name','$cust_email','$cust_contact','$cust_pass', '$cust_add', '$cust_city')";
            $run_query = mysqli_query($conn,$reg);
            echo '<script>alert("account created successfully");</script>';
        } 
    }  
}

?>