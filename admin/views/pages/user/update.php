<?php 
$id=$_REQUEST['id'];
$user = loadModel('user');
$row=$user->user_rowid($id);

$teacher_user= loadModel('user');
$list_cat = $teacher_user->role_user();
$str_catid='';
foreach ($list_cat as $cat)
{	
	
	if($cat['parentId']==$row['access'])
	{
		$str_catid.='<option selected value="'.$cat['parentId'].'">'.$cat['accessName'].'</option>';
	}

	else 
	{
		$str_catid.='<option value="'.$cat['parentId'].'">'.$cat['accessName'].'</option>';
	}
}

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
								<div class="col-md-6 "> <h5 class="pl-2 mt-2 text-blues">Cập nhật người dùng</h5> </div>
								<div class="col-md-6 m-0">
									<ol class="breadcrumb bg-white float-sm-right m-0">
										<li class="breadcrumb-item m-0"><a href="~Admin">Home</a></li>
										<li class="breadcrumb-item active m-0">Cập nhật người dùng</li>
									</ol>
								</div>
							</div>
						</div>
						<section class="pt-2 container card col-md-12">
							<form name="form1" method="post" action="index.php?option=user&cat=process" enctype="multipart/form-data" >
								<input type="hidden" name="id" value="<?php echo $row['ID'] ?>">
								
									<div class=" row ">
										<div class="col-md-8 p-5">
											<div class="py-2">
												<label for="psw"><span class=" ">Họ và tên</span></label>
												<input type="text" class="form-control" name="fullname" value="<?php echo $row['fullname'] ?>" />
											</div>
											<div class="py-2">
												<label for="psw"><span class=" ">Tên đăng nhập</span></label>
												<input type="hidden" name="username" value="<?php echo $row['username'] ?>">
												<input  type="text" class="form-control" name="username" value="<?php echo $row['username'] ?>" required disabled/>
											</div>
											<div class="py-2">
												<label for="psw"><span class=" ">Email </span></label>
												<input type="email" class="form-control" name="email" value="<?php echo $row['email'] ?>" required/>
											</div class="py-2">
											<div class="py-2">
												<label for="psw"><span class=" ">Số điện thoại</span></label>
												<input type="number" class="form-control" name="phone" value="<?php echo $row['phone'] ?>" required/>
											</div>
											<div class="py-2">
												<label for="psw"><span class=" ">Địa chỉ</span></label>
												<input type="text" class="form-control" name="address" value="<?php echo $row['address'] ?>" required/>
											</div>
										</div>
										<div class="col-md-4 p-5">
											<div class="py-2">
												<label for="psw"><span class="text-secondary ">Mật khẩu</span></label>
												<input type="password" class="form-control" placeholder="Nhập mật khẩu" name="password"/>
											</div >
											<div class="py-2">
												<label for="psw"><span class="text-secondary ">Nhập lại Mật khẩu</span></label>
												<input type="password" class="form-control" placeholder="Nhập lại mật khẩu" name="password1"/>
												<span class="text-cam"></span>
											</div >
											<div class="py-2">
												<label for="psw"><span class=" ">Giới tính</span></label>
												<input type="hidden" name="gender" value="<?php echo $row['gender'] ?>">
												<input type="text" class="form-control" placeholder="Giới tính" name="gender" value="<?php echo $row['gender'] ?>" required/>
											</div >
											<div class="py-2">
												<label for="psw"><span class=" ">Trạng Thái</span></label>
												<select name="status" class="form-control">
													<option value="1">Active</option>
													<option value="0">Disable</option>
												</select>
											</div>
											<div hidden class="py-2">
												<label for="psw"><span class="text-secondary ">Phân Quyền</span></label>
												<select name="access" class="form-control">
												<?php echo $str_catid ; ?>
												</select>
											</div>
											<?php if(isset($_SESSION['Access']) && $_SESSION['Access'] == 0){?>
											<div class="py-2">
												<label for="psw"><span class="text-secondary ">Phân Quyền</span></label>
												<select name="access" class="form-control">
												<?php echo $str_catid ; ?>
												</select>
											</div>
											<?php  }?>
										</div>
									</div>
								</form>

								<div class="float-right p-3">
									<button class="btn btn-sm btn-success" name="CAPNHAT"  type="submit" value="Cập nhật"> Cập nhật
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