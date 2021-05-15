<?php 
require_once 'Model/sanpham.php';

$sp = new Sanpham();
$sp->Connect();
// $list_sp = $sp->List();
// var_dump($list_sp);

if (isset($_GET['action'])) {
	$Actoin = $_GET['action'];
}
else
{
	$Actoin = NULL;
}
switch ($Actoin) {
	case 'products':
		require_once 'Layout/header.php';
		require_once 'Layout/View/products.php';
		break;
	case 'products_detal':
		require_once 'Layout/header.php';

		if (isset($_GET['id'])) {
			$id = $_GET['id'];
		} 
		$list_sp = $sp->List_id($id);
		$spa = $sp->List_id_ha($id);

		require_once 'Layout/View/products_detal.php';
		break;
	default:

		require_once 'Layout/View/index.php';
		break;
}
?>