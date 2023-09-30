<?php  
$post = loadModel('post');
$topic= loadModel('topic');
$list=$post->post_list(false);
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
						<div class="col-md-6"><strong class="text-danger"> Thùng Rác bài viết</strong></div>
						<div class="col-md-6 text-right">
							<a class="btb btn-danger btn-sm" href="index.php?option=post">Thoát</a>
						</div>
					</div>
				</div>
				<div  class="card-block p-3">
					<?php if(has_flash('thongbao')):  ?>
					<div class="alert alert-danger" > <?php echo get_flash('thongbao') ; ?> </div>
				<?php endif; ?>
					<table id="myTable" class="table table-inverse table-hover table-bordered">
						<thead>
							<tr>
								<th style="width:90px;"> Hình Ảnh</th>
						
								<th class="text-center">Tên Sp</th>
								<th class="text-center">Loại SP</th>
								<th class="text-center" style="width:160px;"> Ngày Đăng</th>
								<th class="text-center" style="width:160px;"> Chức Năng</th>
								<th style="width:20px;" class="text-center">ID</th>
							</tr>
						</thead>
						<tbody>
							<?php foreach($list as $row):?>
								<?php
								 $id=$row['id']; 
								 $topic_name=$topic->topic_name($row['id']);
								?>
							<tr>
								<td><img class="img-fluid" src="../public/img/post/<?php echo $row['img'] ?>" alt=""></td>
								<td class="text-center"><?php echo $row['title']  ?></td>
								<td><?php echo $topic_name;  ?></td>
								<td> <?php echo $row['created_at']  ?></td>
								<td>
									<a class="btn btn-sm btn-warning" href="index.php?option=post&cat=retrash&id=<?php echo $id; ?>=<?php echo $id; ?>" > Khôi Phục </a>
									<a class="btn btn-sm btn-danger" href="index.php?option=post&cat=delete&id=<?php echo $id; ?>" > Xóa vv </a>
								</td>
								<td class="text-danger"><?php echo $id; ?></td>
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