<?php  
$category = loadModel('registertopic');
$userId = $_SESSION['user_id'];
$role =  $_SESSION['Access'];
$list=$category->registertopic_list_supervising($userId,$role);
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
								<div class="col-md-6 "> <h5 class="pl-2 mt-2 text-blues">Danh sách đề tài phản biện</h5> </div>
								<div class="col-md-6 m-0">
									<ol class="breadcrumb bg-white float-sm-right m-0">
										<li class="breadcrumb-item m-0"><a href="~Admin">Home</a></li>
										<li class="breadcrumb-item active m-0">Danh sách phản biện</li>
									</ol>
								</div>
							</div>
						</div>
						<section class=" ">
							<div class=" bg-white card">
								<div class="row justify-content-end">
									<div class="col-md-3">
										<div class=" pt-1 ml-5">
											<!-- <a class="text-white btn-sm btn-success" href="index.php?option=user&cat=insert">Add User <i class="fas fa-plus"></i></a>
											<a class="text-white btn-sm btn-danger " href="index.php?option=user&cat=trash">Thùng rác<i class="fas fa-trash"></i></a> -->
										</div>
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
														<th>Lớp</th>
														<th>Nhập điểm phản biện</th>
														<!-- <th>Nhập điểm phản biện 2</th> -->
														<th>Kết quả đánh giá</th>
														<th>Tên đề tài</th>
														<th>Loại đề tài</th>
														<th>Giáo viên hướng dẫn</th>
														<!--<th>Giáo viên phản biện</th>-->
														<th>Bộ môn</th>
														<?php if(isset($_SESSION['Access']) && $_SESSION['Access'] == 8) {?>
														<th>Phân phản biện</th>
														<?php  }?>
													</tr>
												</thead>
												<tbody>
													<?php foreach($list as $row):?>
													<tr>
														<td></td>
														<td><?php echo $row['StudentName']  ?></td>
														<td><?php echo $row['username']  ?></td>
														<td><?php echo $row['ClassRoom']  ?></td>
														
														<?php if(isset($_SESSION['Access']) && $_SESSION['Access'] == 8) {?>
															<td style="";>
															<?php echo $row['PointProcess']." | ".$row['PointProcess2'];  ?>
															<a class="btn btn-sm btn-light text-warning border" href="index.php?option=registertopic&cat=updateProcessPoint&id=<?php echo $row['ID']  ?>">
																<i class="fas fa-edit"></i>
															</a>
															<!-- </td>
															<td style="";>
																<?php echo $row['PointProcess2']  ?>
																<a class="btn btn-sm btn-light text-warning border" href="index.php?option=registertopic&cat=updateProcessPoint&id=<?php echo $row['ID']  ?>">
																	<i class="fas fa-edit"></i>
																</a>
															</td> -->
														<?php  }else { if ($row['SupervisingTeacherID'] == $userId) { ?>

														<td style="";>
															<?php echo $row['PointProcess']  ?>
															<a class="btn btn-sm btn-light text-warning border" href="index.php?option=registertopic&cat=updateProcessPoint&id=<?php echo $row['ID']  ?>">
																<i class="fas fa-edit"></i>
															</a>
														</td>
														<?php } else { ?>
														<td style="";>
															<?php echo $row['PointProcess2']  ?>
															<a class="btn btn-sm btn-light text-warning border" href="index.php?option=registertopic&cat=updateProcessPoint&id=<?php echo $row['ID']  ?>">
																<i class="fas fa-edit"></i>
															</a>
														</td>
														<?php }} ?>
														<td> <a href="index.php?option=registertopic&cat=ResulTofEvaluation&id=<?php echo $row['ID']; ?>">KQ Đánh giá </a></td>
														<td> <?php echo $row['TopicName']  ?></td>
														<td> <?php echo $row['TopicType']  ?> </td>
														<td> <?php echo $row['TeacherName'] ?></td>
														<!--<td> <?php echo $row['TeacherName'] ?></td>-->
														<td> <?php echo $row['Subject']  ?></td>
														<?php if(isset($_SESSION['Access']) && $_SESSION['Access'] == 8) {?>
														<td class="text-center"><a class="btn btn-sm btn-warning" href="index.php?option=registertopic&cat=updateTeacher&id=<?php echo $row['ID']; ?>" > <i class="text-white fas fa-edit"></i> </a></td>
														<?php  }?>
															<!-- <a class="btn btn-sm btn-danger " href="index.php?option=thesistopic&cat=detrash&id=<?php echo $id; ?>" > <i class=" fa fa-trash"></i> </a> --></td>
												</tr>
											<?php endforeach; ?>
										</tbody>

									</table>
								</div>
							</div>
						</div>
					</section>
					<script>
						$("#registertopic").addClass("active");
					</script>
				</div>
			</div>
		</div>
	</div>
</section>
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
