<?php
$id = $_REQUEST['id'];
$thesistopic = loadModel('thesistopic');
$row = $thesistopic->thesistopic_rowid($id);

$user = loadModel('user');
$userLoginId = $_SESSION['user_id'];
$rowUserLoginId=$user->user_rowid($userLoginId);

if($rowUserLoginId['access'] != 8){
	redirect('404unauthoz.php');
}else{
	$tt = ($row['Status']==1)?2:1;
	echo $tt;
	$data = array(
		'status'=>$tt
	);
	$thesistopic->thesistopic_update($data,$id);
	set_flash('thongbao',' Thay Đổi Trạng Thái Thành Công');
	redirect('index.php?option=thesistopic&cat=Allthesistopic');
}

?>