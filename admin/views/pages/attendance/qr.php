<!DOCTYPE html>
<html>
	<head>
		<script type="text/javascript" src=".././public/js/qrcode.min.js"></script>
		<script type="text/javascript">
		function onReady()
		{
			var qrcode = new QRCode("id_qrcode", {
				text:"https://quanlykhoaluan.click/QuanLyKhoaLuan/index.php?option=attendance",
				width:350,
				height:350,
				colorDark:"#000000",
				colorLight:"#ffffff",
				correctLevel:QRCode.CorrectLevel.H
			});
		}
		</script>
	</head>

</html>
<?php require_once 'views/header.php'; ?>
<body style="background-color:#F2F2F2;">
	<?php require_once 'views/Mainmenu.php'; ?>
	<section>
		<div class="main-content container-fluid">
			<div class="row">
				<?php require_once 'views/LeftMenu.php'; ?>
				<div class="col-md-10 ">
					<div class="p-4">
						<div class="card card-title bg-white p-1">
							<div class="row">
								<div class="col-md-6 "> <h5 class="pl-2 mt-2 text-blues">Trình tạo QR CODE</h5> </div>
								<div class="col-md-6 m-0">
									<ol class="breadcrumb bg-white float-sm-right m-0">
										<li class="breadcrumb-item m-0"><a href="~Admin">Home</a></li>
										<li class="breadcrumb-item active m-0">QR</li>
									</ol>
								</div>
							</div>
						</div>
						<section class="pt-2 container card col-md-12">
							<center>
								<body onload=onReady()>
									<h1>Sinh viên quét mã dưới để vào trang điểm danh</h1>
									<p>
										<div id="id_qrcode"></div>
									</p>
								</body>
							</center>
						</section>
						</div>
					</div>
				</div>
			</div>
		</section>
	</body>