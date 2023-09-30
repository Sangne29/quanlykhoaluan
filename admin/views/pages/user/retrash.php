<?php
$id = $_REQUEST['id'];
$user = loadModel('user');
$data = array(
			'status'=>1,
				);

$user->user_update($data,$id);
set_flash('thongbao',' Khôi phục tài khoản thành công.');
redirect('index.php?option=user&cat=trash');
 ?>