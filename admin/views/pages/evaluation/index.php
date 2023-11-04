<?php  
$category = loadModel('thesistopic');
$userId = $_SESSION['user_id'];
$role =  $_SESSION['Access'];
$list_thesistopic_name=$category->thesistopic_name_distinct_list($userId,$role);
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
								<div class="col-md-6 "> <h5 class="pl-2 mt-2 text-blues">Đánh giá sinh viên theo đề tài</h5> </div>
								<div class="col-md-6 m-0">
									<ol class="breadcrumb bg-white float-sm-right m-0">
										<li class="breadcrumb-item m-0"><a href="~Admin">Home</a></li>
										<li class="breadcrumb-item active m-0">Đánh giá sinh viên</li>
									</ol>
								</div>
								
							</div>
						</div>
						<section class=" ">
							<div class=" bg-white card">
								<div class="row justify-content-start">
									<div class="col-md-3">
										<select name="select_thesistopic_evaluation" id="select_thesistopic_evaluation">
                                            <option disabled selected value="-1"></option>
                                            <?php foreach($list_thesistopic_name as $row):?>
												<option value="<?php echo $row['id'] ?> "><?php echo $row['Name'] ?> </option>
											<?php endforeach; ?>
                                        </select>
                                        <button class='btn btn-info my-2' id="select_thesistopic_btn" >Chọn đề tài</button>
									<button class='btn btn-primary my-2 ' id="download_evaluation" >Tải tất cả bảng điểm</button>
                                        
                                        
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
											<!-- <table id="myTable1" class="table table-striped table-bordered dt-responsive text-center">
												<thead>
													<tr class='table-info'>
														<th>STT</th>
														<th>Họ và tên</th>
														<th>MSSV</th>
														<th>Lớp</th>
														<th>Nhóm</th>
														<th>Tiến độ</th>
														<th>Kết quả đánh giá</th>
														<th>Tên đề tài</th>
														<th>Loại đề tài</th>
														<th>Giáo viên hướng dẫn</th>
														<th>Bộ môn</th>
													</tr>
												</thead>
												<tbody>
													<?php foreach($list as $row):?>
													<tr>
														<td></td>
														<td><?php echo $row['StudentName']  ?></td>
														<td><?php echo $row['username']  ?></td>
														<td><?php echo $row['ClassRoom']  ?></td>
														<td><?php echo $row['GroupName']  ?></td>
														<td>  <?php echo $row['Process']  ?> %</td>
														<td><a href="index.php?option=registertopic&cat=ResulTofEvaluation&id=<?php echo $row['ID']; ?>">KQ Đánh giá </a></td>
														<td> <?php echo $row['TopicName']  ?></td>
														<td> <?php echo $row['TopicType']  ?> </td>
														<td> <?php echo $row['TeacherName'] ?></td>
														<td> <?php echo $row['Subject']  ?></td>
												    </tr>
											        <?php endforeach; ?>
										        </tbody>

									</table> -->
								</div>
							</div>
						</div>
					</section>
					<script>
						$("#registertopic").addClass("active");
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


<script>
    $('#select_thesistopic_btn').click(function(){
        if(!$("#select_thesistopic_evaluation").val()){
        alert("Chưa chọn đề tài")
		}else{
			window.location = 'index.php?option=evaluation&cat=dashboard&id=' + $("#select_thesistopic_evaluation").val();
		}
    })
	$("#download_evaluation").click(function(){
		window.location = 'index.php?option=evaluation&cat=download';
	})
</script>