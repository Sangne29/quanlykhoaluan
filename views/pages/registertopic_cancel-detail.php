<?php
require_once ('system/core.php');
$id = $_REQUEST['id'];
$registerTopic = loadModel('u_registertopic');
$row = $registerTopic->registertopic_rowid($id);
$registerTopic->registertopic_delete($id);

$Student_group = loadModel('Student_group');
$row = $Student_group->studentgroup_rowid($id);
$Student_group->studentgroup_delete($id);

set_flash('thongbao',' Hủy đăng ký thành công');
redirect('index.php?option=registeredtopic_detail');

?>