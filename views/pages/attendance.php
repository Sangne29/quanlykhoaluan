
<?php
session_start();
$_SESSION['goback']= '?option=attendance';
date_default_timezone_set("asia/Ho_Chi_Minh");
require_once('views/header.php');  
require_once ('config.php');
require_once ('system/load.php');
require_once ('system/core.php');
require_once ('system/Database.php');

if(!isset($_SESSION['customer_id'])) {
	redirect('index.php?option=login'); 
}else{
    unset($_SESSION['goback']);
}
$id = 1;
$attendancecondition = loadModel('attendancecondition');
$row=$attendancecondition->attendancecondition_list($id);

	$now_time = time();

	if($now_time > $row['expire']) {
		$row['pass'] = 0;
	}
?>
<!--form dữ liệu-->
<div class="checkout-area pb-80 pt-100">
	<div class="container">
		<div class="row">
			<div class="ml-auto mr-auto col-lg-12" style="margin-top:50px;">
				<div class="checkout-wrapper">
					<div id="faq" class="panel-group">
						<div class="panel panel-default single-my-account">
							<div id="my-account-1">
								<div class="panel-body">
									<form action="index.php?option=attendance_process" method="POST">
										<div class="myaccount-info-wrapper">
												<?php if(has_flash('thongbao')):  ?>
													<div class="alert alert-success" > <?php echo get_flash('thongbao') ; ?> </div>
												<?php endif; ?>
												<?php if(has_flash('thongbaoloi')):  ?>
													<div class="alert alert-danger" > <?php echo get_flash('thongbaoloi') ; ?> </div>
												<?php endif; ?>
											<div class="account-info-wrapper">
												<h2 style="text-align:center;">Thông tin sinh viên</h2>
											</div>
											<div class="row">
												<div class="col-lg-6 col-md-6">
													<div class="billing-info">
														<label>Họ và tên</label>
														<input type="text" name="fullname" value="<?php echo $_SESSION['customer_fullname'] ?>">
													</div>
												</div>
												<div class="col-lg-6 col-md-6">
													<div class="billing-info">
														<label>Mã số sinh viên</label>
														<input type="text" name="username" value="<?php echo $_SESSION['customer_username'] ?>" disabled>
													</div>
												</div>
												<div class="col-lg-6 col-md-6">
													<div class="billing-info">
														<label>Giới tính</label>
														<input type="text" name="gender" value="<?php echo $_SESSION['customer_gender'] ?>">
													</div>
												</div>
												<div class="col-lg-6 col-md-6">
													<div class="billing-info">
														<label>Địa chỉ</label>
														<input type="text" name="address" value="<?php echo $_SESSION['customer_address'] ?>">
													</div>
												</div>
												<div class="col-lg-6 col-md-6">
													<div class="billing-info">
														<label>Số điện thoại</label>
														<input type="text" name="phone" value="<?php echo $_SESSION['customer_phone'] ?>">
													</div>
												</div>
												<div class="col-lg-6 col-md-6">
													<div class="billing-info">
														<label>Email</label>
														<input type="email" name="email" value="<?php echo $_SESSION['customer_email'] ?>">
													</div>
												</div>
												<div class="col-lg-6 col-md-6">
													<div class="billing-info">
														<label>Ngày điểm danh</label>
														<input type="text" name="date_attendance" value="<?php echo date("d-m-Y") ?>">
													</div>
												</div>
												<?php
													$remain1 = $row['expire']- time();
													if ($remain1 > 0) {
													$_SESSION['create_attendance_password'] = $row['pass'];
													?>
												<div class="col-lg-6 col-md-6">
													<div class="billing-info">
														<label>Nhập mật khẩu điểm danh</label>
														<input type="text" name="attendance_password">
													</div>
												</div>
											</div>
											<br>
											<div class="col-lg-6 col-md-6">
												<div class="billing-back-btn">
													<div class="billing-btn">
														<button class="btn btn-danger" type="submit" name= "save">Điểm danh ngay</button>
													</div>
												</div>
											</div>
											<?php } ?>

											<?php
												$remain1 = $row['expire']- time();
												if ($remain1 < 0) {?>
													&nbsp
											<?php } ?>

											<div class="col-lg-6 col-md-6">
												<div class="">
													<div class="card bg-danger">
														<p class="text-danger"> <?php	
														                                
																						$remain = gmdate("H:i:s",$row['expire']- time());
																						if ($remain1 > 0) {
																						print "Thời gian điểm danh còn: $remain";
																						}
																						else {
																						print "Đã hết thời gian điểm danh";
																						}
																						?>
													</div>
												</div>
											</div>
										</div>
									</form>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>


<?php
require_once('views/footer.php')
?>
										<!--	<p><?php
												echo $row['pass'];
											?></p>
											<p><?php 
												echo $row['start'];
											?></p>
											<p><?php 
												echo $row['expire'];
											?></p>
											<p><?php 
												echo $row['expire'] - time();
											?></p>
											-->