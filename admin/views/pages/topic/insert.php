<?php  require_once 'views/header.php'; ?>
<section class=" clearfix maincontent py-2">
	<form name="form1" method="post" action="index.php?option=topic&cat=process" enctype="multipart/form-data" >
		<div class="container" >
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
						<a href="" title="">Topics</a>
					</li>	
					<li class="breadcrumb-item active" aria-current="page">
						<a href="" title="">Add Topic</a>
					</li>

				</ol>
			</nav>
		</div>
		<div class="col-md-6 text-right" >	
		<button class="btn btn-sm btn-success" name="THEM"  type="submit">
		 Save [Update]	</button> 
		<a class="btn btn-sm btn-danger" href="index.php" >Exit</a>
		</div>
		</div>
		</div>
		<div class="card-block p-3">
			<div class="row">
				<div class="col-md-9">
					<input type="hidden" name="id" value="<?php echo isset($row['id']) ? $row['id'] : ''  ?>">
						<fieldset class="form-group" >
						<table>Name</table>
					<textarea name="name" class="form-control"  required></textarea>
				<fieldset class="form-group" >
						<table>Trạng Thái</table>
						<select name="status"  class="form-control"><option  value="1">Choose Topic Status</option>
						<option value="1">Xuất bản </option>
						<option value="2">Chưa xuất bản</option>
						</select>
					</fieldset>
			</div>
			
			</div>			
		</div>	
		</div>
		</div>
	</form>
</section>
<?php require_once 'views/footer.php';  ?>