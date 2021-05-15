<?php 
if (isset($_SESSION['hoten'])) {
//require_once 'Model/login.php';

// $lg = new Login();
// $lg->Connect();
// $db_lg = $lg->List();
// var_dump($db_lg);

	if (isset($_GET['action'])) {
		$Actoin = $_GET['action'];
	}
	else
	{
		$Actoin = NULL;
	}
	switch ($Actoin) {
		case 'edit_ad':
			$layout = "edit_ad.php";
			require_once 'Layout/Admin/index.php';
			break;
		// order
		case 'add_order':
			$layout = "edit_order.php";
			require_once 'Layout/Admin/index.php';
			break;
		case 'edit_order':
			$layout = "edit_order.php";
			require_once 'Layout/Admin/index.php';
			break;
		case 'delete_order':
			
			break;
		// products
		case 'add_products':
			$layout = "edit_products.php";
			require_once 'Layout/Admin/index.php';
			break;
		case 'edit_products':
			$layout = "edit_products.php";
			require_once 'Layout/Admin/index.php';
			break;
		case 'delete_products':
			
			break;
		// client
		case 'edit_client':
			$layout = "edit_client.php";
			require_once 'Layout/Admin/index.php';
			break;
		case 'add_client':
			$layout = "edit_client.php";
			require_once 'Layout/Admin/index.php';
			break;
		case 'delete_client':
			
			break;
		//sales
		case 'sales':
			$layout = "sales.php";
			require_once 'Layout/Admin/index.php';
			break;
		case 'profit':
			$layout = "profit.php";
			require_once 'Layout/Admin/index.php';
			break;
		case 'establish':
			$layout = "establish.php";
			require_once 'Layout/Admin/index.php';
			break;
		default:
			$layout = "dashboard.php";
			require_once 'Layout/Admin/index.php';
		break;
	}
}else {
	header("location: index.php");
}
?>