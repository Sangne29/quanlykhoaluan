loading...<?php
require_once('views/header.php');  
require_once ('config.php');
require_once ('system/load.php');
require_once ('system/core.php');
require_once ('system/Database.php');

if(!isset($_SESSION['customer_id'])) {
	redirect('index.php?option=login'); 
}
?>
<style>
	a {
		color: #0000FF;
	}
	a:hover {
		color: red;
	}
</style>
<section class="mt_search">
	<div>
		<img src="https://lms.iuh.edu.vn/pluginfile.php/1/theme_academi/slide1image/1676936055/lms-01.jpg">
	</div>
</section>

<section class="mt_search">
	<div class="container card bg-white" style="padding:30px !important; ">
		<div class="search-content-slider">
			<div class="section-title text-center ">
				<h2>In các phiếu thực tập</h2>
				<p>Hệ Thống Học Tập Trực Tuyến - IUH.</p>
			</div><p>Các mẫu mới nhất sẽ được khoa cập nhật tại đây. Sinh viên tải về các mẫu dưới và in ra giấy.</p>
			<a href="https://download1592.mediafire.com/wbmyb8vgy2ngWy4DmGmQy6x_y3_6x4Xv25o-XoumLtFU3fNdrQL--BDZXldzPM_Rp79em_G73aA-izgXKUpt2aU4ucGpyAsb-ml8lCzSUcGOhVztJESqa39JveixvSxaUSlLAsNgmcnAElDhIJZ_OCSE2sgZzgCoZ-RLdrftkKZiYLs/2yar4ogiydk4as5/Mau1_MauBaocaoThuctap_IS_V1.0.doc"> 1. Mẫu báo cáo thực tập doanh nghiệp </a>
        </br><hr>
            <a href="https://download1478.mediafire.com/eiaw2u5dfnzgQ5Fzcar-FbYhh7THDiynwoC0tA7Z_sFG8gb42sP3rrMZXqcdOb2U_83VIHphQ0OXA85AY3uMFXFwrguxFB-Lv_cacsQFWEchOxHB7SuJGoQ6Rn1Eiun-P_M71jHVlAciOoYiCS7iSzZZbPHKyNJzz1vZX-dmN7FHWsE/0boznbeu2mp1a1a/Mau2_DoanhNghiep-XacNhan-GioithieuThuctap.docx"> 2. Giấy xác nhận giới thiệu và giám sát sinh viên thực tập tại doanh nghiệp </a>
        </br><hr>
            <a href="https://download944.mediafire.com/yxziyy7rhmkgFujZ3GmqUTBHZjcTkOG6MjWPRPcLRvBI0pWiYfKHMjDL_2H0saZda7SNoJKUEtaCajnHqm3a9b_39LACjrFl4YvkePYuiNUY8K0TYJ6n-HM_UKMCOa-qwSGwIjayK0bfdYGDNDR4Mgi7Go_ASHExEnEJL2_P-ZSk8rA/iutxr7r9i12mg8x/Mau3_PhieuDanhGia_DoanhNghiep_IS.docx"> 3. Phiếu đánh giá sinh viên thực tập dành cho doanh nghiệp </a>
        </br><hr>
            <a href="https://download848.mediafire.com/f75gw54ytikglzwO6lS-JVy-fk4vNNuNqSdijSAt6Gj897MPzwrI-2n_2k5frC6h9FEdG_1ZFWBfs8gxvw0jf-2xfRJrB6SU7mUiXmdv1pWmIqkPk4N6yySAiSAGOzlkoYcMmxIV-EoRZuNDErswgdO0G8FeGgG5HS8j6RVNXMwi89s/b3loaizsj814psc/Mau4_PhieuDanhGia_GVPB.docx"> 4. Phiếu đánh giá sinh viên thực tập dành cho giảng viên giám sát </a>
        </br><hr>
		</div>
	</div>
</section>

<?php require_once('views/footer.php');  ?>