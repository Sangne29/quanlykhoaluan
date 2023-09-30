<?php
$id = $_REQUEST['id'];
$post = loadModel('post');
$data = array(
			'status'=>2,
			'updated_at'=>date('y-m-d h:i:s'),
			'updated_by'=>$_SESSION['user_id']
				);

$post->post_update($data,$id);
set_flash('thongbao',' Khôi Phục thành công');
redirect('index.php?option=post&cat=trash');
 ?>