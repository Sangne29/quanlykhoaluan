<?php
$user = loadModel('user');
$list=$user->list_user();

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
								<div class="col-md-6 "> <h5 class="pl-2 mt-2 text-blues">Quản lý người dùng</h5> </div>
								<div class="col-md-6 m-0">
									<ol class="breadcrumb bg-white float-sm-right m-0">
										<li class="breadcrumb-item m-0"><a href="~Admin">Home</a></li>
										<li class="breadcrumb-item active m-0">Quản lý người dùng</li>
									</ol>
								</div>
							</div>
						</div>
						<section class=" ">
							<div class=" bg-white card  p-3">
								<div class="row justify-content-end">
									<div class="col-md-4">
										<div class="pt-1 ml-5 d-flex flex-row">
											<a class="text-white btn-sm " href="index.php?option=user&cat=insert">
											<button class="btn-success" style="width: 150px; height : 40px" >Thêm người dùng <i class="fas fa-plus"></i></button>	
											
											</a>
											<a class="text-white btn-sm  " href="index.php?option=user&cat=trash">
												
												<button class="btn-danger" style="width: 150px; height : 40px" >Người dùng đã xóa <i class="fas fa-trash"></i></button>
											</a>
										</div>
									</div>
								</div>
								<div class="row">
									<div  class="card-block p-3">
										<?php if(has_flash('thongbao')):  ?>
											<div class="alert alert-success" > <?php echo get_flash('thongbao') ; ?> </div>
										<?php endif; ?>
										<?php if(has_flash('thongbaoloi')):  ?>
											<div class="alert alert-danger" > <?php echo get_flash('thongbaoloi') ; ?> </div>
										<?php endif; ?>

										<div class="col-md-12 p-3">
											<table id="myTable1" class="table table-striped table-bordered dt-responsive">
												<thead>
													<tr>
														<th class="text-center">ID</th>
														<th class="text-center" style='width:15%'>Họ và tên</th>
														<th class="text-center">Tên tài khoản</th>
														<th class="text-center">Số điện thoại</th>
														<th class="text-center">Email</th>
														<th class="text-center">Địa chỉ</th>
														<th class="text-center" style='width:12%'>Tùy chọn</th>
													</tr>
												</thead>
												<tbody>
													<?php foreach($list as $row):?>
														<?php $id=$row['ID']; ?>
														<tr>
															<td class="text-center text-danger">0<?php echo $row['ID']  ?></td>
															<td class="text-center"><h6><?php echo $row['fullname']  ?></td>
															<td class="text-center"><?php echo $row['username']  ?></td>
															<td class="text-center"><?php echo $row['phone']  ?></td>
															<td class="text-center"><?php echo $row['email']  ?></td>
															<td class="text-center"><?php echo $row['address']  ?></td>
															<td class="text-center"><?php if($row['status']==1):  ?>
															<a class="btn btn-sm btn-success" href="index.php?option=user&cat=status&id=<?php echo $id; ?>" > <i class="fa fa-toggle-on"></i> </a>
															<?php else: ?>
															<a class="btn btn-sm btn-danger" href="index.php?option=user&cat=status&id=<?php echo $id; ?>" > <i class="fa fa-toggle-off"></i> </a>	
															<?php endif;  ?>
															<a class="btn btn-sm btn-warning" href="index.php?option=user&cat=update&id=<?php echo $id; ?>" > <i class="text-white fas fa-edit"></i> </a>
															<a class="btn btn-sm btn-danger " href="index.php?option=user&cat=detrash&id=<?php echo $id; ?>" > <i class=" fa fa-trash"></i> </a></td>	
														</tr>
													<?php endforeach; ?>
												</tbody>
											</table>
										</div>
									</div>
								</div>
							</section>
							<script>
								$("#User").addClass("active");
							</script>
						</div>
					</div>
				</div>
			</div>
		</section>
	</body>

