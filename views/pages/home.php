<?php
require_once('views/header.php');  
require_once ('config.php');
require_once ('system/load.php');
require_once ('system/core.php');
require_once ('system/Database.php');
?>
<?php require_once('views/header.php');
?>
<section class="mt_search">
	<div>
		<img src="https://lms.iuh.edu.vn/pluginfile.php/1/theme_academi/slide1image/1676936055/lms-01.jpg">
	</div>
</section>

<section class="mt_search">
	<div class="container card bg-white" style="padding:30px !important; ">
		<div class="search-content-slider">
			<div class="section-title text-center ">
				<h2>Giới thiệu chung</h2>
				<?php
				date_default_timezone_set("asia/ho_chi_minh");
				echo "Hôm nay là ngày " . date("Y-m-d") . "<br>";
				echo "Thời gian là " . date("h:i:s");
					?>
				<p>Hệ Thống Học Tập Trực Tuyến - IUH.</p>
			</div>
		<div>
		<div class="logo pull-left">
								<a href="/"><img alt="Image" height="45" src="https://lms.iuh.edu.vn/pluginfile.php/1/theme_academi/logo/1676936055/Logo_IUH.png"></a>
							</div>
	</div>
			Chào mừng các bạn đến với kênh học tập trực tuyến của Trường Đại học Công nghiệp TP.HCM, hệ thống cung cấp cho sinh viên những khóa học trực tuyến song song với các lớp học trên lớp mà sinh viên đang học tại trường, trong thời gian tham gia khoa học, sinh viên vui lòng làm bài tập theo yêu cầu đầy đủ. Chúc các bạn có nhiều kiến thức trên kênh học trực tuyến này.
Chào mừng các bạn đến với kênh học tập trực tuyến của Trường Đại học Công nghiệp TP.HCM, hệ thống cung cấp cho sinh viên những khóa học trực tuyến song song với các lớp học trên lớp mà sinh viên đang học tại trường, trong thời gian tham gia khoa học, sinh viên vui lòng làm bài tập theo yêu cầu đầy đủ. Chúc các bạn có nhiều kiến thức trên kênh học trực tuyến này.
		</div>
	</div>
</section>

<!-- Breadcrumb -->
<!-- BreadCrumb Ends -->
<!-- Destinations -->
<section class="destinations">
	<div class="container " style="padding:0px;">
		<div class="row">
			<div class="col-md-12 bg-white">
				<div class="row">
					<div class="col-md-12">
						<div class="destination-outer">
							<div class="destination-fw-item " style="padding-top:10px;">
								<div class="row">
									<div class="col-md-4">
										<div class="destination-fw-image">
											<img height="150" src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcR9lOldVW1d7bYngG12u0eZ697YNNOnCQwQ3g&usqp=CAU" alt="Image">
										</div>
									</div>
									<div class="col-md-8">
										<div class="destination-fw-desc fw-content">
											<h3><a href="~/chi-tiet-bai-viet/@item.slug">Hướng dẫn sử dụng app Moodle trên hệ thống học tập trực tuyến LMS</a></h3>
											<div class="package-content">
												<span>07/01/2021 15:45:00</span><br>
												<p>Trung tâm Quản trị Hệ thống - Trường Đại học Công nghiệp TP.HCM xin giới thiệu cách cài đặt và sử dụng app Moodle trên hệ thống học tập trực tuyến lms.iuh.edu.vn</p>
												<a href="">Đọc thêm ></a>
											</div>
										</div>
									</div>
								</div>

								<div class="row" style="margin-top: 20px;">
									<div class="col-md-4">
										<div class="destination-fw-image">
											<img  height="150"  src="https://images2.thanhnien.vn/uploaded/dieutrang.qc/2021_06_04/iuh/iuh-1_OMMW.jpg?width=500" alt="Image">
										</div>
									</div>
									<div class="col-md-8">
										<div class="destination-fw-desc fw-content">
											<h3><a href="~/chi-tiet-bai-viet/@item.slug">Hướng dẫn sử dụng app Moodle trên hệ thống học tập trực tuyến LMS</a></h3>
											<div class="package-content">
												<span>07/01/2021 15:45:00</span><br>
												<p>Trung tâm Quản trị Hệ thống - Trường Đại học Công nghiệp TP.HCM xin giới thiệu cách cài đặt và sử dụng app Moodle trên hệ thống học tập trực tuyến lms.iuh.edu.vn</p>
												<a href="">Đọc thêm ></a>
											</div>
										</div>
									</div>
								</div>


							</div>
						</div>
					</div>
				</div>
			</div>
			
		</div>
	</div>
</section>
<?php require_once('views/footer.php');
