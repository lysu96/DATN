

    <!-- ---------- single Products detail ----------- -->

    <?php
    foreach ($list_sp as $value) {
        # code...
     ?>
    <div class="small-container single-product">
        <div class="row">
            <div class="col-2">
                <img src="images/<?php echo $value["hinhanhsp"]; ?>" width="100%" id="productImg">
                <div class="small-img-row">
                    <div class="small-img-rol">
                        <img src="images/<?php echo $value["hinhanhsp"]; ?>" width="100%" class="small-img">
                    </div>
                    <?php 
                    foreach ($spa as $valueha) {
                     ?>
                    <div class="small-img-rol">
                        <img src="images/<?php echo $valueha["urlhinhanh"]; ?>" width="100%" class="small-img">
                    </div>
                    <?php } ?>
                </div>

            </div>
            <div class="col-2">
                <p>Home / Sản phẩm</p>
                <h1><?php echo $value["tensp"]; ?></h1>
                <h4><?php echo number_format(($value['gia']*((100-$value['khuyenmai1'])/100)),0,",","."); ?> đ</h4>
                <span>Số Lượng: </span>
                <input type="number" value="1" name="num" id="num" min="1" max="<?php echo $value["soluong"]; ?>">
                <!-- <a href="" class="btn" onclick="addCart(<?php //echo $id; ?>)">Thêm vào giỏ hàng</a> -->
                <button type="button" class="btn" onclick="addCart(<?php echo $id; ?>)" data-toggle="modal" data-target="#myModal">Thêm vào giỏ hàng</button>
                <h3>Chi tiết sản phẩm
                <i class="fa fa-indent"></i>
                </h3>
                <br>
                <p><?php echo substr($value["chitietsp"],0,1100)."..."; ?></p>
            </div>
        </div>
    </div>

    <!-- ----- title------------- -->
    <div class="small-container">
        <div class="row row2">
            <h2>Sản phẩm liên quan
</h2>
            <p>Xem Thêm</p>
        </div>
    </div>
    <?php } ?>
<!-- ---------------Products----------------- -->
    <div class="small-container">

        <div class="row">
            <?php 
                // $sp = $db_sp->List();
                $item_page = !empty($_GET['item_page']) ? $_GET['item_page'] : 4;
                $curres_page = !empty($_GET['curres_page']) ? $_GET['curres_page'] : 1;
                $offset = ($curres_page - 1) * $item_page;
                $list_sp = $sp->List_PT($item_page, $offset);

                //var_dump($sp);

                $danhsach_sp = $sp->Num_rows();
                $tong_sp = $danhsach_sp -> num_rows;
                $tong_page = ceil($tong_sp/$item_page);

                foreach ($list_sp as $value) {
             ?>
            <div class="col-4">
                <a href="index.php?Controller=products&action=products_detal&id=<?php echo $value["idsp"] ?>"><img src="images/<?php echo $value["hinhanhsp"] ?>"></a>
                <a href="index.php?Controller=products&action=products_detal&id=<?php echo $value["idsp"] ?>"><h4><?php echo $value["tensp"] ?></h4></a>
                <div class="rating">
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star-o"></i>
                </div>
                <p><?php echo number_format(($value['gia']*((100-$value['khuyenmai1'])/100)),0,",","."); ?> đ</p>
            </div>
            <?php } ?>
        </div>
        <div class="page-btn">
            <?php 
            $trang1 = "products"; 
            $trang2 = "products_detal";
            require_once 'Controllers/page.php';
             ?>
        </div>
    </div>


    <!-- ------------footer----------- -->
    <!-- Modal -->
    <!-- Button to Open the Modal -->
    <!-- <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModal">
        Open modal
    </button> -->

    <!-- The Modal -->
    <!-- <div class="modal fade" id="myModal">
        <div class="modal-dialog">
          <div class="modal-content">
              hello
              
              
          </div>
      </div>
  </div> -->
    

<!-- ------------------- JS for  product gallery------------------------         -->
        <script>
            var ProductImg = document.getElementById("productImg");
            var SmallImg = document.getElementsByClassName("small-img");

            SmallImg[0].onclick = function()
            {
                ProductImg.src = SmallImg[0].src;
            }
            SmallImg[1].onclick = function()
            {
                ProductImg.src = SmallImg[1].src;
            }
            SmallImg[2].onclick = function()
            {
                ProductImg.src = SmallImg[2].src;
            }
            SmallImg[3].onclick = function()
            {
                ProductImg.src = SmallImg[3].src;
            }

            

        </script>
        
