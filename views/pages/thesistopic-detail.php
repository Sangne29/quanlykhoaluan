<?php
require_once('views/header.php');  
require_once ('config.php');
require_once ('system/load.php');
require_once ('system/core.php');
require_once ('system/Database.php');

$user = loadModel('User');
$registertopic= loadModel('U_registertopic');

$id=$_REQUEST['id'];
$u_thesistopic= loadModel('U_thesistopic');
$row=$u_thesistopic->thesistopic_rowid($id);

if(!isset($_SESSION['customer_id'])) {
	redirect('index.php?option=login'); 
}

$id = $_SESSION['customer_id'];
$rowUser= $user->list_user_cuss($id);


$studentgroup= loadModel('Student_group');
$listGroup=$studentgroup->all_studentgroup($row['ID']);



$teacher = "Thực thập doanh nghiệp";
if ($row['ThesisTopicTypeID'] == 1) 
{
	$teacher = "Khóa luận tốt nghiệp.";
}
?>

<?php
if(isset($_POST['Register']))
{
$idTicket = $_POST['idTicket'];
if(isset($idTicket)){
    $_SESSION['idTicket'] = $idTicket;
}else{
    $idTicket = 0;
}
///1 SV chỉ được đăng ký 1 đề tài
	$check_if_exist = $studentgroup->check_if_student_exist($id);
	if($check_if_exist > 0)
	{
		set_flash('thongbaoloi','Mỗi Sinh viên chỉ đăng ký được 1 đề tài');
		redirect('index.php?option=registertopic');
		redirect(url);
	}
// Kiểm tra đăng ký chưa
	$studentgroup2 = $studentgroup->count_studentgroup($id,$row['ID']);
	if($studentgroup2 > 0)
	{
		set_flash('thongbaoloi','Bạn đã đăng ký đề tài này rồi.');
		redirect('index.php?option=registertopic');
		redirect(url);
	}
// Kiểm tra một nhóm tối đa 2 thành viên
	$studentgroup3 = $studentgroup->count_by_groupId($idTicket);
	if($studentgroup3 == 2)
	{
		set_flash('thongbaoloi','Mỗi nhóm chỉ được phép đăng ký 2 thành viên');
		redirect('index.php?option=registertopic');
		redirect(url);
	}
// Kiểm tra một đề tài tối đa 2 nhóm
	$studentgroup1 = $studentgroup->count_studentgroup_thesisTopic($row['ID']);
	if($studentgroup1 == 4)
	{
		set_flash('thongbaoloi','Mỗi đề tài chỉ được phép đăng ký 2 nhóm');
		redirect('index.php?option=registertopic');
		redirect(url);
	}

	$mydata1=array(
		'Name'=>$row['Name'],
		'StudentID'=>$id,
		'TopicName'=>$row['Name'],
		'ClassRoom'=>"DHHTTT15",
		'Username'=>$rowUser['username'],
		'StudentName'=>$rowUser['fullname'],
		// 'GroupName'=>$idTicket,
		'Process'=>0,
		'TopicType'=>$teacher,
		'TeacherID'=>$row['InstructorsID'] ,
		'TeacherName'=>$row['Instructors'],
		'Subject'=>$row['Subject'],	
		'Type'=>$row['ThesisTopicTypeID'],
		'Status'=>1,
		'GuidePoints'=>0,
		'PointProcess'=>0,
		'ThesisTopicID'=>$row['ID'],
	);
	$registertopic->registertopic_insert($mydata1);

	$mydata=array(
		'ID1'=>$rowUser['ID'],
		'Username'=>$rowUser['username'],
		'FullName'=>$rowUser['fullname'],
		'ClassRoom'=>"DHHTTT15",
		'ThesisTopicID'=>$row['ID'],
		'TeacherID'=>$row['InstructorsID'],
		'TeacherName'=>$row['Instructors'],
		'SubGroupID'=>$idTicket,
		'registertopicID' => $registertopic->last_inserted(),
	);
	$studentgroup->studentgroup_insert($mydata);

	

	$mydata2=array(
		'GroupName'=>$idTicket,
	);
	$registertopic->registertopic_update($mydata2);

	// $mydata3=array(
	// 	'SubGroupID'=>$idTicket,
		
	// );
	// $studentgroup->studentgroup_update($mydata3);

		set_flash('thongbao','Đăng ký thành công.');
		redirect('index.php?option=registeredtopic_detail');
		redirect(url);
}
?>

