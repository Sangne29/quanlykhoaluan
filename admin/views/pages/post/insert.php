<?php 
$topic = loadModel('topic');
$list_cat = $topic->topic_list('index');

$str_catid='';
foreach ($list_cat as $cat) {
	$str_catid.='<option value="'.$cat['id'].'">'.$cat['name'].'</option>';
}

?>
<?php require_once 'views/header.php'; ?>
<section class=" clearfix maincontent py-2">
	<form name="form1" method="post" action="index.php?option=post&cat=process" enctype="multipart/form-data" >
		<div class="container-fluid" >
			<div class="card" >
			<div class="card-header" >
			<div class="row" >
			<div class="col-md-6" >
			<nav aria-label="breadcrumb">
				<ol class="breadcrumb p-0 m-0 bg-none">
					<li class="breadcrumb-item">
						<a href="" title="">Dashboard</a>
					</li>
					<li class="breadcrumb-item">
						<a href="" title="">Post</a>
					</li>	
					<li class="breadcrumb-item active" aria-current="page">
						<a href="" title=""> Add Post</a>
					</li>

				</ol>
			</nav>
		</div>

		<div class="col-md-6 text-right" >
		<button class="btn btn-sm btn-success" name="THEM"  type="submit">
		<i class="fas fa-save"></i> Save [Insert]	</button> 
		<a class="btn btn-sm btn-danger" href="index.php" >Exit</a>
		</div>
		</div>
		</div>
		<div class="card-block p-3">
			<div class="row">
				<div class="col-md-9">
					<fieldset class="form-group" >
						<table>Post title</table>
						<input type="text" name="name" class="form-control" placeholder="" required>
					</fieldset>
					<fieldset class="form-group" >
						<table>Content</table>
					<textarea name="detail" class="form-control ckeditor" rows="6" required></textarea>
					</fieldset>
						
			<div class="col-md-3">
					<fieldset class="form-group" >
						<table>Category</table>
						<select name="aaa"  class="form-control" ><option  value="">--Phân loại--</option>
						<?php 
							echo $str_catid;
						 ?>
						</select>
					</fieldset>
			
					<fieldset class="form-group" >
						<table>Trạng Thái</table>
						<select name="status"  class="form-control"><option  value="1">--Trạng Thái--</option>
						<option value="1">Xuất bản </option>
						<option value="2">Chưa xuất bản</option>
						</select>
					</fieldset>
						<fieldset class="form-group" >
						<table>Banner</table>
						<input type="file" name="img" class="form-control" required>	
					</fieldset>
			</div>
			</div>			
		</div>	
		</div>
		</div>
	</form>
</section>
<?php require_once 'views/footer.php';  ?>