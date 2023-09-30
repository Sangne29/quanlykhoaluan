
 <?php
$id = $_REQUEST['id'];
$thesistopic = loadModel('thesistopic');
$data = array(
			'status'=>2,
				);

$thesistopic->thesistopic_update($data,$id);
set_flash('thongbao',' Khôi Phục thành công');
redirect('index.php?option=thesistopic&cat=trash');
 ?>