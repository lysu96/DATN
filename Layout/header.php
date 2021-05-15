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
            <a href="index.php?Controller=cart">
            <div>
                <?php if (isset($_SESSION['cart'])) {
                    $numCart = 0;
                    foreach ($_SESSION['cart'] as $key => $value) {
                        $numCart++;
                    }
                    
                 ?>
                <span id="numCart" style="position: absolute; top: 1.5rem; padding: 0.25em 0.4em; border-radius: 0.8rem; text-align: center; white-space: nowrap; vertical-align: baseline; line-height: 1; font-weight: 400; font-size: 0.5rem; color: #fff; background-color: #dc3545; margin-left: 1.9rem;"><?php echo($numCart); ?></span>
                <?php } ?>
            
            <img src="images/cart.png" width="30px" height="30px"></a>
            </div>
            <img src="images/menu.png" class="menu-icon" onclick="menutoggle()">
        </div>
    </div>
    </div>