<?php
$category = loadModel('Attendanceinternship');
$list=$category->attendanceInternship_list();
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
							<div class="col-md-6 "> <h5 class="pl-2 mt-2 text-blues">Điểm danh sinh viên báo cáo thực tập doanh nghiệp</h5> </div>

								<div class="col-md-6 m-0">
									<ol class="breadcrumb bg-white float-sm-right m-0">
										<li class="breadcrumb-item m-0"><a href="~Admin">Home</a></li>
										<li class="breadcrumb-item active m-0">Điểm danh sinh viên </li>
									</ol>
								</div>
							</div>
						</div>
						<section class=" ">
							<div class=" bg-white card">
							            <?php if(has_flash('thongbao')):  ?>
											<div class="alert alert-success" > <?php echo get_flash('thongbao') ; ?> </div>
										<?php endif; ?>
							            <?php if(has_flash('thongbaoloi')):  ?>
											<div class="alert alert-danger" > <?php echo get_flash('thongbaoloi') ; ?> </div>
										<?php endif; ?>
								<!--Tạo mã QR với xuất file -->
								<form action = "views/pages/attendance-internship/process.php" method="POST">
									<div class="row">
										<div class="col-md-7">
											<div class="pt-4 ml-5">
												<a href="index.php?option=attendance&cat=qr" class="btn btn-primary">Tạo mã QR điểm danh</a>
											</div>
										</div>
										<div class="col-md-7">
											
										</div>
											<!-- <div class="row border border-primary rounded mt-2 pb-2">
												<div class="col-md-4">
													<div class="pt-1">
														<p>Chọn loại file</p>
														<select name="export_file_type" required class="form-control">
															<option value="xlsx">Xlsx</option>
															<option value="xls">Xls</option>
															<option value="csv">Csv</option>
														</select>
													</div>
												</div>
												<div class="col-md-5">
													<div class="pt-1">
														<p>Nhập ngày điểm danh</p>
														<input required type="text" name="export_file_with_date_attendance" class="form-control">
													</div>
												</div>
												<div class="col-md-1">
													<div class="pt-1 mt-4">
														<p></p>
														<button type="submit" name="export_btn" class="btn btn-danger">Xuất file</button>
													</div>
												</div>
											</div> -->
									</div>
								</form>

								<!--ĐẶT pass với thời gian điểm danh -->
								<!-- <form  action = "views/pages/attendance/process.php" method="POST">
									<div class="pt-4 ml-5">
										<p>Đặt mật khẩu cho sinh viên điểm danh</p>
										<input required type="text" name="create_attendance_password" class="form-control">
										<p>Thời gian điểm danh (phút)</p>
										<input required type="text" name="attendance_time" class="form-control">
										<input  type="hidden" name="start" value =<?php echo time()?> class="form-control">
										<p></p>
										<button type="submit" name="save_password_and_time_attendance" class="btn btn-danger">Lưu</button>
									</div>
								</form> -->
									<div class="col-md-12 p-3">
										<table id="myTable1" class="table table-striped table-bordered dt-responsive ">
												<thead>
													<tr class="table-info">
														<th>STT</th>
														<th>Họ và tên</th>
														<th>Mã số sinh viên</th>
														<th>Ngày điểm danh</th>
														<th>Địa chỉ</th>
														<th>Số điện thoại</th>
														<th>Email</th>
														<th>Giáo viên hướng dẫn</th>
													</tr>
												</thead>
												<tbody>
													<?php foreach($list as $row):?>
													<tr>
														<td></td>
														<td><?php echo $row['student_fullname']  ?></td>
														<td><?php echo $row['mssv']  ?></td>
														<td><?php echo $row['date_attendance']  ?></td>
														<td><?php echo $row['address']  ?></td>
														<td><?php echo $row['phone']  ?></td>
														<td><?php echo $row['email']  ?></td>
														<td><?php echo $row['teacher_name']  ?></td>
													</tr>
													<?php endforeach; ?>
												</tbody>
										</table>
									</div>
								</div>
							</div>
						</section>
					<script>
						$("#attendance").addClass("active");
					</script>
</body>

<style type="text/css">
		body
		{
		    counter-reset: Serial;          
		}
		tr td:first-child:before
		{
		  counter-increment: Serial;      
		  content: counter(Serial); 
		}
</style>