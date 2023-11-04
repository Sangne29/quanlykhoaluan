<?php
    $student_group = loadModel('student_group');
    $nongroup_student = $student_group->nongroup_student_list();
    // print_r($nongroup_student);
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
								<div class="col-md-6 "> <h5 class="pl-2 mt-2 text-blues">Danh sách sinh viên chưa có đề tài </h5> </div>
								<div class="col-md-6 m-0">
									<ol class="breadcrumb bg-white float-sm-right m-0">
										<li class="breadcrumb-item m-0"><a href="~Admin">Home</a></li>
										<li class="breadcrumb-item active m-0">Danh sách sinh viên chưa có đề tài</li>
									</ol>
								</div>
							</div>
						</div>
						<section class=" ">
							<div class=" bg-white card">
								<div class="row justify-content-start">
									<div class="col-md-3">
										
									</div>
								</div>
								<div class="row">
									<div  class="card-block p-3">
										<?php if(has_flash('thongbao')):  ?>
											<div class="alert alert-success" > <?php echo get_flash('thongbao') ; ?> </div>
										<?php endif; ?>
										<div class="col-md-9  w-100 ">
										</div>
										<div class="col-md-12 p-3">
											<table id="myTable1" class="table table-striped table-bordered dt-responsive text-center">
												<thead>
													<tr class='table-info'>
														<th>STT</th>
														<th>Họ và tên</th>
														<th>MSSV</th>
														<th>Giới tính</th>
														<th>SĐT</th>
														<th>Email</th>
														<th>Chọn nhóm</th>
														
														
													</tr>
												</thead>
												<tbody>
														<?php foreach($nongroup_student as $row):?>
														<tr>
															<td></td>
															<td><?php echo $row['fullname']  ?></td>
															<td><?php echo $row['username']  ?></td>
															<td><?php echo $row['gender']  ?></td>
															<td><?php echo $row['phone']  ?></td>
															<td><?php echo $row['email']  ?></td>
															<!-- <td><a href="index.php?option=thesistopic&cat=select_group&id=<?php echo $row['ID'];?>">Thêm vào đề tài</a></td> -->
															<td><button class='btn btn-info add_student_btn' id="add_student_<?php echo $row['ID'];?>" >Thêm</button></td>
															<script>

															</script>
														</tr>
														<?php endforeach; ?>
													
										        </tbody>
									</table>
									
								</div>
							</div>
						</div>
					</section>
					<script>
						// $("#registertopic").addClass("active");
					</script>
				</div>
			</div>
		</div>
	</div>
</section>

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