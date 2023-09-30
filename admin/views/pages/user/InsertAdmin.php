<?php 
$user = loadModel('user');
?>

<?php require_once 'views/header.php'; ?>
<section class=" clearfix maincontent py-2">
	<form name="form1" method="post" action="index.php?option=user&cat=process" enctype="multipart/form-data" >
		<div class="container-fluid" >
			<div class="card" >
			<div class="card-header" >
			<div class="row" >
			<div class="col-md-5" >
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
		</div>
		
		<div class="col-md-6 text-right" >	
		<button class="btn btn-sm btn-success" name="THEMADMIN"  type="submit">
		 Save [Update]	</button> 
		<a class="btn btn-sm btn-danger" href="index.php" >Exit</a>
		</div>
		</div>
		</div>
		<div class="container" >
		<div class="row m-auto">
			<div class=" m-auto col col-md-8">
				<?php if(has_flash('thongbao')):  ?>
					<div class="alert alert-danger" > <?php echo get_flash('thongbao') ; ?> </div>
				<?php endif; ?>
							<div class="login-form p-4   "> 
							
										<h5 class="text-center text-danger"> Thêm User Admin</h5>

				<input type="hidden" name="id" value="<?php isset($row['user_id']) ? $row['user_id'] : ''  ?>">
				<fieldset class="form-group">
					<label  > User-Name</label>
					<input type="text" class="form-control" name="username" value=""   >
				</fieldset>
				<fieldset class="form-group">
					<label  >Full-Name</label>
					<input type="text" class="form-control" name="userfullname" value="" >
				</fieldset>
			
				<fieldset class="form-group">
					<label  >PassWord</label>
					<input type="password" class="form-control" name="password1" value="" >
				</fieldset>
					<fieldset class="form-group">
					<label  >Confirm PassWord</label>
					<input type="password" class="form-control" name="password2" value="" >
				</fieldset>
					<fieldset class="form-group">
					<label >Phone</label>
					<input type="text" class="form-control" name="phone" value="" >
				</fieldset>
					<fieldset class="form-group" >
						<table>Gender</table>
						<select name="gender"  class="form-control" required><option  value="0">Choose Gender</option>
						<option  value="0">Man</option>
						<option  value="1">Woman</option>
						</select>
						
					</fieldset>
		
			</form>
		</div>
		</div>
		</div>
			</div>
		</div>
	</div>
</section>
<?php require_once 'views/footer.php';  ?>