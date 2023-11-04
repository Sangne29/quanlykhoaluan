<?php  
$id = (int)$_REQUEST['id'];
$category = loadModel('thesistopic');
$category_evaluation = loadModel('evaluation');

$userId = $_SESSION['user_id'];
$role =  $_SESSION['Access'];

$thesistopic_name=$category->thesistopic_name($id);
$list_evaluation = $category_evaluation->list_evaluation($userId, $id);
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
								<div class="col-md-6 "> <h5 class="pl-2 mt-2 text-blues"><?php echo $thesistopic_name; ?> </h5> </div>
								<div class="col-md-6 m-0">
									<ol class="breadcrumb bg-white float-sm-right m-0">
										<li class="breadcrumb-item m-0"><a href="~Admin">Home</a></li>
										<li class="breadcrumb-item active m-0">Đánh giá sinh viên</li>
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
											<form  action="index.php?option=evaluation&cat=update&id=<?php echo $_REQUEST['id'];?>" method="POST" >
											<table id="myTable1" class="table table-striped table-bordered dt-responsive text-center">
												<thead>
													<tr class='table-info'>
														<th>STT</th>
														<th>Họ và tên</th>
														<th>MSSV</th>
														<th>Lớp</th>
														<th>Nhóm</th>
														<th>L01</th>
														<th>L02</th>
														<th>L03</th>
														<th>L04</th>
														
													</tr>
												</thead>
												<tbody>
														<?php foreach($list_evaluation as $row):?>
														<tr>
															<td></td>
															<td><?php echo $row['fullname']  ?></td>
															<td><?php echo $row['username']  ?></td>
															<td><?php echo $row['ClassRoom']  ?></td>
															<td><?php echo $row['SubGroupID']  ?></td>
															<td><input name="<?php echo ('l01_'.$row['id']); ?>" class="form-control" type="text" value="<?php echo $row['l01']; ?>"></td>
															<td><input name="<?php echo ('l02_'.$row['id']); ?>"class="form-control" type="text" value="<?php echo $row['l02']; ?>"></td>
															<td><input name="<?php echo ('l03_'.$row['id']); ?>"class="form-control" type="text" value="<?php echo $row['l03']; ?>"></td>
															<td><input name="<?php echo ('l04_'.$row['id']); ?>"class="form-control" type="text" value="<?php echo $row['l04']; ?>"></td>

														</tr>
														<?php endforeach; ?>
													
										        </tbody>
												<input type="submit" name="update_evaluation" value="Cập nhật" class="form-control btn-primary col-md-1 float-right" >
													</form>
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