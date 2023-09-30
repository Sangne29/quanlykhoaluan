<?php
require_once('views/header.php');  
require_once ('config.php');
require_once ('system/load.php');
require_once ('system/core.php');
require_once ('system/Database.php');



$id = $_SESSION['customer_id'];
$user = loadModel('user');
$row= $user->list_user_cuss($id);
//
$category = loadModel('u_registertopic');
$customerId = $_SESSION['customer_id'];
$list=$category->registertopic_list_u($customerId);
//
if(!isset($_SESSION['customer_id'])) {
	redirect('index.php?option=login'); 
}


?>
<div class="checkout-area pb-80 pt-100">
	<div class="container">
		<div class="row">
			<div class="ml-auto mr-auto col-lg-12" style="margin-top:50px;">
				<div class="checkout-wrapper">
					<div id="faq" class="panel-group">
						<div class="panel panel-default single-my-account">
							<div id="my-account-1">
								<div class="panel-body">
									<form name='form' action="index.php?option=myaccount&cat=myaccount-detail" method="POST" enctype="multipart/form-data">
										<input type="hidden" name="id" value="<?php echo $row['ID'] ?>">
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
											<input type="hidden" name="id" value="<?php echo $row['ID'] ?>">
											<div class="row">
												<div class="col-lg-6 col-md-6">
													<div class="billing-info">
														<label>Họ và tên</label>
														<input type="text" name="fullname" value="<?php echo $row['fullname'] ?>">
													</div>
												</div>
												<div class="col-lg-6 col-md-6">
													<div class="billing-info">
														<label>Mã số sinh viên</label>
														<input type="hidden" name="username" value="<?php echo $row['username'] ?>">
														<input type="text" value="<?php echo $row['username'] ?>" disabled>
													</div>
												</div>
												<div class="col-lg-6 col-md-6">
													<div class="billing-info">
														<label>Giới tính</label>
														<input type="text" name="gender" value="<?php echo $row['gender'] ?>" required>
													</div>
												</div>
												<div class="col-lg-6 col-md-6">
													<div class="billing-info">
														<label>Địa chỉ </label>
														<input type="text" name="address" value="<?php echo $row['address'] ?>" required>
													</div>
												</div>
												<div class="col-lg-6 col-md-6">
													<div class="billing-info">
														<label>Số điện thoại</label>
														<input type="text" name="phone" value="<?php echo $row['phone'] ?>" required>
													</div>
												</div>
												<div class="col-lg-6 col-md-6">
													<div class="billing-info">
														<label>Email</label>
														<input type="email" name="email" value="<?php echo $row['email'] ?>" required>
													</div>
												</div>
												<div class="col-lg-6 col-md-6">
													<div class="billing-info">
														<label>Mật khẩu</label>
														<input type="password" name="password" required>
													</div>
												</div>
												<div class="col-lg-6 col-md-6">
													<div class="billing-info">
														<label>Nhập lại mật khẩu</label>
														<input type="password" name="password1" required>
													</div>
												</div>
												&nbsp;
											</div>
											<div class="billing-back-btn">
												<div class="billing-btn">
													<button class="btn-blue btn-red btn-style-1 " name="CAPNHAT" type="submit">Cập nhật</button>
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

<?php require_once('views/footer.php');  ?>
