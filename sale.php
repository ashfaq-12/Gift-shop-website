<?php
include 'header.php';
$conn = mysqli_connect("localhost","root","","e_project");
?>


    <!-- Breadcrumb Section Begin -->
    <div class="breacrumb-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="breadcrumb-text">
                        <a href="#"><i class="fa fa-home"></i> Home</a>
                        <span>Shop</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Breadcrumb Section Begin -->

    <!-- Product Shop Section Begin -->
    <section class="product-shop spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 order-1 order-lg-2">
                    <div class="product-list">
                            
                            <?php
                            $s_key = "";
                            if(isset($_SESSION['search_key'])){
                              $s_key = $_SESSION['search_key'];
                            }
    $sql = mysqli_query($conn,"SELECT * FROM `products` ORDER BY `pro_price` ASC limit 5");
    while($res = mysqli_fetch_assoc($sql)){
        echo '
        <form action="" method="post">
        <input type="hidden" name="p_id" value="'.$res['pro_id'].'">
        <div class="container py-1">
    <div class="row justify-content-center mb-3">
      <div class="col-md-12 col-xl-10">
        <div class="card shadow-0 border rounded-3">
          <div class="card-body">
            <div class="row">
              <div class="col-md-12 col-lg-3 col-xl-3 mb-4 mb-lg-0">
                <div class="bg-image hover-zoom ripple rounded ripple-surface">
                  <img src="./admin_panel/'.$res['pro_image'].'" class="w-100" />
                  <a href="#!">
                    <div class="hover-overlay">
                      <div class="mask" style="background-color: rgba(253, 253, 253, 0.15);"></div>
                    </div>
                  </a>
                </div>
              </div>
              <div class="col-md-6 col-lg-6 col-xl-6">
                <h5>'.$res['pro_name'].'</h5>
                <div class="d-flex flex-row">
                  <div class="text-danger mb-1 me-2">
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                  </div>
                </div>
                <p class="text mb-4 mb-md-0">
                '.$res['pro_desc'].'
                </p>
              </div>
              <div class="col-md-6 col-lg-3 col-xl-3 border-sm-start-none border-start">
                <div class="d-flex flex-row align-items-center mb-1">
                  <h4 class="mb-1 me-1">Pkr. '.$res['pro_price'].'</h4>
                </div>
                <h6 class="text-success">Free shipping</h6>
                <div class="d-flex flex-column mt-4">
                  <button class="btn btn-sm" style="background-color:#e7ab3c; color:#fff" type="button">View Product</button>
                  <button name="atc" class="btn btn-sm mt-2" type="submit" style="border-color:#e7ab3c; color:#212529">
                    Add To Cart
                  </button>
                  <input name="p_qty" type="number" value="1" min="1" class="form-control mt-2">
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    </div>
    </form>';
    }?>
                        </div>
                </div>
            </div>
        </div>
    </section>
        

    

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

if(isset($_POST['atc'])){
  $prod_arr = array(
    'prod_id'=> $_POST["p_id"],
    'prod_quant' => $_POST["p_qty"]

  );

  if(isset($_SESSION['cart_pro'])){
    $count = count($_SESSION['cart_pro']);
    $_SESSION['cart_pro'][$count] = $prod_arr;
  }
  else{
    $_SESSION['cart_pro'][0] = $prod_arr;
  }
}
?>
