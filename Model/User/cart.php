<?php 
require_once 'Confing/confing.php';
class Cart extends Databases
{
	private $tbl = "giohang";
	
	function __construct()
	{
		parent:: Connect();
	}


	public function check_user($user)
	{
		$table = $this->tbl;
		$sql = "SELECT * FROM $table WHERE username = '$user'";
		return $this->Num_rows($sql);
	}
	public function List_id($id)
	{
		$table = $this->tbl;
		$sql = "SELECT giohang.idnd,giohang.idsp,giohang.soluong, sanpham.tensp, sanpham.hinhanhsp, sanpham.gia, sanpham.khuyenmai1,(sanpham.soluong-sanpham.daban) AS SL FROM giohang, sanpham WHERE idnd = '$id' AND giohang.idsp = sanpham.idsp ORDER BY giohang.idnd,giohang.idsp,giohang.soluong, sanpham.tensp, sanpham.hinhanhsp, sanpham.gia, sanpham.khuyenmai1,(sanpham.soluong-sanpham.daban)";
		return $this->Getdata($sql);
	}

	public function Edit()
	{
		$table = $this->tbl;
		$sql = "UPDATE $table SET tensp='$ten_sp', hinhanhsp='$hinhanh_sp', mausp='$mau_sp', chitietsp='$chitiet_sp', soluong='$so_luong', daban='$da_ban', gia='$gia_sp', khuyenmai1='$khuyenmai_1', khuyenmai2='$khuyenmai_2', madm='$ma_dm', ngaycapnhap='$ngaycapnhap', trangthai='$trang_thai' WHERE idsp=$id";
		return $this->Execute($sql);
	}
	public function Add()
	{
		$table = $this->tbl;
		$sql = "INSERT INTO $table(idnd, username, hoten, password, ngaysinh, gioitinh, email, ngaydangky, phanquyen, token) VALUES (NULL,'$username','$hoten','$password','$ngaysinh','$gioitinh','$email','$ngaydangky','$phanquyen','$token')";
		return $this->Execute($sql);
	}
	public function Delete($id)
	{
		$table = $this->tbl;
		$sql = "DELETE FROM $table WHERE idsp=$id";
		return $this->Execute($sql);
	}
}


 ?>