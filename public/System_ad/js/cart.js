function addCart(id) {
	num = $("#num").val();
	$.post('index.php?Controller=cart', {'id':id, 'num':num}, function(data) {
        //$('#myModal').modal();
        alert('Bạn đã thêm sản phẩm này vào giỏ hàng');
        $("#numCart").text(data);
    });
}

function updateCart(id) {
	num = $("#sl_"+id).val();
	$.post('index.php?Controller=cart&action=update_product_cart', {'id':id, 'num':num}, function(data) {
        $("#listCart").load("index.php?Controller=cart #tblCart");
    });

}
function deleteCart(id) {
    num = $("#id_"+id).val();
    $.post('index.php?Controller=cart&action=delete_product_cart', {'id':id, 'num':num}, function(data) {
        
    });

}
