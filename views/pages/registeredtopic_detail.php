<?php
require_once('views/header.php');  
require_once ('config.php');
require_once ('system/load.php');
require_once ('system/core.php');
require_once ('system/Database.php');

require_once('views/header.php');
$user = loadModel('user');
//
$category = loadModel('u_registertopic');
$customerId = $_SESSION['customer_id'];
$list=$category->registertopic_list_user($customerId);
//
if(!isset($_SESSION['customer_id'])) {
	redirect('index.php?option=login'); 
}
$id = $_SESSION['customer_id'];
$row= $user->list_user_cuss($id);

?>

<section class="flight-destinations">
	<div class="container bg-white">

		<div class="row">
			<div class="account-info-wrapper">
				<h2 style="text-align:center;">Đề tài đã đăng ký</h2>
			</div>
			<div class="col-md-12 col-sm-12">
				<div class="flight-table">
					<?php if(has_flash('thongbao')):  ?>
					<div class="alert alert-success" > <?php echo get_flash('thongbao') ; ?> </div>
					<?php endif; ?>
					<?php if(has_flash('thongbaoloi')):  ?>
					<div class="alert alert-danger" > <?php echo get_flash('thongbaoloi') ; ?> </div>
					<?php endif; ?>
					<table class="text-center">
						<thead>
							<tr>
								<th>Loại đề tài</th>
								<th>Tên đề tài</th>
								<th>Giáo viên hướng dẫn</th>
								<th>Bộ môn</th>
								<th>Tình trạng</th>
								<th>Chi tiết</th>
								<th>Tùy chọn</th>
							</tr>
						</thead>
						<tbody>
							<?php foreach($list as $row):?>

								<td> <?php echo $row['TopicType']  ?> </td>
								<td> <?php echo $row['TopicName']  ?></td>
								<td> <?php echo $row['TeacherName'] ?></td>
								<td> <?php echo $row['Subject']  ?></td>
								<td style="color: green;"> Đang làm</td>
								<td>
									<p><strong class="color-red-3"><a href="index.php?option=u_registertopic&id=<?php echo $row['ID'] ?>">Xem chi tiết</a></strong></p>           
								</td>
								<td class="text-center">
									<a class="btn btn-sm btn-danger" href="index.php?option=registertopic_cancel&id=<?php echo $row['ID'] ?>" >Hủy đăng ký</a>
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
