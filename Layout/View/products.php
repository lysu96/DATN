
    <div class="small-container">

        <div class="row row-2">
            <h2>Tất cả sản phẩm</h2>
            <select>
                <option>Sắp xếp</option>
                <option>Theo giá thất lên cao</option>
                <option>Theo giá cao lên tháp</option>
                <option>Theo Mua nhiều</option>
                
                <!-- <option>Short by Sale</option> -->
            </select>
        </div>

        <div class="row">
            <?php 
                //$sp = $db->List();
                $item_page = !empty($_GET['item_page']) ? $_GET['item_page'] : 8;
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
                <a href="index.php?Controller=products&action=products_detal&id=<?php echo $value["idsp"] ?>"><img src="images/<?php echo $value["hinhanhsp"]; ?>"></a>
                <a href="index.php?Controller=products&action=products_detal&id=<?php echo $value["idsp"] ?>"><h4><?php echo $value["tensp"] ?></h4></a>
                <div class="rating">
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star-o"></i>
                </div>
                <p><?php echo number_format(($value['gia']*((100-$value['khuyenmai1'])/100)),0,",",".");?> đ</p>
            </div>
            <?php 
                }
             ?>
        </div>
        <div class="page-btn">
            <?php
                $trang1 = "products"; 
                $trang2 = "products";
                $id = 1;
                require_once 'Controllers/page.php'; 
            ?>
        </div>
    </div>
    <!-- ------------footer----------- -->
