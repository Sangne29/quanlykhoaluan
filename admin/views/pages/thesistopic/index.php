<?php  
$category = loadModel('thesistopic');
$userId = $_SESSION['user_id'];
$role =  $_SESSION['Access'];
$list=$category->thesistopic_list($userId,$role);
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
								<div class="col-md-6 "> <h5 class="pl-2 mt-2 text-blues">Quản lý đề tài</h5> </div>
								<div class="col-md-6 m-0">
									<ol class="breadcrumb bg-white float-sm-right m-0">
										<li class="breadcrumb-item m-0"><a href="~Admin">Home</a></li>
										<li class="breadcrumb-item active m-0">Quản lý đề tài</li>
									</ol>
								</div>
							</div>
						</div>
						<section class=" ">
							<div class=" bg-white card">
								<div class="row justify-content-end">
									<div class="col-md-3">
										<div class=" pt-1 ml-5">
											<a class="text-white btn-sm btn-success" href="index.php?option=thesistopic&cat=insert">Thêm đề tài <i class="fas fa-plus"></i></a>
											<a class="text-white btn-sm btn-danger " href="index.php?option=thesistopic&cat=trash">Thùng rác<i class="fas fa-trash"></i></a>
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
											<table id="myTable1" class="table  table-striped table-bordered dt-responsive text-center">
												<thead>
													<tr class='table-info'>
														<th>STT</th>
														<th>Tên đề tài</th>
														<th>GV hướng dẫn</th>
														<th>Mô tả</th>
														<th>Yêu cầu</th>
														<th>Kiến thức kỹ năng</th>
														<th>Chuyên ngành</th>
														<th>Loại khóa luận</th>
														<th>Trạng thái</th>
														<th>Chỉnh sửa</th>
													</tr>
												</thead>
												<tbody>
													<?php foreach($list as $row):?>
														<?php $id=$row['ID']; ?>
														<tr>
															<td></td>
															<td class="text-center text-danger"><?php echo $row['Name']  ?></td>
															<td class="text-center"><h6><?php echo $row['Instructors']  ?></td>
															<td class="text-center"><?php echo $row['Description']  ?></td>
															<td class="text-center"><?php echo $row['Requirement']  ?></td>
															<td class="text-center"><?php echo $row['SkillKnowledge']  ?></td>
															<td class="text-center"><?php echo $row['Subject']  ?></td>
															<td class="text-center"><?php echo substr($row['ThesisTopicType'],0,30); ?></td></td>
															<td class="text-center"><?php if($row['Status']==1):  ?>
																<p class='border border-success rounded'> Đã duyệt </p>
																<?php else: ?>
																<p class='border border-danger rounded'> Chưa duyệt </p>
																<?php endif;  ?>
															</td>
															<td class="text-center" style="width:9%">
																<a class="btn btn-sm btn-warning" href="index.php?option=thesistopic&cat=update&id=<?php echo $id; ?>" > <i class="text-white fas fa-edit"></i> </a>
																<a class="btn btn-sm btn-danger " href="index.php?option=thesistopic&cat=detrash&id=<?php echo $id; ?>" > <i class=" fa fa-trash"></i> </a>
															</td>
														</tr>
													<?php endforeach; ?>
												</tbody>
											</table>
										</div>
									</div>
								</div>
							</section>
							<script>
								$("#thesistopic").addClass("active");
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
