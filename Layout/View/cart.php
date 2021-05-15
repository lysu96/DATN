
    <!-- -----------------cart item details------------------- -->
    <div class="small-container cart-page" id="listCart">
        <table id="tblCart">
            <tr>
                <th>Sản phẩm</th>
                <th>Số lượng</th>
                <th>Tổng phụ</th>
            </tr>
            <?php

                $tong = 0;
                
                foreach ($_SESSION['cart'] as $key => $value) {
                $tong = $value['gia'] * $value['num']; 
            
             ?>
            <tr>
                <td>
                    <div class="cart-info">
                        <img src="images/<?php echo $value['hinhanhsp']; ?>">
                        <div>
                            <p><?php echo $value['tensp']; ?></p>
                            <small>Giá: <?php echo number_format($value['gia'], 0, ",", "."); ?> đ</small>
                            <br>
                            <a href="" id="id_<?php echo $key; ?>" onclick="deleteCart(<?php echo $key; ?>)">Xóa</a>
                        </div>
                    </div>
                </td>
                <td><input type="number" onchange="updateCart(<?php echo $key; ?>)" id="sl_<?php echo $key; ?>" value="<?php echo $value['num']; ?>" min="1" ></td>
                <td><?php echo number_format($tong, 0, ",", "."); ?> đ</td>
            </tr>
            <?php $tong += $tong;}?>
        </table>

        <div class="total-price" id="tblCart">
            <table>
                <tr>
                    <td>Tổng</td>
                    <td><?php echo number_format($tong, 0, ",", "."); ?> đ</td>
                </tr>
                <tr>
                    <td>Phí vận chuyển</td>
                    <td> <?php echo number_format(25000, 0, ",", "."); ?> đ</td>
                </tr>
                <tr>
                    <td>Toàn bộ</td>
                    <td><?php echo number_format($tong+25000, 0, ",", "."); ?> đ</td>
                </tr>
                <tr>
                    <td><a href="" class="btn">Cập nhập lại</a></td>
                    <td><a href="" class="btn">Thanh toán ngay &#8594;</a></td>
                </tr>
            </table>

        </div>


    </div>


    <!-- ------------footer----------- -->
    