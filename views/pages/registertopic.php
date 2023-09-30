<?php
require_once('views/header.php');  
require_once ('config.php');
require_once ('system/load.php');
require_once ('system/core.php');
require_once ('system/Database.php');

if(!isset($_SESSION['customer_id'])) {
	redirect('index.php?option=login'); 
}

$category = loadModel('u_thesistopic');
$list=$category->thesistopic_list();
$list_ttdn=$category->thesistopic_list_ttdn();



// $user = loadModel('user');
// $id = $_SESSION['customer_id'];
// $row= $user->list_user_cuss($id);

?>
<section class="flight-destinations">
	<div class="container bg-white">
		<div class="row">
			<div class="account-info-wrapper">
				<h2 style="text-align:center;">Danh sách khóa luận</h2>
			</div>
			<div class="col-md-12 col-sm-12">
				<div class="flight-table">
						<?php if(has_flash('thongbao')):  ?>
							<div class="alert alert-success" > <?php echo get_flash('thongbao') ; ?> </div>
						<?php endif; ?>
						<?php if(has_flash('thongbaoloi')):  ?>
							<div class="alert alert-danger" > <?php echo get_flash('thongbaoloi') ; ?> </div>
						<?php endif; ?>
					<table>
						<thead>
							<tr>
								<th>Tên đề tài</th>
								<th>Giáo viên hướng dẫn</th>
								<th>Mô tả</th>
								<th>Yêu cầu</th>
								<th>Kiến thức kỹ năng</th>
								<th>Ngành học</th>
								<th>Loại khóa luận</th>
								<th>Đăng ký ngay</th>
							</tr>
						</thead>
						<tbody>
							<?php foreach($list as $row):?>
								<?php $id=$row['ID']; ?>
								<tr>
									<td class="text-center text-danger"><?php echo $row['Name']  ?></td>
									<td class="text-center"><h6><?php echo $row['Instructors']  ?></td>
										<td class="text-center"><?php echo $row['Description']  ?></td>
										<td class="text-center"><?php echo $row['Requirement']  ?></td>
										<td class="text-center"><?php echo $row['SkillKnowledge']  ?></td>
										<td class="text-center"><?php echo $row['Subject']  ?></td>
										<td class="text-center"><?php echo substr($row['ThesisTopicType'],0,30); ?></td></td>
										<td class="text-center">
											<a class="btn btn-sm btn-warning" href="index.php?option=thesistopic&cat=update&id=<?php echo $id; ?>" > <i class="text-white fas fa-edit"></i> </a>
										</td>
									</tr>
								<?php endforeach; ?>
							</tbody>
						</table>
					</div>
				</div>
			</div>
		</div>
	</section>
	<?php require_once('views/footer.php');  ?>
