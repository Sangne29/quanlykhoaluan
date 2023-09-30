<?php
//session_start();
require_once ('../config.php');
require_once ('../system/load.php');
require_once ('../system/Database.php');
require_once ('../system/core.php');
if(isset($_SESSION['user_id'])){redirect('index.php');}		
?>

<!DOCTYPE html>
<html lang="en">
	<head>
		<!-- Required meta tags -->
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<title>Đăng Nhập Hệ Thống</title>
		<link rel="stylesheet" href="../public/cssAdmin/bootstrap.min.css">
	</head>
	<body>
		<style type="text/css">
			.login-form{
				max-width:500px;
				min-height: 200px;
				border:1px solid #ccc;
				border-radius: 5px;
				margin:auto;}	
		</style>
		<?php
		if(isset($_POST['LOGINSS']))
		{	
			$auth=loadModel('Auth');
			$username =$_POST['username'];
			$password =sha1($_POST['password']);
			if($auth->auth_check($username)==true)
				{
					$user = $auth->auth_guard($username,$password);
					if($user!=false)
					{
						$_SESSION['user_admin']=$username;
						$_SESSION['username']=$user['username'];
						$_SESSION['user_id']=$user['ID'];
						$_SESSION['Access']=$user['access'];
						$_SESSION['user_fullname']=$user['fullname'];
						$_SESSION['user_img']=$user['img'];
						redirect('index.php');

					}
					else
					{
						$error_password='Mật Khẩu Không Đúng';
					}
				}
				else
				{
					$error_username='Tên Đăng Nhập Không Đúng';
				}
		}
		?>

		<section class="container pt-5 mt-5">
			<div class="row justify-content-center">
				<div class="col-md-5 ">
					<form name="from1" action="" method="post">
						<div class="card" style="margin-top: 200px; margin-left: -160px">
							<div class="card-header "><p class="card-title m-0 " style="font-size:17px;">Đăng nhập</p></div>
							<div class="card-body">
								<form action="" id="form-login" method="POST">
									<div>
										<input type="text" value="" name="username" class="form-control " placeholder="Tên đăng nhập">
										<?php if(isset($error_username)){	echo "<span class='text-danger'>".$error_username."</span>";} ?>
										<span class="text-danger" id="checkuser"></span>
									</div>
									<div class="pt-3 " id="pass">
										<input type="password" value="" name="password" class="form-control" placeholder="Mật khẩu">
										<?php if(isset($error_password)){	echo "<span class='text-danger'>".$error_password."</span>";} ?>
										<span class="text-danger" id="checkpass"></span>
									</div>
									<div class="pt-3">
										<input type="checkbox" name="checkbox" id="checkbox">
										<label for="coding" class="card-text text-dark m-0">Lưu thông tin đăng nhập</label>
									</div>
									<div class="pt-2"><button name="LOGINSS" type="submit"  class="btn bg-primary text-white w-100"> Đăng nhập</button></div>
								</form>
							</div>
						</div>
					</form>
					
				</div>
				<div class="col-md-5">
						<img src="https://img.freepik.com/free-vector/access-control-system-abstract-concept_335657-3180.jpg">
				</div>
			</div>
		</section>
	</body>
</html>

