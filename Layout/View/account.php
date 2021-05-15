
<!--     <div class="container">
        <div class="navbar">
            <div class="logo">
                <a href="index.html"><img src="images/logo.png" width="125px"></a>
            </div>
            <nav>
                <ul id="MenuItems">
                    <li><a href="index.html">Home</a></li>
                    <li><a href="products.html">Products</a></li>
                    <li><a href="">About</a></li>
                    <li><a href="">Contact</a></li>
                    <li><a href="account.html">Account</a></li>
                </ul>
            </nav>
            <a href="cart.html"><img src="images/cart.png" width="30px" height="30px"></a>
            <img src="images/menu.png" class="menu-icon" onclick="menutoggle()">
        </div>
    </div> -->
    <!-- ------------Account-page------------------- -->
    <!-- ------------Account-page------------------- -->
    <div class="account-page">
        <div class="container">
            <div class="row">
                <div class="col-2">
                    <img src="images/image1.png" width="100%">
                </div>

                <div class="col-2">
                    <div class="form-container">
                        <div class="form-btn">
                            <span onclick="login()">Đăng nhập</span>
                            <span onclick="register()">Đăng ký</span>
                            <hr id="Indicator">
                            <span style="color: red"><?php if (isset($err)) {
                                echo $err;
                            }; ?></span><span style="color: green"><?php if (isset($tc)) {
                                echo $tc;
                            } ?></span>
                        </div>

                        <form id="LoginForm" method="POST">
                            <input type="email" name="Email" placeholder="Email" required>
                            <input type="password" name="Password" placeholder="Password" >
                            <button type="submit" class="btn" name="Login">Login</button>
                            <a href="admin/index.php">Forgot password</a>
                        </form>

                        <form id="RegForm" method="POST">
                            <input type="text" name="Username" placeholder="Username" required>
                            <input type="email" name="Email" placeholder="Email" required>
                            <input type="password" name="Password" placeholder="Password" required>
                            <button type="submit" class="btn" name="Register">Register</button>
                        </form>

                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- ------------footer----------- -->

