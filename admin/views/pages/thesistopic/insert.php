<?php 
$teacher_user= loadModel('User');
$list_cat = $teacher_user->teacher_user();

$user = loadModel('user');
$userLoginId = $_SESSION['user_id'];
$rowUserLoginId=$user->user_rowid($userLoginId);

$str_catid='';
foreach ($list_cat as $cat)
	{	if($cat['ID']==$userLoginId)
{
	$str_catid.='<option value="'.$cat['ID'].'">'.$cat['fullname'].'</option>';
}
}
$SupervisingTeacher='';
foreach ($list_cat as $cat)
{	
	$SupervisingTeacher.='<option value="'.$cat['ID'].'">'.$cat['fullname'].'</option>';
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
								<div class="col-md-6 "> <h5 class="pl-2 mt-2 text-blues">Thêm đề tài mới</h5> </div>
								<div class="col-md-6 m-0">
									<ol class="breadcrumb bg-white float-sm-right m-0">
										<li class="breadcrumb-item m-0"><a href="~Admin">Home</a></li>
										<li class="breadcrumb-item active m-0">Thêm đề tài mới</li>
									</ol>
								</div>
							</div>
						</div>
						<section class="pt-2 container card col-md-12">
							<form name="form1" method="post" action="index.php?option=thesistopic&cat=process" enctype="multipart/form-data" >
								<input type="hidden" name="id" value="<?php echo $row['ID'] ?>">
								<div class="float-right p-3">
									<button class="btn btn-sm btn-success" name="THEM"  type="submit"> Thêm
									</div>
									<div class="row p-3">
										<div class="col-md-8">
											<div>
												<label for="psw"><span class="text-secondary">Tên đề tài</span></label>
												<input type="text" name="Name" value="" class="form-control" placeholder="Tên đề tài" required />
											</div>
											<div>
												<label for="psw"><span class="text-secondary">Mô tả</span></label>
												<textarea type="text" name="Description" rows="5" class="form-control" required ></textarea> 
											</div>
											<div>
												<label for="psw"><span class="text-secondary">Yêu cầu</span></label>
												<textarea type="text" name="Requirement" rows="5" class="form-control" required ></textarea> 
											</div>
											<div>
												<label for="psw"><span class="text-secondary">Kiến thức Kỹ năng</span></label>
												<textarea type="text" name="SkillKnowledge" rows="5" class="form-control" required ></textarea> 
											</div>
										</div>
										<div class="col-md-4">
											<div>
												<label for="psw"><span class="text-secondary">Chuyên ngành</span></label>
												<input type="text" name="Subject" value="" placeholder="Chuyên ngành" class="form-control"  required />
											</div>
											<div>
												<label>Loại đề tài</label>
												<select name="ThesisTopicTypeID"  class="form-control">
													<option value="1">Đại học (KLTN)</option>
													<option value="2"></option>
												</select>
											</div>

											<div hidden>
												<label>Phân Giáo viên hướng dẫn</label>
												<select name="InstructorsID"  class="form-control">
													<?php 
													echo $str_catid;
													?>
												</select>
											</div>
										</div>
									</div>
								</form>
							</section>
							<script>
								$("#thesistopic").addClass("active");
							</script>
						</div>
					</div>
				</div>
			</div>
		</section>
	</body>