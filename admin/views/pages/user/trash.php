<?php  
$user = loadModel('user');
$list=$user->list_user($page);
?>
<?php 
require_once 'views/header.php';
  ?>

<section class="clear
fix maincontent py-3">
		<div class="w-100 container-fluid " >
			<div class="card">
				<div class="card-header">
					<div class="row">
						<div class="col-md-6"><strong class="text-danger">Thùng rác</strong></div>
						<div class="col-md-6 text-right">
							<a class="btb btn-danger btn-sm" href="index.php?option=user">Thoat</a>
						</div>
					</div>
				</div>
				<div  class="card-block p-3">
					<?php if(has_flash('thongbao')):  ?>
				    	<div class="alert alert-success" > <?php echo get_flash('thongbao') ; ?> </div>
				    <?php endif; ?>
					<?php if(has_flash('thongbaoloi')):  ?>
				    	<div class="alert alert-danger" > <?php echo get_flash('thongbaoloi') ; ?> </div>
			    	<?php endif; ?>
					<table id="myTable" class="table table-inverse table-hover table-bordered">
						<thead>
							<tr>
							<th class="text-center" style="width:5%;">STT</th>
								<th class="text-center" style="width:20%">Họ và tên</th>
								<th class="text-center">Tên tài khoản</th>
								<th class="text-center">Số điện thoại</th>
								<th class="text-center" style="width:250px;">Email</th>
								<th class="text-center" style="width:250px;">Tùy chọn</th>
							</tr>
						</thead>
						<tbody>
							<?php foreach($list as $row):?>
								<?php
								 $id=$row['ID']; 
								?>
							<tr>
								<td class="text-danger"><?php echo $id; ?></td>
								<td class="text-center"><?php echo $row['fullname']  ?></td>
								<td> <?php echo $row['fullname']  ?></td>
								<td> <?php echo $row['username']  ?></td>
								<td class="text-danger"> <?php echo $row['phone']  ?></td>
								<td class="text-danger"><a class="btn btn-sm btn-warning" href="index.php?option=user&cat=retrash&id=<?php echo $id; ?>" > Khôi phục </a>
									<a class="btn btn-sm btn-danger" href="index.php?option=user&cat=delete&id=<?php echo $id; ?>" > Xóa vĩnh viễn </a></td>
								
							</tr>
						<?php endforeach; ?>
						</tbody>
					</table>
				</div>
			</div>
		</div>
<script>
$(document).ready( function () {
    $('#myTable').DataTable();
} );
</script>
<?php require_once 'views/footer.php';  ?>