<?php
$id = $_REQUEST['id'];
$topic = loadModel('topic');
$row = $topic->topic_rowid($id);
$topic->topic_delete($id);
set_flash('thongbao',' xóa thành công');
redirect('index.php?option=topic&cat=trash');
 ?>