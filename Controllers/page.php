<!-- Ve dau -->
<?php if ($curres_page > 3) {
    $trangdau = 1;
    ?>
    <a href="index.php?Controller=<?= $trang1;?>&action=<?= $trang2;?>&item_page=<?= $item_page; ?>&curres_page=<?= $trangdau; ?><?='&id='. $id; ?>"><span><<</span></a>
    
<?php } ?>
<!-- prev -->
<?php if ($curres_page > 1) {
    $prev = $curres_page - 1;
    ?>
    <a href="index.php?Controller=<?= $trang1;?>&action=<?= $trang2;?>&item_page=<?= $item_page; ?>&curres_page=<?= $prev; ?><?='&id='. $id; ?>"><span><</span></a>
<?php } ?>
<!-- giua -->
<?php for ($i=1; $i <= $tong_page; $i++) { ?>
    <?php if ($i != $curres_page) { ?>
        <?php if ($i > $curres_page - 3 && $i < $curres_page +3) { ?>
            <a href="index.php?Controller=<?= $trang1;?>&action=<?= $trang2;?>&item_page=<?= $item_page; ?>&curres_page=<?= $i; ?><?='&id='. $id; ?>"><span><?= $i; ?></span></a>

        <?php } ?>
    <?php }else { ?>
        <span style="background: #ff523b;"><?= $i; ?></span>
    <?php } ?>
<?php } ?>
<!-- next &#8594; -->
<?php if ($curres_page < $tong_page - 1) {
    $next = $curres_page + 1;
?>
    <a href="index.php?Controller=<?= $trang1;?>&action=<?= $trang2;?>&item_page=<?= $item_page; ?>&curres_page=<?= $next; ?><?='&id='. $id; ?>"><span>></span></a>
<?php } ?>
<!-- cuoi -->
<?php if ($curres_page < $tong_page - 3) {
    $trangcuoi = $tong_page;
?>
    <a href="index.php?Controller=<?= $trang1;?>&action=<?= $trang2;?>&item_page=<?= $item_page; ?>&curres_page=<?= $trangcuoi; ?><?='&id='.$id; ?>"><span>>></span></a>
<?php } ?>