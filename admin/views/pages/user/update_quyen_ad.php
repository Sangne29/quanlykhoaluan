<?php 
$id=$_REQUEST['id'];
$user = loadModel('user');
$row=$user->user_rowid($id);
?>

<?php require_once 'views/header.php'; ?>
<nav aria-label="breadcrumb">
				<ol class="breadcrumb p-0 m-0 bg-none">
					<li class="breadcrumb-item">
						<a href="" title="">Dashboard</a>
					</li>
					<li class="breadcrumb-item">
						<a href="" title="">Advertising users</a>
					</li>	
					<li class="breadcrumb-item active" aria-current="page">
						<a +href="" title="">Update users</a>
					</li>

				</ol>
			</nav>
<section class=" clearfix maincontent container py-2">

	
	<form name="form1" method="post" action="index.php?option=user&cat=process" enctype="multipart/form-data" >
		<div class="container-fluid" >
			<div class="card" >
			<div class="card-header" >
			<div class="row" >
			<div class="col-md-5" >
			
		</div>
		<div class="col-md-6 text-right" >	
		<button class="btn btn-sm btn-success" name="CAPNHAT_QUYEN"  type="submit">
		 Save [Update]	</button> 
		<a class="btn btn-sm btn-danger" href="index.php" >Exit</a>
		</div>
		</div>
		</div>
		<div class="login-form p-4   ">
			<div class="row">
		<div class="col-md-6">
			<form name="from1" action="" method="post">
				<input type="hidden" name="id" value="<?php echo $row['user_id'] ?>">
				<fieldset class="form-group">
					<label  > User-Name</label>
					<input type="text" class="form-control" name="username" value="<?php echo $row['username']; ?>"   >
				</fieldset>
				<fieldset class="form-group">
					<label  >Full-Name</label>
					<input type="text" class="form-control" name="userfullname" value="<?php echo $row['fullname']; ?>" >
				</fieldset>
			
				<fieldset class="form-group">
					<label  >Email</label>
					<input type="text" class="form-control" name="email" value="<?php echo $row['email']; ?>" >
				</fieldset>
					<fieldset class="form-group">
					<label >Phone</label>
					<input type="text" class="form-control" name="phone" value="<?php echo $row['phone']; ?>" >
				</fieldset>
				
				</div>
				<?php if ($row['user_id']==1) {
										
									}
									else{ ?>

				<div class="col-md-6"><h5>PHÂN QUYỀN ADMIN</h5>
				<label  >Phần quyền Xem/Sửa</label>
				<select name="access_product"  class="form-control">
						<option value="0">Chỉ xem</option>
						<option value="1">Cho phép sửa</option>
						</select>
					</div>
				<?php } ?>
		</div>
			</form>
		
		</div>
	</form>
	</div>
	</div>
</section>
<?php require_once 'views/footer.php';  ?>