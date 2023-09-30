<?php
$id = $_REQUEST['id'];
$user = loadModel('user');
$data = array(
			'status'=>0,
				);

$user->user_update($data,$id);
set_flash('thongbao',' Xóa tài khoản thành công.');
redirect('index.php?option=user');
 ?>