<?php 
session_start();
$titel = "Home";
require_once 'Confing/confing.php';
require_once 'Model/login.php';

 
// $db = new Sanpham();
// $db->Connect();
require_once 'Layout/html_h.php';
if (isset($_GET['Controller'])) {
	$Controller = $_GET['Controller'];
}
else
{
	$Controller = NULL;
}
switch ($Controller) {
	case 'account':
		require_once 'Layout/header.php';
		if (isset($_SESSION['phanquyen'])) {
			if ($_SESSION['phanquyen'] != 1) {
				header("location: index.php?Controller=admin");
			}else {
				header("location: index.php?Controller=client");
			}
		}else{
			require_once 'Controllers/login.php';
		}
		require_once 'Layout/footer.php';
		break;
	case 'products':
		require_once 'Controllers/products.php';
		require_once 'Layout/footer.php';
		break;
	case 'news':
		require_once 'Layout/header.php';
		require_once 'Layout/View/news.php';
		require_once 'Layout/footer.php';
		break;
	case 'contact':
		require_once 'Layout/header.php';
		require_once 'Layout/View/contact.php';
		require_once 'Layout/footer.php';
		break;
	case 'cart':
		require_once 'Controllers/Client/cart.php';
		require_once 'Layout/footer.php';
		break;
	
	case 'admin':
		//require_once 'Layout/header.php';
		// if (isset($_SESSION['hoten'])) {
		// 	echo $_SESSION['hoten'];
		// };
		require_once 'Layout/masster/header.php';
		require_once 'Controllers/Admin/admin.php';
		break;
	case 'client':
	
		require_once 'Layout/masster/header.php';
		require_once 'Controllers/Client/client.php';
		break;
	case 'logout':
		require_once 'Controllers/logout.php';
		break;
	default:
		require_once 'Controllers/products.php';
		require_once 'Layout/footer.php';
	break;
}

require_once 'Layout/html_f.php';
?>