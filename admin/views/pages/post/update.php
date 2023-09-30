<?php 
$id=$_REQUEST['id'];
$topic= loadModel('topic');
$post = loadModel('post');
$row=$post->post_rowid($id);
$list_cat = $topic->topic_list('index');
$str_id='';
foreach ($list_cat as $cat)
{
	if($cat['id']==$row['id'])
	{
		$str_id.='<option selected value="'.$cat['id'].'">'.$cat['name'].'</option>';
	}
	else 
	{
		$str_id.='<option value="'.$cat['id'].'">'.$cat['name'].'</option>';
	}
}

?>

<?php require_once 'views/header.php'; ?>
<section class=" clearfix maincontent py-2">
	<form name="form1" method="post" action="index.php?option=post&cat=process" enctype="multipart/form-data" >
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
						<a href="" title="">Advertising Post</a>
					</li>	
					<li class="breadcrumb-item active" aria-current="page">
						<a href="" title="">Update Post</a>
					</li>

				</ol>
			</nav>
		</div>
		<div class="col-md-6 text-right" >	
		<button class="btn btn-sm btn-success" name="CAPNHAT"  type="submit">
		 Save [Update]	</button> 
		<a class="btn btn-sm btn-danger" href="index.php" >Exit</a>
		</div>
		</div>
		</div>
		<div class="card-block p-3">
			<div class="row">
				<div class="col-md-9">
					<input type="hidden" name="id" value="<?php echo $row['id'] ?>">
					<fieldset class="form-group" >
						<table>Name Post</table>
						<input type="text" name="name" value="<?php echo $row['title'] ?>" class="form-control" placeholder="Tên Sản Phẩm" required>
					</fieldset>
					<fieldset class="form-group  " >
						<table>Titel Post</table>
					<textarea name="detail" class="form-control ckeditor" rows="20" required> <?php echo $row['detail'] ?></textarea>
					</fieldset>
					
			</div>
			<div class="col-md-3">
					<fieldset class="form-group" >
						<table>Type Post</table>
						<select name="aaa"  class="form-control" required><option  value="1">Choose Post</option>
						<?php echo $str_id ?>
						</select>
						
					</fieldset>
				
				
					<fieldset class="form-group" >
						<table>Status</table>
						<select name="status"  class="form-control" ><option  value="1">Choose Status</option>
						<option value="1">Xuất bản </option>
						<option value="2">Chưa xuất bản</option>
						</select>
					</fieldset>
						<fieldset class="form-group" >
						<table>Avatar</table>
						<input type="file" name="img" class="form-control" >	
					</fieldset>
			</div>
			</div>			
		</div>	
		</div>
		</div>
	</form>
</section>
<?php require_once 'views/footer.php';  ?>