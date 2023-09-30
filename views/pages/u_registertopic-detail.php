<?php
require_once('views/header.php');  
require_once ('config.php');
require_once ('system/load.php');
require_once ('system/core.php');
require_once ('system/Database.php');

require_once('views/header.php');
if(!isset($_SESSION['customer_id'])) {
	redirect('index.php?option=login'); 
}
$id=$_REQUEST['id'];
$registertopic= loadModel('u_registertopic');
$row=$registertopic->registertopic_rowid($id);

$id = $row['ThesisTopicID'];
$thesisTopic=loadModel('u_thesistopic');
$rowthesisTopic=$thesisTopic->thesistopic_rowid($id);

$user = loadModel('user');
$rowUser = $user->list_user_cuss($id);

?>

<section class="booking">
	<div class="container bg-white" style="padding:20px;">
		<div class="row">
			<div class="col-md-8">
				<div class="booking-confirmed booking-outer">
					<div class="confirmation-title">
						<div class="form-title form-title-1">
							<h2 class="text-danger">Thông tin chi tiết đề tài/Tiến độ</h2>
						</div>
						<div class="payment-info detail">
							<div class="row">
								<div class="col-md-12">
								</div>
							</div>
						</div>
						<div class="col-md-12">
							<table class="table" style="margin-top:20px;">
								<tbody>
									<tr>
										<td class="title">Tên sinh viên</td>
										<td><?php echo $row['StudentName'] ?></td>
									</tr>
									<tr>
										<td class="title">Mã số sinh viên</td>
										<td><?php echo $row['username'] ?></td>
									</tr>
									<tr>
										<td class="title">Lớp</td>
										<td><?php echo $row['ClassRoom'] ?></td>
									</tr>
									<tr>
										<td class="title">Nhóm đề tài</td>
										<td><?php echo $row['GroupName']  ?></td>
									</tr>
									<tr>
										<td class="title">Giáo viên hướng dẫn</td>
										<td><?php echo $row['TeacherName'] ?></td>
									</tr>
									<tr>
										<td class="title">Chuyên ngành</td>
										<td><?php echo $row['Subject'] ?></td>
									</tr>
									<tr>
										<td class="title">Loại đề tài</td>
										<td><?php echo $rowthesisTopic['ThesisTopicType'] ?></td>
									</tr>
									<tr>
										<td class="title">Tên đề tài</td>
										<td class="b-id text-danger"><?php echo $row['TopicName'] ?></td>
									</tr>
									<td class="title">Mô tả</td>
										<td><?php echo $rowthesisTopic['Description'] ?></td>
									</tr>
									<tr>
										<td class="title">Yêu cầu</td>
										<td><?php echo $rowthesisTopic['Requirement'] ?></td>
									</tr>
									<tr>
										<td class="title">Kiến thức và kỹ năng</td>
										<td class="b-id text-danger"><?php echo $rowthesisTopic['SkillKnowledge'] ?></td>
									</tr>
									<tr>
										<td class="title">Tiến độ hoàn thành</td>
										<td><?php echo $row['Process'] ?></td>
									</tr>
									<tr>
										<td class="title">Điểm hướng dẫn</td>
										<td><?php echo $row['GuidePoints'] ?></td>
									</tr>
									<tr>
										<td class="title">Ghi chú từ giảng viên hướng dẫn</td>
										<td><?php echo $row['Commnet'] ?></td>
									</tr>
									<tr>
										<td class="title">Điểm phản biện</td>
										<td><?php echo $row['PointProcess'] ?></td>
									</tr>
									<tr>
										<td class="title">Ghi chú từ giảng viên phản biện</td>
										<td><?php echo $row['Commentcounter'] ?></td>
									</tr>
									<tr>
										<td class="title">Tình trạng</td>
										<td style="color: green;">Đang làm</td>
									</tr>
								</tbody>
							</table>


						</div>
					</div>
				</div>
			</section>
			<style>
				.title {
					font-size: 17px;
					font-weight: bold;
					padding-right: 50px;
					color: #ff0000;
				}
			</style>

			<?php require_once('views/footer.php');  ?>
