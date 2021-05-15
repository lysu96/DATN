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
			require_once 'Layout/Client/index.php';
			break;
		// order
		case 'add_order':
			$layout = "edit_order.php";
			require_once 'Layout/Client/index.php';
			break;
		case 'edit_order':
			$layout = "edit_order.php";
			require_once 'Layout/Client/index.php';
			break;
		case 'delete_order':
			
			break;
		// products
		case 'message':
			$layout = "message.php";
			require_once 'Layout/Client/index.php';
			break;
		case 'delete_message':
			
			break;
		case 'notification':
			$layout = "notification.php";
			require_once 'Layout/Client/index.php';
			break;
		case 'delete_notification':
			
			break;
		//sales
		case 'sales':
			$layout = "sales.php";
			require_once 'Layout/Client/index.php';
			break;
		case 'profit':
			$layout = "profit.php";
			require_once 'Layout/Client/index.php';
			break;
		case 'establish':
			$layout = "establish.php";
			require_once 'Layout/Client/index.php';
			break;
		default:
			$layout = "dashboard.php";
			require_once 'Layout/Client/index.php';
		break;
	}
}else {
	header("location: index.php");
}
?>