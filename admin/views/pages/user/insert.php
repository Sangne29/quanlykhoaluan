<?php 
$user = loadModel('user');
?>
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
								<div class="col-md-6 "> <h5 class="pl-2 mt-2 text-blues">Thêm người dùng mới</h5> </div>
								<div class="col-md-6 m-0">
									<ol class="breadcrumb bg-white float-sm-right m-0">
										<li class="breadcrumb-item m-0"><a href="~Admin">Home</a></li>
										<li class="breadcrumb-item active m-0">Thêm người dùng mới</li>
									</ol>
								</div>
							</div>
						</div>
						<section class="pt-2 container card col-md-12">
							<div class=" bg-white ">
								<form name="form1" method="post" action="index.php?option=user&cat=process" enctype="multipart/form-data" >									
									<div class=" row ">
										<div class="col-md-4"> </div>
										<div class="col-md-4"> <h3 class="text-center font-weight-bold text-success "> THÊM NGƯỜI DÙNG MỚI</h3> </div>
										<div class="col-md-4 ">
											<div class="float-right p-3">
												<button class="btn btn-sm btn-success" name="THEM"  type="submit"> Cập nhật</button>
											</div>
										</div>
									</div>
									
									<?php if(has_flash('thongbaoloi')):  ?>
											<div class="alert alert-danger" > <?php echo get_flash('thongbaoloi') ; ?> </div>
									<?php endif; ?>

									<div class=" row p-3 ">
										<div class="col-md-8">
											<div>
												<label for="fullname"><span class="text-secondary ">Họ và tên</span></label>
												<input type="text" id="fullname" name="fullname" class="form-control" placeholder="Họ và tên" value="" required/>
											</div>
											<div>
												<label for="username"><span class="text-secondary ">Tên đăng nhập</span></label>
												<input type="text" id="username" name="username" class="form-control" placeholder="Tên đăng nhập" value="" required/>
												<span class="text-cam"></span>
											</div>
											<div>
												<label for="email"><span class="text-secondary ">Email</span></label>
												<input type="email" id="email" name="email" class="form-control" placeholder="Exemple@gmail.com" value="" required/>
											</div>
											<div>
												<label for="phone"><span class="text-secondary ">Số điện thoại</span></label>
												<input type="tel" id="phone" name="phone" class="form-control" placeholder="Số điện thoại " value="" required/>
											</div>
											<div>
												<label for="phone"><span class="text-secondary ">Địa chỉ</span></label>
												<input type="text" id="address" name="address" class="form-control" placeholder="Địa chỉ " value="" required/>
											</div>
										</div>
										<div class="col-md-4">
											<div>
												<label for="password"><span class="text-secondary ">Mật khẩu</span></label>
												<input type="password" class="form-control" placeholder="Nhập mật khẩu" name="password" required/>
											</div>
											<div>
												<label for="password1"><span class="text-secondary ">Nhập lại Mật khẩu</span></label>
												<input type="password" class="form-control" placeholder="Nhập lại mật khẩu" name="password1" required/>
												<span class="text-cam"></span>
											</div>
											<div>
												<label for="psw"><span class=" ">Giới tính</span></label>
												<select name="gender" class="form-control">
													<option value="Nam">Nam</option>
													<option value="Nữ">Nữ</option>
												</select>
											</div>
											<div>
												<label for="psw"><span class=" ">Trạng Thái</span></label>
												<select name="status" class="form-control">
												<option value="1">Active</option>
													<option value="0">Disable</option>
												</select>
											</div>
											<div>
												<label for="psw"><span class="text-secondary ">Phân Quyền</span></label>
												<select name="access" class="form-control">
													<option value="0">ADMIN</option>
													<option value="6">SINH VIÊN</option>
													<option value="7">GIẢNG VIÊN</option>
													<option value="8">TRƯỞNG BỘ MÔN</option>
												</select>
											</div>
										</div>
									</div>
							</form>
						</div>
					</section>
					<script>
						$("#user").addClass("active");
					</script>
				</div>
			</div>
		</div>
	</div>
</section>
</body>