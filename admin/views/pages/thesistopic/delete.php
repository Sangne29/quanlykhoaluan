<?php
$id = $_REQUEST['id'];
$thesistopic = loadModel('thesistopic');
$row = $thesistopic->thesistopic_rowid($id);
$thesistopic->thesistopic_delete($id);
set_flash('thongbao',' Đã xóa vĩnh viễn và không thể khôi phục');
redirect('index.php?option=thesistopic&cat=trash');
 ?>