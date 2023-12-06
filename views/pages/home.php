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

<!-- <section class="mt_search">
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
	Tiền thân của Trường Đại học Công nghiệp thành phố Hồ Chí Minh là Trường Huấn nghiệp Gò Vấp do các tu sĩ dòng Don Bosco thành lập 11/11/1956 tại xã Hạnh Thông, Quận Gò Vấp, Tỉnh Gia Định. Năm 1968, Trường được đổi tên thành Trường tư thục Trung học Kỹ thuật đệ nhất cấp Don Bosco. Đến ngày 31/01/1970, Trường được cải biên thành Trường tư thục Trung học Kỹ thuật đệ nhị cấp Don Bosco, được gọi tắt là Trường Trung học Kỹ thuật Don Bosco. Sau ngày hòa bình, thống nhất đất nước, quân giải phóng miền Nam tiếp quản và ngày 19/12/1975 Trường được bàn giao cho Tổng cục Cơ khí Luyện kim và Điện tử. Năm 1978, Trường được đổi tên thành Trường Công nhân Kỹ thuật IV trực thuộc Bộ Cơ khí và Luyện kim. Đến năm 1994, Trường hợp nhất với Trường Trung học Hóa chất II tại thành phố Biên Hòa thành Trường Trung học Kỹ thuật Công nghiệp IV, trực thuộc Bộ Công Nghiệp. Tháng 3 năm 1999, Trường được nâng cấp thành Trường Cao đẳng Công nghiệp IV và tháng 12 năm 2004, Trường được nâng cấp thành Trường Đại học Công nghiệp thành phố Hồ Chí Minh theo quyết định số 214/2004/QĐ - TTg của Thủ tướng Chính phủ và Trường được Thủ tưởng Chính phủ phê duyệt thí điểm đổi mới cơ chế hoạt động giai đoạn 2015-2017 theo quyết định số 902/QĐ-TTg ngày 23 tháng 6 năm 2015, bắt đầu thực hiện từ năm học 2015 - 2016. Trường Đại học Công nghiệp thành phố Hồ Chí Minh là một trong những cơ sở giáo dục đại học lớn tại Việt Nam.
		</div>
	</div>
</section> -->

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
							<div class="destination-fw-item " style="padding-top:10px; padding-bottom: 90px;">
								<div class="row">
									<div class="col-md-4">
										<div class="destination-fw-image">
											<img  src="https://i.ytimg.com/vi/6RzQvN238vQ/maxresdefault.jpg" alt="Image">
										</div>
									</div>
									<div class="col-md-8">
										<div class="destination-fw-desc fw-content">
											<h3><a href="https://iuh.edu.vn/" target="_blank">Trường đại học công nghiệp thành phố Hồ chí Minh</a></h3>
											<div class="package-content">
												<p>Tiền thân của Trường Đại học Công nghiệp thành phố Hồ Chí Minh là Trường Huấn nghiệp Gò Vấp do các tu sĩ dòng Don Bosco thành lập 11/11/1956 tại xã Hạnh Thông, Quận Gò Vấp, Tỉnh Gia Định. Năm 1968, Trường được đổi tên thành Trường tư thục Trung học Kỹ thuật đệ nhất cấp Don Bosco. Đến ngày 31/01/1970, Trường được cải biên thành Trường tư thục Trung học Kỹ thuật đệ nhị cấp Don Bosco, được gọi tắt là Trường Trung học Kỹ thuật Don Bosco. Sau ngày hòa bình, thống nhất đất nước, quân giải phóng miền Nam tiếp quản và ngày 19/12/1975 Trường được bàn giao cho Tổng cục Cơ khí Luyện kim và Điện tử. Năm 1978, Trường được đổi tên thành Trường Công nhân Kỹ thuật IV trực thuộc Bộ Cơ khí và Luyện kim. Đến năm 1994, Trường hợp nhất với Trường Trung học Hóa chất II tại thành phố Biên Hòa thành Trường Trung học Kỹ thuật Công nghiệp IV, trực thuộc Bộ Công Nghiệp. Tháng 3 năm 1999, Trường được nâng cấp thành Trường Cao đẳng Công nghiệp IV và tháng 12 năm 2004, Trường được nâng cấp thành Trường Đại học Công nghiệp thành phố Hồ Chí Minh theo quyết định số 214/2004/QĐ...</p>
												<a href="https://iuh.edu.vn/">Đọc thêm ></a>
											</div>
										</div>
									</div>
								</div>

								<div class="row" style="margin-top: 20px;">
									
									<div class="col-md-8">
										<div class="destination-fw-desc fw-content">
											<h3><a href="https://reviewedu.net/ky-tuc-xa-iuh-dai-hoc-cong-nghiep-tphcm">Review đại học Công nghiệp thành phố Hồ Chí Minh</a></h3>
											<div class="package-content">
												<p>IUH- Đại học công nghiệp TpHCM được biết đến là một trường đào tạo đa ngành với chất lượng tốt. Do đó, được nhiều sinh viên và phụ huynh tin tưởng lựa chọn. Nhà trường không chỉ chú trọng đến chất lượng đào tạo, tuyển sinh mà còn quan tâm đến đời sống của sinh viên. Thông qua hệ thống ký túc xá của trường được đầu tư bài bản, với đầy đủ trang thiết bị, tiện nghi. Đem đến cho sinh viên cảm giác thoải, đây được xem như ngôi nhà thứ hai của các bạn sinh viên. </p>
												<a href="https://reviewedu.net/ky-tuc-xa-iuh-dai-hoc-cong-nghiep-tphcm">Đọc thêm ></a>
											</div>
										</div>
									</div>
									<div class="col-md-4">
										<div class="destination-fw-image">
										<img  src="https://reviewedu.net/wp-content/uploads/2022/07/dhcongnghiep_mqat.jpg" alt="Image">
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
