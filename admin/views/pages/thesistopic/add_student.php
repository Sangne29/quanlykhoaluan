<?php
    $student_group = loadModel('student_group');
    $nongroup_student = $student_group->nongroup_student_list();
    // print_r($nongroup_student);
	$user = loadModel('User');
	$registertopic= loadModel('registertopic');

	$thesistopicID = (int)$_REQUEST['id'];
	$u_thesistopic= loadModel('thesistopic');
	$row=$u_thesistopic->thesistopic_rowid($thesistopicID);


	$studentgroup= loadModel('Student_group');
	$listGroup=$studentgroup->all_studentgroup($row['ID']);

	
	$pointL = loadModel('PointL');


	$teacher = "Thực thập doanh nghiệp";
	if ($row['ThesisTopicTypeID'] == 1) 
	{
		$teacher = "Khóa luận tốt nghiệp.";
	}

	if(isset($_POST['btn_add_student'])){
		$id = $_POST['user_id'];
		$rowUser= $user->list_user_cuss($id);
		$studentgroup1 = $studentgroup->count_studentgroup_thesisTopic($row['ID']);
		if($studentgroup1 == 4)
		{
			set_flash('thongbaoloi','Mỗi đề tài chỉ được phép đăng ký 2 nhóm');
			redirect('index.php?option=thesistopic&cat=add_student&id='.$thesistopicID);
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
		'PointProcess2'=>0,
		'ThesisTopicID'=>$row['ID'],
	);
	$registertopic->add_student_registertopic_insert($mydata1);
	$registertopic_last_inserted = $registertopic->last_inserted();
	$mydata=array(
		'ID1'=>$rowUser['ID'],
		'Username'=>$rowUser['username'],
		'FullName'=>$rowUser['fullname'],
		'ClassRoom'=>"DHHTTT15",
		'ThesisTopicID'=>$row['ID'],
		'TeacherID'=>$row['InstructorsID'],
		'TeacherName'=>$row['Instructors'],
		// 'SubGroupID'=>$idTicket,
		'registertopicID' => $registertopic_last_inserted,
	);
	$studentgroup->studentgroup_insert($mydata);

	$idTicket = $studentgroup->last_inserted();
	$_SESSION['idTicket'] = $idTicket;
	print_r($idTicket);
	$mydata2=array(
		'GroupName'=>$idTicket,
	);
	$registertopic->registertopic_update($mydata2, $registertopic_last_inserted);

	$mydata3=array(
		'SubGroupID'=>$idTicket,
		
	);
	$studentgroup->studentgroup_update($mydata3);
	$pointL->pointL_insert(array(
		'userId' => $id,
		'registertopicId' => $registertopic_last_inserted,
	));


		set_flash('thongbao','Đăng ký thành công.');
		redirect('index.php?option=thesistopic&cat=add_student&id='.$thesistopicID);
	}
?>

<?php require_once 'views/header.php'; ?>
<body style="background-color:#F2F2F2;">
	<?php require_once 'views/Mainmenu.php'; ?>
	<section>
		<div class="main-content container-fluid">
			<div class="row">
				<?php require_once 'views/LeftMenu.php'; ?>
				<div class="col-md-10 ">
					<div class="p-4">
						<div class="card card-title bg-white p-1">
							<div class="row">
								<div class="col-md-6 "> <h5 class="pl-2 mt-2 text-blues">Danh sách sinh viên chưa có đề tài </h5> </div>
								<div class="col-md-6 m-0">
									<ol class="breadcrumb bg-white float-sm-right m-0">
										<li class="breadcrumb-item m-0"><a href="~Admin">Home</a></li>
										<li class="breadcrumb-item active m-0">Danh sách sinh viên chưa có đề tài</li>
									</ol>
								</div>
							</div>
						</div>
						<section class=" ">
							<div class=" bg-white card">
								<?php if(has_flash('thongbao')):  ?>
												<div class="alert alert-success" > <?php echo get_flash('thongbao') ; ?> </div>
											<?php endif; ?>
											<?php if(has_flash('thongbaoloi')):  ?>
												<div class="alert alert-danger" > <?php echo get_flash('thongbaoloi') ; ?> </div>
											<?php endif; ?>
								<div class="row justify-content-start">
									<div class="col-md-3">
										
									</div>
								</div>
								<div class="row">
									<div  class="card-block p-3">
										<?php if(has_flash('thongbao')):  ?>
											<div class="alert alert-success" > <?php echo get_flash('thongbao') ; ?> </div>
										<?php endif; ?>
										<div class="col-md-9  w-100 ">
										</div>
										<div class="col-md-12 p-3">
											<table id="myTable1" class="table table-striped table-bordered dt-responsive text-center">
												<thead>
													<tr class='table-info'>
														<th>STT</th>
														<th>Họ và tên</th>
														<th>MSSV</th>
														<th>Giới tính</th>
														<th>SĐT</th>
														<th>Email</th>
														<th>Chọn nhóm</th>
														
														
													</tr>
												</thead>
												<tbody>
													
														<?php foreach($nongroup_student as $row):?>
														<tr>
															<td></td>
															<td><?php echo $row['fullname']  ?></td>
															<td><?php echo $row['username']  ?></td>
															<td><?php echo $row['gender']  ?></td>
															<td><?php echo $row['phone']  ?></td>
															<td><?php echo $row['email']  ?></td>
															<!-- <td><a href="index.php?option=thesistopic&cat=select_group&id=<?php echo $row['ID'];?>">Thêm vào đề tài</a></td> -->
															<td><form action="" method="POST" >
																<input type="submit" class='btn btn-info add_student_btn' name="btn_add_student" id="add_student_<?php echo $row['ID'];?>" value="Thêm" />
																<input type="text" style="display:none;" name="user_id" value="<?php echo $row['ID'];?>">
															</form></td>
														
														</tr>
														<?php endforeach; ?>
										        </tbody>
									</table>
									
								</div>
							</div>
						</div>
					</section>
					<script>
						// $("#registertopic").addClass("active");
					</script>
				</div>
			</div>
		</div>
	</div>
</section>

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