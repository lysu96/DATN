<?php 
require_once 'Model/login.php';

$lg = new Login();
$lg->Connect();
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
	case 'login':

		if (isset($_POST['Login'])) {
			$ac = 'login';
			$email = $_POST['Email'];
			$pass = $_POST['Password'];
			$err = '';
			
			$check = $lg->Ckeck_email($email);
			$data = $lg->List_user_to_email($email);

			// echo "<pre>";
			// print_r($check);
			// echo $check;

			if($check == 1){
				$token = $data[0]['token'];
				$passha = md5($pass.$data[0]['token']);
				
				if ($passha == $data[0]['password']) {
					$_SESSION['hoten'] = $data[0]['hoten'];
					$_SESSION['phanquyen'] = $data[0]['phanquyen'];
					$_SESSION['idnd'] = $data[0]['idnd'];
					
					if ($data[0]['phanquyen'] ==0) {
						//echo $_SESSION['hoten'];
						header("location: index.php?Controller=admin");
					}else {
						header("location: index.php?Controller=client");
					}
				}else {
					
					$err = "Sai mật khẩu";
					require_once 'Layout/View/account.php';
				}

			}else{
				$err = "Email không chính xác";
				require_once 'Layout/View/account.php';
			}
		}elseif (isset($_POST['Register'])) {
			$user = $_POST['Username'];
			$email = $_POST['Email'];
			$pass = $_POST['Password'];
			$checkuser = $lg->check_user($user, $email);
			$check = $lg->Ckeck_email($email);

			if ($check == 1) {
				$err = "Email bạn đã đăng ký.!<br/> Hãy nhập email khác.";
				require_once 'Layout/View/account.php';
			}else{
				if ($checkuser !=1 ) {
					
					$hoten = "";
					$now = new DateTime();
					// $ngaysinh = $now->format('Y-m-d');
					$ngaysinh = "";
					$gioitinh = "";
					$ngaydangky = $now->format('Y-m-d H:i:s');    // MySQL datetime format
					$phanquyen = 1;
					$token = md5($ngaydangky);
					// echo($user)." - ". $hoten." - ".md5($pass.$token)." - ".$ngaysinh." - ".$gioitinh." - ".$email." - ".$ngaydangky." - ".$phanquyen." - ".$token;

					$insert = $lg->Add($user, $hoten, md5($pass.$token), $ngaysinh, $gioitinh, $email, $ngaydangky, $phanquyen, $token);
					if ($insert) {
						$tc = 'Đăng ký thành công.!';
						require_once 'Layout/View/account.php';
					}else {
						$err = "Lỗi không đăng ký được";
						require_once 'Layout/View/account.php';
					}

				}else{
					$err = "Username bạn đã đăng ký.!<br/> Hãy nhập Username khác.";
					require_once 'Layout/View/account.php';
				}
			}
		}else{
			require_once 'Layout/View/account.php';
		}
		break;
	default:
		require_once 'Layout/View/account.php';
		break;
}
?>