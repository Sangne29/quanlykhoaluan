<?php
$id = $_REQUEST['id'];
$user = loadModel('user');
$row = $user->user_rowid($id);
$user->user_delete($id);
set_flash('thongbao',' Xóa tàn khoản thành công');
redirect('index.php?option=user&cat=trash');
 ?>