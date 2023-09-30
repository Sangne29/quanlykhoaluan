
<?php date_default_timezone_set("asia/Ho_Chi_Minh");?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" lang="zxx">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title> Chào mừng các bạn đến với kênh học tập trực tuyến của Trường Đại học Công nghiệp TP.HCM</title>
	<!-- Favicon -->
	<link rel="shortcut icon" type="image/x-icon" href="images/logo1.png">
	<!-- Bootstrap core CSS -->
	<link href="public/Client/css/bootstrap.min.css" rel="stylesheet" type="text/css">
	<!--Custom CSS-->
	<link href="public/Client/css/flight.css" rel="stylesheet" type="text/css">
	<!--Flaticons CSS-->
	<link href="public/font/flaticon.css" rel="stylesheet" type="text/css">
	<!--Plugin CSS-->
	<link href="public/Client/css/plugin.css" rel="stylesheet" type="text/css">
	<!--Font Awesome-->
	<link href="public/Client/css/all.min.css" rel="stylesheet" />
	<script src="public/Client/js/jquery-3.2.1.min.js"></script>
	<link href="public/Client/css/cssNganLuong.css" rel="stylesheet" />
</head>
<body style="background-color: #FAFAFA;">

	<!-- Preloader -->
	<div id="preloader">
		<div id="status"></div>
	</div>
	<!-- Preloader Ends -->
	<!-- Header -->
	<header>
		<div class="upper-head clearfix " style="background-color:#0404B4;">
			<div class="container ">
				<div class="upper-head-inner">
					<div class="contact-info pull-left">
						<?php if(isset($_SESSION['customer_id'])) { ?>
							<div class="contact-info-item"><i class="flaticon-phone-call"></i><p> MSSV: <span><?php echo $_SESSION['customer_username']?></span></p></div>
								<i class="flaticon-mail"></i><p> Mail: <span><?php echo $_SESSION['customer_email']?></span></p>
						<?php } ?>
					</div>
					<div class="login-btn pull-right">
						<?php if(isset($_SESSION['customer_id'])) { ?>
						<p> Welcome: <?php echo $_SESSION['customer_fullname'];
						$_SESSION['customer_id']=$_SESSION['customer_id'];
					?> </p>
							<a href="index.php?option=myaccount"><i class="fas fa-user"></i>Quản lý tài khoản</a>
							<a href="index.php?option=logout">log out</a>
							<?php } else { ?>
							<a href="index.php?option=login"><i class="fa fa-unlock-alt"></i>Đăng nhập</a>
							<?php } ?>
					</div>
				</div>
			</div>
		</div>
		<div class="navigation bg-white">
			<div class="container ">
				<div class="navigation-content">
					<div class="header_menu">
						<!-- start Navbar (Header) -->
						<nav class="navbar navbar-default navbar-sticky-function navbar-arrow">
							<div class="logo pull-left">
								<a href="/"><img alt="Image" height="45" src="https://lms.iuh.edu.vn/pluginfile.php/1/theme_academi/logo/1676936055/Logo_IUH.png"></a>
							</div>
							<div id="navbar" class="navbar-nav-wrapper">
								<ul class="nav navbar-nav " id="responsive-menu">
									<li>
										<a href="index.php" style="color:#0B0B61;">- Trang chủ </a>
									</li>
								</ul>
								<ul class="nav navbar-nav " id="responsive-menu">
									<li>
										<a href="index.php?option=registertopic" style="color:#0B0B61;"> - Đăng ký </a>
									</li>
								</ul>
								<ul class="nav navbar-nav " id="responsive-menu">
									<li>
										<a href="index.php?option=registeredtopic_detail" style="color:#0B0B61;">- Chi tiết đề tài đã đăng ký </a>
									</li>
								</ul>
								<ul class="nav navbar-nav " id="responsive-menu">
									<li>
										<a href="index.php?option=PrintInternshipCard" style="color:#0B0B61;">- In phiếu thực tập</a>
									</li>
								</ul>
								<ul class="nav navbar-nav " id="responsive-menu">
									<li>
										<a href="index.php?option=ViewNotifications" style="color:#0B0B61;">- Thông báo</a>
									</li>
								</ul>
								</ul>
								<ul class="nav navbar-nav " id="responsive-menu">
									<li>
										<a href="index.php?option=contact" style="color:#0B0B61;">- Liên hệ </a>
									</li>
								</ul>
							</div><!--/.nav-collapse -->
							<div id="slicknav-mobile"></div>
						</nav>
					</div>
				</div>
			</div>
		</div>
	</header>
	<!-- Header Ends -->
	<!-- Slider -->
	<section ></section>
