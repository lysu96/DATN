

    <div class="header">
        <div class="container">
            <div class="navbar">
                <div class="logo">
                    <a href="index.php"><img src="images/logo.png" width="125px"></a>
                </div>
                <nav>
                    <ul id="MenuItems">
                        <li><a href="index.php">Home</a></li>
                        <li><a href="index.php?Controller=products&action=products">Sản phẩm</a></li>
                        <li><a href="index.php?Controller=news">Tin tức</a></li>
                        <li><a href="index.php?Controller=contact">Liên hệ</a></li>
                        <li><a href="index.php?Controller=account&action=login">Tài khoản</a></li>
                    </ul>
                </nav>
                <a href="index.php?Controller=cart"><img src="images/cart.png" width="30px" height="30px"></a>
                <div>
                <?php if (isset($_SESSION['cart'])) {
                    $numCart = 0;
                    foreach ($_SESSION['cart'] as $key => $value) {
                        $numCart++;
                    }
                    
                 ?>
                <span id="numCart" style="position: absolute; top: 1.5rem; padding: 0.25em 0.4em; border-radius: 0.8rem; text-align: center; white-space: nowrap; vertical-align: baseline; line-height: 1; font-weight: 400; font-size: 0.5rem; color: #fff; background-color: #dc3545;"><?php echo($numCart); ?></span>
                <?php } ?>
                <img src="images/menu.png" class="menu-icon" 
                onclick="menutoggle()">
                </div>
            </div>
            <div class="row">
                <div class="col-2">
                    <h1>Cửa hàng Quang Đăng<br> Đồng hồ thời trang</h1>
                <p>Chào mừng bạn đến với cửa hàng của chúng tôi. Đến với chúng tôi là một lựa chọn Tốt nhất. <br> </p>
                <a href="" class="btn">Khám phá ngay &#8594;</a>
                </div>
                <div class="col-2">
                    <img src="images/image1.png">
                </div>
            </div>
        </div>
    </div>

    <!-- ------------- featured categorries ---------------- -->
    <div class="categories">
        <div class="small-container">
            <div class="row">
                <div class="col-3">
                    <img src="images/category-1.jpg">
                </div>
                <div class="col-3">
                    <img src="images/category-2.jpg">
                </div>
                <div class="col-3">
                    <img src="images/category-3.jpg">
                </div>

            </div>
        </div>

    </div>
    <!-- ------------- featured products ---------------- -->
    <div class="small-container">
        <h2 class="title">Sản phẩm nổi bật</h2>
        <div class="row">
            <?php 

                $ds = $sp->List();
                foreach ($ds as $value) {
            ?>
            <div class="col-4">
                <a href="index.php?Controller=products&action=products_detal&id=<?php echo $value["idsp"] ?>"><img src="images/<?php echo $value["hinhanhsp"]; ?>"></a>
                <a href="index.php?Controller=products&action=products_detal&id=<?php echo $value["idsp"] ?>"><h4><?php echo $value["tensp"]; ?></h4></a>
                <div class="rating">
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star-o"></i>
                </div>
                <p><?php echo number_format(($value['gia']*((100-$value['khuyenmai1'])/100)),0,",",".");?> đ</p>
            </div>
            <?php } ?>
        </div>
        
        <h2 class="title">Sản phẩm mới nhất</h2>
        <div class="row">
            <?php 

                $ds = $sp->List();
                foreach ($ds as $value) {
            ?>
            <div class="col-4">
                <a href="index.php?Controller=products&action=products_detal&id=<?php echo $value["idsp"] ?>"><img src="images/<?php echo $value["hinhanhsp"]; ?>"></a>
                <a href="index.php?Controller=products&action=products_detal&id=<?php echo $value["idsp"] ?>"><h4><?php echo $value["tensp"]; ?></h4></a>
                <div class="rating">
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star-o"></i>
                </div>
                <p><?php echo number_format(($value['gia']*((100-$value['khuyenmai1'])/100)),0,",",".");?> đ</p>
            </div>
            <?php } ?>
        </div>

    </div>
    <!-- ------------ offer -------------- -->
    <div class="offer">
        <div class="small-container">
            <div class="row">
                <div class="col-2"><img src="images/exclusive.png" class="offer-img"> </div>
                <div class="col-2">
                    <p>Có sẵn độc quyền trên RedStore</p>
                    <h1>Băng thông minh 4</h1>
                    <small>
                    Mi Smart Band 4 có màn hình cảm ứng màu AMOLED lớn hơn 39,9% (so với Mi Band 4) với độ sáng có thể điều chỉnh, vì vậy mọi thứ đều rõ ràng nhất có thể</small>
                    <a href="" class="btn">Mua ngay &#8594;</a>
                </div>
            </div>
        </div>
    </div>
    <!-- ------------ testimonial -------------- -->
    <div class="testimonial">
        <div class="small-container">
            <div class="row">
                <div class="col-3">
                    <i class="fa fa-qoute-lef"></i>
                    <p>Abilities or he perfectly pretended so strangers be exquisite. Oh to another chamber pleased
                        imagine do in. Went me rank at last loud shot an draw. Excellent so to no sincerity smallness.
                        Removal request delight if on he we</p>
                    <div class="rating">
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star-o"></i>
                    </div>
                    <img src="images/user-1.png">
                    <h3>Đạt 1 Phích</h3>
                </div>
                <div class="col-3">
                    <i class="fa fa-qoute-lef"></i>
                    <p>Abilities or he perfectly pretended so strangers be exquisite. Oh to another chamber pleased
                        imagine do in. Went me rank at last loud shot an draw. Excellent so to no sincerity smallness.
                        Removal request delight if on he we</p>
                    <div class="rating">
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star-o"></i>
                    </div>
                    <img src="images/user-2.png">
                    <h3>An Nguyen</h3>
                </div>
                <div class="col-3">
                    <i class="fa fa-qoute-lef"></i>
                    <p>Abilities or he perfectly pretended so strangers be exquisite. Oh to another chamber pleased
                        imagine do in. Went me rank at last loud shot an draw. Excellent so to no sincerity smallness.
                        Removal request delight if on he we</p>
                    <div class="rating">
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star-o"></i>
                    </div>
                    <img src="images/user-3.png">
                    <h3>Quang Hoang</h3>
                </div>
            </div>
        </div>
    </div>
    <!-- ------------------- brands --------------------- -->
    <div class="brands">
        <div class="small-container">
            <div class="row">
                <div class="col-5">
                    <img src="images/logo-godrej.png">
                </div>
                <div class="col-5">
                    <img src="images/logo-oppo.png">
                </div>
                <div class="col-5">
                    <img src="images/logo-coca-cola.png">
                </div>
                <div class="col-5">
                    <img src="images/logo-paypal.png">
                </div>
                <div class="col-5">
                    <img src="images/logo-philips.png">
                </div>
            </div>
        </div>
    </div>

    
    
