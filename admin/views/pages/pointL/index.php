<?php  
$pointL = loadModel('PointL');
$userId = $_SESSION['user_id'];
$role =  $_SESSION['Access'];
$index =  0;
$list=$pointL->list_pointL();
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
								<div class="col-md-6 "> <h5 class="pl-2 mt-2 text-blues">Chấm Liểm L0 (Alphabet) cho sinh viên</h5> </div>
								<div class="col-md-6 m-0">
									<ol class="breadcrumb bg-white float-sm-right m-0">
										<li class="breadcrumb-item m-0"><a href="~Admin">Home</a></li>
										<li class="breadcrumb-item active m-0">Chấm Liểm L0 (Alphabet) cho sinh viê</li>
									</ol>
								</div>
								
							</div>
						</div>
						<section class=" ">
							<div class=" bg-white card">
								<div class="row justify-content-start">
									
								</div>
								<div class="row">
									<div  class="card-block p-3">
										<?php if(has_flash('thongbao')):  ?>
											<div class="alert alert-success" > <?php echo get_flash('thongbao') ; ?> </div>
										<?php endif; ?>

										<div style="padding: 10px;display: flex;line-height: 2;">Lo1: Xác định được yêu cầu của khóa luận cần thực hiện<br>
											Lo2: Phân tích yêu cầu (hiện trạng, nghiệp vụ) và mô hình hóa được yêu cầu của đề tài.<br>															
											Lo3: Thiết kế một hệ thống thông tin/đưa ra giải pháp đáp ứng được yêu cầu của đề tài.<br>
											Lo4: Hiện thực hóa hệ thống thông tin theo thiết kế đã đưa ra/Hiện thực giải pháp đã đưa ra.<br>
											Lo5: Viết được báo cáo khóa luận tốt nghiệp.<br>
											Lo6: Trình bày được các kiến thưc nền tảng liên quan đến đề tài khóa luận.<br>
											Lo7: Đánh giá việc hiện thực khóa luận đáp ứng yêu cầu đề tài khóa luận.<br>
											Lo8: Bảo vệ (defend) kết quả khóa luận trước giảng viên phản biện.<br>
										</div>
										<div class="col-md-9  w-100 ">
                                            <a href="index.php?option=pointL&cat=download" class="btn btn-info">Download</a>
										</div>
										
										<div class="col-md-12 p-3">
                                           
											<table id="myTable1" class="table table-striped table-bordered dt-responsive text-center">
												<thead>
													<tr class='table-info'>
														<th>STT</th>
														<th>Họ và tên</th>
														<th>MSSV</th>
														<th>Đề tài</th>
														<th>L01</th>
														<th>L02</th>
														<th>L03</th>
														<th>L04</th>
														<th>L05</th>
														<th>L06</th>
														<th>L07</th>
														<th>L08</th>
														<th>#</th>

													</tr>
												</thead>
												<tbody>
                                                
													<?php foreach($list as $row):?>
                                                    
                                                        <tr>
                                                        <form method="POST" action="index.php?option=pointL&cat=update&id=<?php echo $row['id'];?>">
                                                            <td><?php echo $index + 1  ?></td>
                                                            <td><?php echo $row['StudentName']  ?></td>
                                                            <td><?php echo $row['username']  ?></td>
                                                            <td class="text-break col-md-3"><?php echo $row['TopicName']  ?></td>
                                                            
                                                            <?php
                                                            for($i = 1 ; $i <= 8 ; $i++){
                                                                echo "
                                                                    <td>
                                                                    <select class='form-control' name='L0".$i."'>
                                                                        <option selected ></option>
                                                                        <option ".($row['L0'.$i] == 'A' ? 'selected' : '')." >A</option>
                                                                        <option ".($row['L0'.$i] == 'B' ? 'selected' : '')." >B</option>
                                                                        <option ".($row['L0'.$i] == 'C' ? 'selected' : '')." >C</option>
                                                                        <option ".($row['L0'.$i] == 'D' ? 'selected' : '')." >D</option>
                                                                    </select>
                                                                    </td>
                                                                ";
                                                                
                                                            } 
                                                            ?>
                                                            <td><input type="submit"  class="btn btn-success form-control" value="Cập nhật"></td>
                                                        </form>
                                                        </tr>
											        <?php endforeach; ?>
                                                    
										        </tbody>

									    </table>
                                    
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