<section class="booking">
	<div class="container bg-white" style="padding:20px;">
		<div class="row">
			<div class="col-md-8 d-flex flex-row">
				<div class="booking-confirmed booking-outer">
					<div class="confirmation-title flex ">
						<div class="form-title form-title-1">
							<h2 class="text-danger" style="color:#484CA3;">Đăng ký đề tài</h2>
						</div>
						<div class="payment-info detail">
							<div class="row">
								<div class="col-md-12">
								</div>
							</div>
						</div>
						<div class="col-md-12">
							<form action="" method="POST">
								<div class="billing-back-btn">
									<div class="billing-btn">
										<button name="Register" class="btn-blue btn-green btn-style-1 " type="submit">Đăng ký ngay</button>
									</div>
								</div>			
								<?php if(has_flash('thongbao')):  ?>
									<div class="alert alert-danger" > <?php echo get_flash('thongbao') ; ?> </div>
								<?php endif; ?>
								<table class="table" style="margin-top:20px;">
									<tbody>
										<tr>
											<td class="title">Tên đề tài</td>
											<td><?php echo $row['Name'] ?></td>
										</tr>
										<tr>
											<td class="title">Khoa</td>
											<td><?php echo $row['Subject'] ?></td>
										</tr>
										<tr>
											<td class="title">Loại đề tài</td>
											<td><?php echo $teacher ?></td>
										</tr>
										<tr>
											<td class="title">Phân Giáo viên hướng dẫn</td>
											<td><?php echo $row['Instructors'] ?></td>
										</tr>
										<tr>
											<td class="title">Mô tả</td>
											<td class="b-id text-danger"><?php echo $row['Description'] ?></td>
										</tr>
										<tr>
											<td class="title">Yêu cầu</td>
											<td class="b-id text-danger"><?php echo $row['Requirement'] ?></td>
										</tr>
										<tr>
											<td class="title">Kiến thức kỹ năng</td>
											<td class="b-id text-danger"><?php echo $row['SkillKnowledge'] ?></td>
										</tr>
									</tbody>
								</table>
							</div>
						</div>
					</div>
				</section>
				<section class="flight-destinations">
					<div class="container bg-white">
						<div class="row">
							<div class="account-info-wrapper">
								<h2 style="text-align:center;">Danh sách sinh viên đang ký cùng đề tài</h2>
							</div>
							<div class="col-md-12 col-sm-12">
								<div class="flight-table">
									<table>
										<thead>
											<tr>
												<th>ID</th>
												<!--<th>ID1</th>-->
												<th>MSSV</th>
												<th>Họ tên</th>
												<th>Lớp</th>
												<th>Chuyên ngành</th>
												<th>Giáo viên Hướng dẫn</th>
												<th>Nhóm</th>
												<th>Chọn cùng làm chung nhóm</th>
											</tr>
										</thead>
										<tbody>


											<?php foreach($listGroup as $row1):?>
												<?php 
												$subgroup = $row1['SubGroupID'];
												if($subgroup <1){
													$subgroup = $row1['ID'];
												}

												?>
												<tr>
													<td class="text-center text-danger"><?php echo $subgroup  ?></td>
													<!--<td class="text-center text-danger"><?php echo $rowUser['ID']  ?></td>-->
													<td class="text-center"><h6><?php echo $row1['username']  ?></td>
														<td class="text-center"><?php echo $row1['FullName']  ?></td>
														<td class="text-center"><?php echo $row1['ClassRoom']  ?></td>
														<td class="text-center"><?php echo $row['Subject']  ?></td>
														<td class="text-center"><?php echo $row1['TeacherName']  ?></td>
														<td class="text-center"><?php echo $subgroup  ?></td>
														<td class="text-center">

															<?php if($id == $row1['ID1'] ) { ?>
																<label for="<?php $subgroup ?>">Chọn nhóm (bạn đã đăng ký)</label>
															<?php } else if($subgroup > $row1['ID']) { ?>
																<?php echo $id;
																	echo $row1['ID'];
																 ?>
															<?php } else{ ?>
																<input type="radio" name="idTicket" id="<?php $subgroup  ?>" value="<?php echo $subgroup  ?>">
																<label for="<?php $subgroup  ?>">Chọn nhóm</label>
															<?php } ?>
														</td>
													</tr>
												<?php endforeach; ?>
											</tbody>
										</table>
									</div>
								</div>
							</div>
						</div>
					</form>
				</section>
				<style>
					.title {
						font-size: 17px;
						font-weight: bold;
						padding-right: 50px;
						color: #ff0000;
					}
				</style>

				<?php require_once('views/footer.php');
				// echo $row1['ID1'];
				// echo $id;
				// echo "aa" .$subgroup;
				// echo $idTicket;
				// echo "nè".$_SESSION['idTicket'];

				?>
