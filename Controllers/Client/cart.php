<?php 
require_once 'Model/User/cart.php';
require_once 'Model/sanpham.php';
require_once 'Layout/header.php';

$cart = new Cart();
$cart->Connect();
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
	case 'update_product_cart':
		if (isset($_POST['id']) && isset($_POST['num'])) {
			$cart = $_SESSION['cart'];
			$idsp = $_POST['id'];
			$num = $_POST['num'];
			if (array_key_exists($idsp, $cart)) {
				$cart[$idsp] = array(
					'tensp' => $cart[$idsp]['tensp'],
					'num' => $num,
					'hinhanhsp' => $cart[$idsp]['hinhanhsp'],
					'gia' => $cart[$idsp]['gia']
				);
				$_SESSION['cart'] = $cart;
			}
		}
		if (isset($_SESSION['cart'])) {
			require_once 'Layout/View/cart.php';
		}else{ 
			require_once 'Layout/View/emptycart.php';
		} 
		break;
	case 'delete_product_cart':
		if (isset($_POST['id']) && isset($_POST['num'])) {
			$idsp = $_POST['id'];
			unset($cart[$idsp]);
			require_once 'Layout/View/cart.php';
		} 
		else{ 
			require_once 'Layout/View/emptycart.php';
		} 
		break;
	default:
		if (isset($_POST['id']) && isset($_POST['num'])) {
			$idsp = $_POST['id'];
			$num = $_POST['num'];

			$sp = new Sanpham();
			$sp->Connect();
			$list_sp = $sp->List_id($idsp);
			foreach ($list_sp as $value) {
			}

			if (!isset($_SESSION['cart'])) {
				$cart = array();
				$cart[$idsp] = array(
					'tensp' => $value['tensp'],
					'num' => $num,
					'hinhanhsp' => $value['hinhanhsp'],
					'gia' => $value['gia']
				);

			}else {
				$cart = $_SESSION['cart'];
				if (array_key_exists($idsp, $cart)) {
					$cart[$idsp] = array(
						'tensp' => $value['tensp'],
						'num' => (int)$cart[$idsp]['num'] + $num,
						'hinhanhsp' => $value['hinhanhsp'],
						'gia' => $value['gia']
					);
				}else {
					$cart[$idsp] = array(
						'tensp' => $value['tensp'],
						'num' => $num,
						'hinhanhsp' => $value['hinhanhsp'],
						'gia' => $value['gia']
					);
				}
			}
			$_SESSION['cart'] = $cart;
			// echo "<pre>";
			// print_r($_SESSION['cart']);
			// die;
		}

		if (isset($_SESSION['cart'])) {
			require_once 'Layout/View/cart.php';
		}else{ 
			require_once 'Layout/View/emptycart.php';
		} 
		break;
}
 ?>