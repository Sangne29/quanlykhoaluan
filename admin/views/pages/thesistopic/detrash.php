<?php
$id = $_REQUEST['id'];
$thesistopic = loadModel('thesistopic');
$data = array(
			'status'=>0,
				);

$thesistopic->thesistopic_update($data,$id);
set_flash('thongbao',' Xóa đề tài thành công');
redirect('index.php?option=thesistopic');
 ?>