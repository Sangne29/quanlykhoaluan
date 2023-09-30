<?php

$user = loadModel('user');

$list=$user->list_user_admin();

require_once 'views/header.php';
  ?>
  


<section class="clearfix maincontent py-3">
	<nav aria-label="breadcrumb">
				<ol class="breadcrumb pl-3 ml-3 mr-3 bg-none">
					<li class="breadcrumb-item">
						<a href="" title="">Dashboard</a>
					</li>
					<li class="breadcrumb-item">
						<a href="" title="">Users</a>
					</li>	
					<li class="breadcrumb-item active" aria-current="page">
						<a +href="" title="">Manage Users</a>
					</li>

				</ol>
			</nav>
		<div class="w-100 container-fluid " >
			<?php if ($_SESSION['user_id']==28){ ?>

  	
  	<?php } else{ ?>
<span class="alert alert-danger"> Bạn k có quyền sửa</span>
  	<?php }  ?>
			<div class="card">
				<div class="card-header">
					<div class="row">
						<div class="col-md-6"><strong class="text-danger"> LIST OF USER CUSTOMER</strong></div>
						<div class="col-md-6 text-right">
										<?php if ($_SESSION['user_id']==28){ ?>

  	<a class="btb btn-danger btn-sm" href="index.php?option=user&cat=InsertAdmin"> Insert Admin</a>
  	<?php } else{ ?>
<span class="alert alert-danger"> Bạn k có quyền sửa</span>
  	<?php }  ?>
							
							<a class="btb btn-danger btn-sm" href="index.php?option=user&cat=trash"><i class="fa fa-trash-o"></i> Trash</a>
						</div> 
					</div>
				</div>
				<div  class="card-block p-3">
				<?php if(has_flash('thongbao')):  ?>
					<div class="alert alert-danger" > <?php echo get_flash('thongbao') ; ?> </div>
				<?php endif; ?>

					<table id="myTable" class="table table-inverse table-hover table-busered">
						<thead>
							<tr>
								<th class="text-center" style="width:10%;">ID</th>
								<th class="text-center" style="width:20%">Full-Name</th>
								<th class="text-center">User-Name</th>
								<th class="text-center">Phone</th>
								<th class="text-center">admin type</th>
								<th class="text-center" style="width:250px;">Email</th>
								<th class="text-center" style="width:250px;">Option</th>
							</tr>
						</thead>
						<tbody>
						<?php foreach($list as $row):?>
							<?php $id=$row['user_id']; ?>
							<tr>
									<td class="text-center text-danger">0<?php echo $row['user_id']  ?></td>
									<td class="text-center"><h6><?php echo $row['fullname']  ?></td>
									<td class="text-center"><?php echo $row['username']  ?></td>
									<td class="text-center"><?php echo $row['phone']  ?></td>
									<td class="text-center text-danger"><?php if ($row['user_id']==28) {
										echo "Có thể cấp quyền";
									}else{echo "Không thể cấp quyền";} ?></td>
									<td class="text-center"><?php echo substr($row['email'],0,30); ?></td>
									<td class="text-center"><?php if ($_SESSION['user_id']!=28) {
										echo "admin bình thường k có quyền";
									}
									else{

									 if($row['status']==1):  ?>
									<a class="btn btn-sm btn-success" href="index.php?option=user&cat=status&id=<?php echo $id; ?>" > <i class="fa fa-toggle-on"></i> </a>
									<?php else: ?>
										<a class="btn btn-sm btn-danger" href="index.php?option=user&cat=status&id=<?php echo $id; ?>" > <i class="fa fa-toggle-off"></i> </a>	
								<?php endif;  ?>
									<a class="btn btn-sm btn-warning" href="index.php?option=user&cat=update_quyen_ad&id=<?php echo $id; ?>" > <i class="fa fa-pencil-square-o"></i> </a>
									<a class="btn btn-sm btn-danger " href="index.php?option=user&cat=detrash&id=<?php echo $id; ?>" > <i class=" fa fa-trash"></i> </a></td>	
								<?php }
								 ?>
							</tr>
						<?php endforeach; ?>
						</tbody>
					</table>
				</div>
			</div>
		</div>
	</div>
	</section>
	<style type="text/css">
		
		a:hover{
    color: red;
    text-decoration: none;
}
	</style>