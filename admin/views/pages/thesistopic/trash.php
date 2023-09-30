<?php  
$thesistopic = loadModel('thesistopic');
$userId = $_SESSION['user_id'];
$list=$thesistopic->thesistopic_trash($userId,$page);
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
							<a class="btb btn-danger btn-sm" href="index.php?option=thesistopic">Thoát</a>
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
					<table id="myTable" class="table table-inverse table-hover table-bordered text-center">
						<thead>
							<tr class='table-info'>
								<th>STT</th>
								<th>Tên đề tài</th>
								<th>GV hướng dẫn</th>
								<th>Mô tả</th>
								<th>Yêu cầu</th>
								<th>Kiến thức kỹ năng</th>
								<th>Chuyên ngành</th>
								<th>Loại khóa luận</th>
								<th>Trạng thái</th>
								<th>Chỉnh sửa</th>
							</tr>
						</thead>
						<tbody>
						<?php foreach($list as $row):?>
								<?php $id=$row['ID']; ?>
								<tr>
									<td></td>
									<td class="text-center text-danger"><?php echo $row['Name']  ?></td>
									<td class="text-center"><h6><?php echo $row['Instructors']  ?></td>
									<td class="text-center"><?php echo $row['Description']  ?></td>
									<td class="text-center"><?php echo $row['Requirement']  ?></td>
									<td class="text-center"><?php echo $row['SkillKnowledge']  ?></td>
									<td class="text-center"><?php echo $row['Subject']  ?></td>
									<td class="text-center"><?php echo substr($row['ThesisTopicType'],0,30); ?></td></td>
									<td class="text-center"><?php if($row['Status']==1):  ?>
										<p class='border border-success rounded'> Đã duyệt </p>
										<?php else: ?>
										<p class='border border-danger rounded'> Chưa duyệt </p>
										<?php endif;  ?>
									</td>
									<td class="text-center" style="width:15%">
										<a class="btn btn-sm btn-warning" href="index.php?option=thesistopic&cat=retrash&id=<?php echo $id; ?>" > Khôi phục </a>
										<a class="btn btn-sm btn-danger"  href="index.php?option=thesistopic&cat=delete&id=<?php echo $id;  ?>" > Xóa vĩnh viễn </a></td>
									</td>
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