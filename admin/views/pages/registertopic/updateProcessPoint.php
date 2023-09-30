<?php 
$id=$_REQUEST['id'];
$registertopic= loadModel('Registertopic');
$row=$registertopic->registertopic_rowid($id);

$userId = $_SESSION['user_id'];
$role =  $_SESSION['Access'];
$list=$registertopic->registertopic_list($userId,$role);
$str_catid='';
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
								<div class="col-md-6 "> <h5 class="pl-2 mt-2 text-blues">Cập nhật điểm</h5> </div>
								<div class="col-md-6 m-0">
									<ol class="breadcrumb bg-white float-sm-right m-0">
										<li class="breadcrumb-item m-0"><a href="~Admin">Home</a></li>
										<li class="breadcrumb-item active m-0">Cập nhật điểm</li>
									</ol>
								</div>
							</div>
						</div>
						<section class="pt-2 container card col-md-12">
							<form name="form1" method="post" action="index.php?option=registertopic&cat=process" enctype="multipart/form-data" >
								<input type="hidden" name="id" value="<?php echo $row['ID'] ?>">
								<div class="float-right p-3">
									<button class="btn btn-sm btn-success" name="CAPNHAT1"  type="submit"> Cập nhật
									</div>
									<div class="row p-3">
										<div class="col-md-8">
											<div>
												<label for="psw"><span class="text-secondary">Tên đề tài</span></label>
												<input type="text" name="TopicName" value="<?php echo $row['TopicName'] ?>" class="form-control" placeholder="Tên của bạn" disabled="disabled" />
											</div>

											<div>
												<label for="psw"><span class="text-secondary">Tên sinh viên</span></label>
												<input type="text" name="Name" value="<?php echo $row['Name'] ?>" class="form-control" placeholder="" disabled="disabled" />
											</div>
											<div>
												<label for="psw"><span class="text-secondary">Tiến độ</span></label>
												<input type="text" name="Process" value="<?php echo $row['Process'] ?>" class="form-control" disabled="disabled" />
											</div>
											<div>
												<div>
													<label for="psw"><span class="text-secondary">Đánh giá</span></label>
													<textarea name="Commentcounter" class="form-control"><?php echo $row['Commentcounter'] ?></textarea>
												</div>
											</div>
										</div>
										<div class="col-md-4">
											<div>
											<label for="psw"><span class="text-secondary">Điểm phản biện</span></label>
												<input type="number" name="PointProcess" value="<?php echo $row['PointProcess'] ?>" class="form-control" placeholder="" min="0" max="100" />
											</div>
										</div>
									</div>
								</form>
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