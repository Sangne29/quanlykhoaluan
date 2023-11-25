<?php 
$id=$_REQUEST['id'];
$registertopic= loadModel('registertopic');
$row=$registertopic->registertopic_rowid($id);
$list_cat = $registertopic->registertopic_list(1,8);
$str_catid='';

//$list_group = $registertopic->count_studentgroup_thesisTopic($id);


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
								<div class="col-md-6 "> <h5 class="pl-2 mt-2 text-blues">Kết quả thống kê</h5> </div>
								<div class="col-md-6 m-0">
									<ol class="breadcrumb bg-white float-sm-right m-0">
										<li class="breadcrumb-item m-0"><a href="~Admin">Home</a></li>
										<li class="breadcrumb-item active m-0">Cập nhật điểm</li>
									</ol>
								</div>
							</div>
						</div>
						<section class="pt-2 container card col-md-12">
								<input type="hidden" name="id" value="<?php echo $row['ID'] ?>">
								<div class="float-right p-3">
									
									</div>
									<div class="row p-3">
										<div class="col-md-8">
											<div>
												<label for="psw"><span class="text-secondary font-weight-bold">Tên đề tài</span></label>
												<p><?php echo $row['TopicName'] ?></p>
											</div>

											<div>
												<label for="psw"><span class="text-secondary  font-weight-bold">Tên sinh viên</span></label>
											<p>	<?php echo $row['Name'] ?></p>
											</div>
											<div>
												<label for="psw"><span class="text-secondary  font-weight-bold">Tiến độ</span></label>
												<p><?php echo $row['Process'] ?></p>
											</div>
											<div>
												<div>
													<label for="psw"><span class="text-secondary  font-weight-bold">Comment/Đánh giá từ giáo viên</span></label>
													<p><?php echo $row['Commnet'] ?></p>
												</div>
											</div>
										</div>
										<div class="col-md-4">
											<div>
												<label for="psw"><span class="text-secondary  font-weight-bold">Điểm Hướng dẫn</span></label>
												<p><?php echo $row['GuidePoints'] ?></p>
											</div>
											<div>
											<label for="psw"><span class="text-secondary  font-weight-bold">Điểm phản biện</span></label>
											<p><?php echo $row['PointProcess'] ?></p>
											</div>
											<div>
											<label for="psw"><span class="text-secondary  font-weight-bold">Điểm phản biện 2</span></label>
											<p><?php echo $row['PointProcess2'] ?></p>
											</div>
											<div>
												<label for="psw"><span class="text-secondary  font-weight-bold">Gáo viên hướng dẫn</span></label>
												<p><?php echo $row['TeacherName'] ?></p>
											</div>
											<div>
												<label for="psw"><span class="text-secondary  font-weight-bold">Điểm cuối kỳ</span></label>
												<p>N/A</p>
											</div>
										</div>
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